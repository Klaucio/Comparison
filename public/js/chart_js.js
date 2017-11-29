var densityCanvas = document.getElementById("densityChart");

var data_for_datasets=new Object();
data_for_datasets.data_precos = [];
var lista_servicos=new Array() ;
var lista_servicos_nomes=new Array() ;
var selected_banks=[];
var all_datasets_list=[];
var count_services=0;
var colors=['rgba(255, 206, 86, 1)',
            'rgba(255, 206, 86, 1)','rgba(54, 162, 235, 1)'];

window.onload = function(){

    pushLabelsToArray();
    pushBarLabelList();
    fillDataSetslist();
    createChart();
    console.log(all_datasets_list);

};
function pushLabelsToArray() {
    for (var index in bank_data) {
        lista_servicos.push({"id":bank_data[index].id,"nome":bank_data[index].nome});
        lista_servicos_nomes.push(bank_data[index].nome);
    }
}
function pushBarLabelList(){

    for (var index in bank_data){
        for (var i in bank_data[index].bancos) {
            if (lista_bancos_ids.indexOf(bank_data[index].bancos[i].pivot.banco_id) > -1) {
                // console.log(bank_data[index].id + ' with ' + bank_data[index].bancos[i].abreviatura);
                if(selected_banks.indexOf(bank_data[index].bancos[i])<0){
                    selected_banks.push(bank_data[index].bancos[i])
                }
            }
        }

    }
}
function fillDataSetslist() {
    //ciclo que define a label de cada Barra no grafico

    for (var index in selected_banks) {
        //Quando Inicia a atribuição, aqui atribui-se a primeira label(barra)
        if (!data_for_datasets.label) {
            data_for_datasets.label = selected_banks[index].abreviatura;
            data_for_datasets.canal=selected_banks[index].pivot.canal_id;
        } else {
            //Atribuição das restantes labels
            data_for_datasets.label = selected_banks[index].abreviatura;
        }

        var data_precos=[];
        for(var servico in lista_servicos){
            if (selected_banks[index].pivot.servico_id==lista_servicos[servico].id)
                data_precos.push(selected_banks[index].pivot.preco);
            else{
               data_precos.push(null);
            }
        }
        all_datasets_list.push({"label":data_for_datasets.label,"data":data_precos});
    }



}

function createChart() {
    Chart.defaults.global.defaultFontSize = 14;
    var randomNumber = Math.floor(Math.random()*colors.length);
    var datasets=[];

    for (var index in all_datasets_list){
        console.log();
        var data={
            label: all_datasets_list[index].label,
            data: all_datasets_list[index].data,
            backgroundColor: colors[randomNumber],
            borderWidth: -1,
            yAxisID: "y-axis-gravity"
        };
        // console.log(all_datasets_list[index].data_precos);
        datasets.push(data);
    }

     var planetData = {
         labels: lista_servicos_nomes,
         datasets: datasets
     };

     var chartOptions = {
         scales: {
             xAxes: [{
                 barPercentage: 1,
                 categoryPercentage: 0.6
             }],
             yAxes: [ {
                 id: "y-axis-gravity"
             }]
         },
         animation: {
             onComplete: function () {
                 var chartInstance = this.chart;
                 var ctx = chartInstance.ctx;
                 console.log(chartInstance);
                 var height = chartInstance.controller.boxes[0].bottom;
                 ctx.textAlign = "center";
                 Chart.helpers.each(this.data.datasets.forEach(function (dataset, i) {
                     var meta = chartInstance.controller.getDatasetMeta(i);
                     Chart.helpers.each(meta.data.forEach(function (bar, index) {
                         ctx.fillText(dataset.label, bar._model.x, height - ((height - bar._model.y) / 2));
                     }),this)
                 }),this);
             }
         },
        //  responsive: true,
        // // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
        //  maintainAspectRatio: false,
     };

     var barChart = new Chart(densityCanvas, {
         type: 'bar',
         data: planetData,
         options: chartOptions
    });

}

// Chart.defaults.global.defaultFontFamily = "Lato";


function showIt() {
    for (var index in bank_data) {
        var obj = bank_data[index];
        console.log(obj.nome);
        // ...
    }

}

function setthisShit() {

    var densityData = {
        label: 'BIM',
        data: [27, 43, 55, 33, 26, 87],
        backgroundColor: 'rgba(255, 99, 132, 0.2)',
        borderWidth: 0,
        yAxisID: "y-axis-gravity"
    };

    var gravityData = {
        label: 'BCI',
        data: [42, 89, 98, 37, 23, 90],
        backgroundColor: 'rgba(255, 206, 86, 1)',
        borderWidth: 0,
        yAxisID: "y-axis-gravity"
    };
    var data3 = {
        label: 'Barclays',
        data: [37, 69, 78, 57, 31, 80],
        backgroundColor: 'rgba(54, 162, 235, 1)',
        borderWidth: 0,
        yAxisID: "y-axis-gravity"
    };




    for (var j in lista_servicos){
        // console.log(selected_banks[index].abreviatura+" prenchendo servicos "+data_for_datasets.label);
        if (lista_servicos[count_services] == (bank_data[j].nome)) {
            // console.log(lista_servicos[count_services]+" =aceite= "+bank_data[j].nome);
            for (var k in bank_data[count_services].bancos) {

                if (lista_servicos[count_services] == bank_data[j].nome
                    && data_for_datasets.label == bank_data[count_services].bancos[k].abreviatura
                    && data_for_datasets.canal == bank_data[count_services].canals[k].id) {
                    // console.log(j+" Satisfaz "+data_for_datasets.label+"=="+k);
                    data_for_datasets.data_precos.push(bank_data[count_services].bancos[k].pivot.preco)
                    // console.log(j+" vindas with length"+bank_data[count_services].bancos.length+" " +k);
                    // console.log("pushing "+ data_for_datasets.label);

                }else {
                    // console.log(j+" Os Zeros entao k "+index+"=="+k);
                    // console.log(j+" vindas length"+bank_data[count_services].bancos.length+"===" +k);
                    // console.log("pushing "+ data_for_datasets.label);
                }
                // console.log(lista_servicos[count_services]);

            }
            // console.log(selected_banks[index].abreviatura+" prenchendo servicos "+data_for_datasets.label);
            // console.log(j+" Aceitavel E o que devia ser");

        }else {
            // console.log(selected_banks[index].abreviatura+" prenchendo servicos "+data_for_datasets.label);

            data_for_datasets.data_precos.push(0);
            // console.log(index+"====="+data_for_datasets.label
            //     +" =Naao"+count_services+" aceite= "+bank_data[j].nome);

        }
        // if(count_services>=j){
        //     console.log(j+"sou J Incrementando ++ "+count_services);
        //     count_services++;
        //
        //     // count_services_control++;
        //     all_datasets_list.push(data_for_datasets);
        // }else{
        //     console.log("Devia manter ++ "+count_services);
        // }
        // console.log(count_services+" controlador "+index);

    }
    all_datasets_list.push(data_for_datasets);
    count_services++;


}

// setTimeout(function() {
//     addData(barChart, '# of Votes 2017', '#ff0000', [16, 14, 8]);
// }, 3000);
// function addData(chart, label, color, data) {
//     chart.data.datasets.push({
//         label: label,
//         backgroundColor: color,
//         data: data
//     });
//     chart.update();
// }


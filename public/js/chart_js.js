var densityCanvas = document.getElementById("densityChart");

var data_for_datasets=new Object();
data_for_datasets.data_precos = [];
var lista_servicos=new Array() ;
var lista_servicos_nomes=new Array() ;
var selected_banks=[];
var selected_canals=[];
var all_datasets_list=[];
var count_services=0;
var colors=['rgb(209, 0, 93)','rgb(255, 181, 72)','rgb(13, 72, 179)',
            'rgb(13, 72, 179)','rgb(161, 0, 86)','rgb(103, 160, 16)'
            ];
// [{"cor":'rgb(209, 0, 93)'},
//     {"cor":'rgb(255, 181, 72)'},
//     {"cor":'rgb(13, 72, 179)'},
//     {"cor":'rgb(13, 72, 179)'},
//     {"cor":'rgb(161, 0, 86)'},
//     {"cor":'rgb(103, 160, 16)'},
// ];

window.onload = function(){

    pushLabelsToArray();
    pushBarLabelList();
    fillDataSetslist();
    createChart();
    console.log(selected_canals);
    console.log(selected_banks);

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
                    selected_canals.push(bank_data[index].canals[i])
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
            data_for_datasets.label = selected_banks[index].abreviatura+" || Através de: "+selected_canals[index].nome;
            // data_for_datasets.canal=selected_banks[index].pivot.canal_id;
        } else {
            //Atribuição das restantes labels
            data_for_datasets.label = selected_banks[index].abreviatura+" || Através de: "+selected_canals[index].nome;
        }

        var data_precos=[];
        for(var servico in lista_servicos){
            if (selected_banks[index].pivot.servico_id==lista_servicos[servico].id)

                data_precos.push(selected_banks[index].pivot.preco);
            else{
               data_precos.push(0);
            }
        }
        all_datasets_list.push({"label":data_for_datasets.label,"data":data_precos});
    }

}

function createChart() {
    Chart.defaults.global.defaultFontSize = 14;
    var randomNumber;
    var datasets=[];

    for (var index in all_datasets_list){
        console.log();
        randomNumber= Math.floor(Math.random()*colors.length);
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

         tooltips: {
             enabled:true,
         },
         scales: {
             xAxes: [{
                 barPercentage: 1,
                 categoryPercentage: 0.6
             }],
             yAxes: [ {
                 id: "y-axis-gravity"
             }]
         },
         // animation: {
         //     onComplete: function () {
         //         var chartInstance = this.chart;
         //         var ctx = chartInstance.ctx;
         //         console.log(chartInstance);
         //         var height = chartInstance.controller.boxes[0].bottom;
         //         ctx.textAlign = "center";
         //         Chart.helpers.each(this.data.datasets.forEach(function (dataset, i) {
         //             var meta = chartInstance.controller.getDatasetMeta(i);
         //             Chart.helpers.each(meta.data.forEach(function (bar, index) {
         //                 ctx.fillText(dataset.label, bar._model.x, height - ((height - bar._model.y) / 2));
         //             }),this)
         //         }),this);
         //     }
         // },
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


}



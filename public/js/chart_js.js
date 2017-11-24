// var ctx = document.getElementById("densityChart").getContext('2d');
// Multi chart
// var ctx2 = document.getElementById("multichart").getContext('2d');
// var myChart = new Chart(ctx2, null);

// Multi chart
var densityCanvas = document.getElementById("densityChart");

var data_set_list= [];
var myDatasets=new Object();
// alert(bank_data[0]);
var lista_servicos=new Array() ;
var todos_bancos=[];
var contador=-1;


for (var index in bank_data){
    for (var i in bank_data[index].bancos) {
        // console.log(bank_data[index].nome+" =got="+(++contador))
        if (lista_bancos_ids.indexOf(bank_data[index].bancos[i].pivot.banco_id) > -1)
            console.log(bank_data[index].id+' with'+bank_data[index].bancos[i].pivot.banco_id);
        // myDatasets.precos.push(bank_data[index].bancos[i].pivot.preco))
    }

}

myDatasets.data = [];
myDatasets.precos = [];
myDatasets.lista_servicos = [];

for (var index in bank_data) {
    // myDatasets.label=bank_data[index].bancos[0].abreviatura;//push(bank_data[index].nome);
    myDatasets.lista_servicos.push(bank_data[index].nome);

    // var i=index;
    // var banco='';

    // for (var i in bank_data[index].bancos)
    //     myDatasets.precos.push(bank_data[index].bancos[i].pivot.preco))

    // myDatasets.preco= bank_data[index].bancos[index].length;//bank_data[index].bancos[index].pivot.preco;
    // console.log(myDatasets.lista_servicos[index]+" ========"+myDatasets.banco);
    // ...
}

// Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 14;

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

var planetData = {
    labels: myDatasets.lista_servicos,
    datasets: [densityData, gravityData,data3]
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
    }
};

var barChart = new Chart(densityCanvas, {
    type: 'bar',
    data: planetData,
    options: chartOptions
});

function showIt() {
    for (var index in bank_data) {
        var obj = bank_data[index];
        console.log(obj.nome);
        // ...
    }

}
// var ctx = document.getElementById("densityChart").getContext('2d');
// Multi chart
// var ctx2 = document.getElementById("multichart").getContext('2d');
// var myChart = new Chart(ctx2, null);

// Multi chart
var densityCanvas = document.getElementById("densityChart");

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 18;

var densityData = {
    label: 'BIM',
    data: [27, 43, 55, 33, 26, 87],
    backgroundColor: 'rgba(255, 99, 132, 0.2)',
    borderWidth: 0,
    yAxisID: "y-axis-density"
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
    labels: ["Levantamento IZI", "Transferência", "Pagamento de Serviços", "Outros", "Lorem", "Ipsum"],
    datasets: [densityData, gravityData,data3]
};

var chartOptions = {
    scales: {
        xAxes: [{
            barPercentage: 1,
            categoryPercentage: 0.6
        }],
        yAxes: [{
            id: "y-axis-density"
        }, {
            id: "y-axis-gravity"
        }]
    }
};

var barChart = new Chart(densityCanvas, {
    type: 'bar',
    data: planetData,
    options: chartOptions
});

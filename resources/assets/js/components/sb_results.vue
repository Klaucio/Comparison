<template>
    <chartjs-bar :labels="lista_servicos_nomes" :datasets="mydatasets"></chartjs-bar>
</template>
<script>
    import { Bar } from 'vue-chartjs';
        var densityCanvas = document.getElementById("densityChart");

    export default {
        extends: VueChartJs.Bar,
        props: [
            'bank_data',
            'lista_bancos_ids'
        ],
        data(){
            return{

                service_banks:[],
                choosen_banks_ids:[],
                lista_servicos:[] ,
                lista_servicos_nomes:[],
                selected_banks:[],
                selected_canals:[],
                all_datasets_list:[],
                count_services:0,
                global_datasets:[],
                colors:['rgb(209, 0, 93)','rgb(255, 181, 72)','rgb(13, 72, 179)',
                    'rgb(13, 72, 179)','rgb(161, 0, 86)','rgb(103, 160, 16)'
                ],
                data_for_datasets:new Object(),
//                data_for_datasets.data_precos: [],
                mylabels: ["January", "February", "March", "April", "May", "June", "July"],
                mydatasets:[{
                    label: "My First dataset",
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1,
                    data: [65, 59, 80, 81, 56, 55, 40],
                },
                    {
                        label: "My Second dataset",
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(54, 162, 235, 1)',
                            'rgba(255,99,132,1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1,
                        data: [20, 50, 20, 41, 26, 85, 20],
                    }],
            }
        },
        created:function () {
            this.initVariables();
//            this.callRenderChart();
            // All about Charts
            this.pushLabelsToArray();
            this.pushBarLabelList();
            this.fillDataSetslist();
            this.createChart();
        },
        mounted () {

        },
        methods:{
            initVariables(){
                this.service_banks = JSON.parse(this.bank_data);
                this.choosen_banks_ids = JSON.parse(this.lista_bancos_ids);
            },
            callRenderChart(){

                this.renderChart({
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                    datasets: [
                        {
                            label: 'Data One',
                            backgroundColor: '#f87979',
                            data: [40, 39, 10, 40, 39, 80, 40]
                        }
                    ]
                }, {responsive: true, maintainAspectRatio: false})
            },
            pushLabelsToArray() {
                for (var index in bank_data) {
                    this.lista_servicos.push({"id":bank_data[index].id,"nome":bank_data[index].nome});
                    this.lista_servicos_nomes.push(bank_data[index].nome);
                }
            },
            pushBarLabelList(){
                for (var index in bank_data){
                    for (var i in bank_data[index].bancos) {
                        if (lista_bancos_ids.indexOf(bank_data[index].bancos[i].pivot.banco_id) > -1) {
                            // console.log(bank_data[index].id + ' with ' + bank_data[index].bancos[i].abreviatura);
                            if(this.selected_banks.indexOf(bank_data[index].bancos[i])<0){
                                this.selected_banks.push(bank_data[index].bancos[i])
                                this.selected_canals.push(bank_data[index].canals[i])
                            }
                        }
                    }

                }
            },
            fillDataSetslist() {
                //ciclo que define a label de cada Barra no grafico
                for (var index in this.selected_banks) {
                    //Quando Inicia a atribuição, aqui atribui-se a primeira label(barra)
                    if (!this.data_for_datasets.label) {
                        this.data_for_datasets.label = this.selected_banks[index].abreviatura+" || Através de: "+this.selected_canals[index].nome;
                        // data_for_datasets.canal=selected_banks[index].pivot.canal_id;
                    } else {
                        //Atribuição das restantes labels
                        this.data_for_datasets.label = this.selected_banks[index].abreviatura+" || Através de: "+this.selected_canals[index].nome;
                    }

                    var data_precos=[];
                    for(var servico in this.lista_servicos){
                        if (this.selected_banks[index].pivot.servico_id==this.lista_servicos[servico].id)

                            data_precos.push(this.selected_banks[index].pivot.preco);
                        else{
                            data_precos.push("Nulo");
                        }
                    }
                    this.all_datasets_list.push({"label":this.data_for_datasets.label,"data":data_precos});
                }

            },
            createChart() {
                Chart.defaults.global.defaultFontSize = 14;
                var randomNumber;


                for (var index in this.all_datasets_list){
                    console.log();
                    randomNumber= Math.floor(Math.random()*colors.length);
                    var data={
                        label: this.all_datasets_list[index].label,
                        backgroundColor: this.colors[randomNumber],
                        borderWidth: 1,
                        data: this.all_datasets_list[index].data,
//                        yAxisID: "y-axis-gravity"
                    };
                    // console.log(all_datasets_list[index].data_precos);
                    this.global_datasets.push(data);
                    console.log(this.global_datasets);
                }

                var planetData = {
                    labels: this.lista_servicos_nomes,
                    datasets: this.global_datasets
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
                    }
                };

                var barChart = new Chart(densityCanvas, {
                    type: 'bar',
                    data: planetData,
                    options: chartOptions
                });


            }
        }
    }
</script>

<template >
    <div id="vue-instance">
        <div v-if="!isTable">
            <button @click="toggleMode" type="submit">Gráfico</button>
            <div class="form-group">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <!--<canvas class="densityChart" width="600" height="300"-->
                            <!--style="max-height: 500px !important; text-align: center!important; float: left!important; ">-->
                    <!--</canvas>-->
                    <chart :options="bar" auto-resize></chart>
                </div>
            </div>
        </div>
        <div v-else>
            <button @click="toggleMode" type="submit">Tabela</button>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th></th><th></th>
                    <th v-bind:key="servico" v-for="servico in lista_servicos_nomes"><b>{{servico}}</b></th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="data in global_table_datasets">
                    <td>{{data.label}} </td>
                    <td> {{data.canal}}</td>
                    <td v-for="preco in data.data">{{preco}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
<script>
    var densityCanvas = document.getElementsByClassName("densityChart");

    export default {
        extends: VueChartJs.Bar,
        props: [
            'bank_data',
            'lista_bancos_ids'
        ],
        data(){
            return{
                isTable: true,
                service_banks:[],
                choosen_banks_ids:[],
                lista_servicos:[] ,
                lista_servicos_nomes:[],
                selected_banks:[],
                selected_canals:[],
                all_datasets_list:[],
                count_services:0,
                global_datasets:[],
                global_table_datasets:[],
                colors:[],
                data_for_datasets:new Object(),
                barChart:'',
                chartObject:'',
                bar: null,
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

            this.renderBar(this.all_datasets_list);
        },
        mounted () {
            this.colors=['rgb(209, 0, 93)','rgb(255, 181, 72)','rgb(13, 72, 179)',
                'rgb(13, 72, 179)','rgb(161, 0, 86)','rgb(103, 160, 16)'
            ];
            // console.log(this.colors);
            this.barChart = new Chart(densityCanvas, this.chartObject);

        },
        methods:{
            toggleMode() {
                // 'this' refers to the vm instance
                this.isTable = !this.isTable;
            },
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
                        this.data_for_datasets.label_canal = this.selected_banks[index].abreviatura+": "+this.selected_canals[index].nome;
                        this.data_for_datasets.label = this.selected_banks[index].abreviatura;
                        this.data_for_datasets.cor = this.selected_banks[index].cor;
                        // data_for_datasets.canal=selected_banks[index].pivot.canal_id;
                    } else {
                        //Atribuição das restantes labels
                        this.data_for_datasets.label_canal = this.selected_banks[index].abreviatura+": "+this.selected_canals[index].nome;
                        this.data_for_datasets.label = this.selected_banks[index].abreviatura;
                        this.data_for_datasets.cor = this.selected_banks[index].cor;
                    }

                    var data_precos=[];
                    for(var servico in this.lista_servicos){
                        if (this.selected_banks[index].pivot.servico_id==this.lista_servicos[servico].id)

                            data_precos.push(this.selected_banks[index].pivot.preco);
                        else{
                            data_precos.push(0);
                        }
                    }
                    this.all_datasets_list.push({"label":this.data_for_datasets.label,
                        "label_canal":this.data_for_datasets.label_canal,"cor":this.data_for_datasets.cor,"data":data_precos});
                }

            },
            createChart() {
                Chart.defaults.global.defaultFontSize = 14;
                var randomNumber;


                for (var index in this.all_datasets_list){
                    console.log(this.colors.length);
                    randomNumber= Math.floor(Math.random()*this.colors.length);
                    var data={
                        label: this.all_datasets_list[index].label_canal,
                        backgroundColor: this.all_datasets_list[index].cor,
                        borderWidth: 1,
                        data: this.all_datasets_list[index].data,
//                        yAxisID: "y-axis-gravity"
                    };
                    var row={
                        label: this.all_datasets_list[index].label,
                            backgroundColor: this.all_datasets_list[index].cor,
                            borderWidth: 1,
                            data: this.all_datasets_list[index].data,
                            canal:this.selected_canals[index].nome
//                        yAxisID: "y-axis-gravity"
                    };
                    this.global_table_datasets.push(row);
                    // console.log(all_datasets_list[index].data_precos);
                    this.global_datasets.push(data);
                }
//                console.lo

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
                this.chartObject={
                    type: 'bar',
                    data: planetData,
                    options: chartOptions
                };
            },
            renderBar(list) {

                this.bar = {
                    color: list.map((element) => element.cor),
                    tooltip: {
                        trigger: 'item',
                        formatter: "{b} <br/>{a}: {c}  MZN"
                    },
                    legend: {
                        data: list.map((element) => element.label_canal)
                    },
                    xAxis: {
                        type: 'category',
                        axisLabel: {
//                            inside: true
                        },
                        data: this.lista_servicos.map((element) => element.nome)
                    },
                    yAxis: {
                        type: 'value',
                        axisLabel: {
                            formatter: '{value} MZN'
                        }
                    },
                    series: list.map((element) => {
                        return {
                            name: element.label_canal,
                            type: 'bar',
                            data: element.data.map((el) => el)
                        }
                    })
                }

            }
        }
    }
</script>

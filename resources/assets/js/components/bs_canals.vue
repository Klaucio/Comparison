<template>
    <form method="POST" v-on:submit.prevent="onSubmit">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="form-group">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <input type="search" class="form-control" id="search" placeholder="Pesquise pelo Serviço..">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="searchable-container">
                            <div class="servicos col-xs-5 col-sm-5 col-md-3 col-lg-3 " v-for="canal in selected_canals">
                                <label v-bind:for="canal.id" class="btn btn-default info-block block-info clearfix">
                                    <div  class="bizcontent">
                                        <input type="checkbox" v-bind:id="canal.id" v-bind:value="canal.id"
                                               data-toggle="buttons" v-model="checked_canals">
                                        <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                        <h5 class="wordwrap">{{canal.nome}}</h5>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="padding-top: 7px!important;">
                    <div class="col-md-10">
                        <div for="results" class="row">
                            {{checked_canals}}
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-success"> Seguir >> </button>
                    </div>

                </div>
            </div>
        </div>
    </form>
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
                checked_canals:[],
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
            console.log(this.selected_canals);


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
        },
        }
</script>

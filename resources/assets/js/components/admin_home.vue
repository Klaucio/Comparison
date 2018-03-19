<template>
    <div class="row content">
        <!--<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">-->
            <!--<div class="info-box blue-bg">-->
                <!--<i class="fa fa-bar-chart"></i>-->
                <!--<div class="count"></div>-->
                <!--<div class="title">Estatísticas</div>-->
            <!--</div>-->
            <!--&lt;!&ndash;/.info-box&ndash;&gt;-->
        <!--</div>-->
        <!--/.col-->

        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box brown-bg" v-if="banks">
                <i class="fa fa-university"></i>
                <div class="count">{{banks.length}}</div>
                <div class="title">Bancos Associados</div>
            </div>
            <!--/.info-box-->
        </div><div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box green-bg" v-if="canals">
                <i class="fa fa-university"></i>
                <div class="count">{{canals.length}}</div>
                <div class="title">Canais</div>
            </div>
            <!--/.info-box-->
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box green-bg" v-if="services">
                <i class="fa fa-chain-broken"></i>
                <div class="count">{{services.length}}</div>
                <div class="title">Serviços</div>
            </div>
            <!--/.info-box-->
        </div>
        <!--/.col-->
        <!--<div class="row">-->
            <!--<div>-->
                <!--<div class="clearfix"></div>-->
                <!--<div class="box box-primary">-->
                    <!--<div class="box-body">-->

                        <!--<div v-if="isLoggedIn">-->
                            <!--<button @click="login" type="submit">Gráfico</button>-->

                        <!--</div>-->
                        <!--<div v-else>-->
                            <!--<button @click="login" type="submit">Tabela</button>-->
                            <!--&lt;!&ndash;<div class="panel-group">&ndash;&gt;-->
                                <!--&lt;!&ndash;<div class="panel panel-default">&ndash;&gt;-->
                                    <!--&lt;!&ndash;<div class="panel-body">&ndash;&gt;-->
                                        <!--&lt;!&ndash;<canvas width="400" height="200"></canvas>&ndash;&gt;-->
                                    <!--&lt;!&ndash;</div>&ndash;&gt;-->
                                <!--&lt;!&ndash;</div>&ndash;&gt;-->
                                <!--&lt;!&ndash;<div class="panel panel-default">&ndash;&gt;-->
                                    <!--&lt;!&ndash;<div class="panel-body">Panel Content</div>&ndash;&gt;-->
                                <!--&lt;!&ndash;</div>&ndash;&gt;-->
                            <!--&lt;!&ndash;</div>&ndash;&gt;-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->

    </div>
    <!--/.row-->
</template>
<script>
    export default {

        extends: VueChartJs.Line,
        props: ['chartData', 'options'],
        data(){
            return {
                isLoggedIn: false,
                banks: null,
                services: null,
                canals: null,
                max: 3,
                loading: false,
                error: null,
                bs_labels:[],
                bs_servicos:[],
                bc_canals:[],
            }
        },
        props: ['labels', 'values', 'type'],
        mounted: function() {
            new Chart(this.$el, {
                type: this.type,
                data: {
                    labels: this.bs_labels,
                    datasets: [{
                        label: '# of Votes',
                        data: this.bs_servicos,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.6)',
                            'rgba(54, 162, 235, 0.6)',
                            'rgba(255, 206, 86, 0.6)',
                            'rgba(75, 192, 192, 0.6)',
                            'rgba(153, 102, 255, 0.6)',
                            'rgba(255, 159, 64, 0.6)'
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        },
        created(){
            this.fetchData();
            this.fillDataSets();
        },
        methods:{
            login: function() {
                // 'this' refers to the vm instance
                this.isLoggedIn = !this.isLoggedIn;
            },
            fetchData () {
                this.error = this.banks = null;
                this.loading = true;
                // replace `getPost` with your data fetching util / API wrapper
                axios.get('/api/adminData').then(response =>{
                    console.log(response);
                    this.banks=response.data.banks;
                    this.services=response.data.servicos;
                    this.canals=response.data.canais;
                    this.loading = false;
                    for (let item of this.banks) {
                        this.bs_labels.push(item.abreviatura);
                        this.bs_servicos.push(item.servicos.length);
                        this.bc_canals.push(item.canals.length);

                    }
                    console.log(this.bs_labels)


                }).catch(error => {
                        console.log(error);
                        this.error = error.status;
                    }
                );
            },
            fillDataSets(){

//                for(var data in this.banks)
//                    console.log(data);
            }

        },
        mounted(){
            this.renderChart(this.chartData, this.options)

        }
    }
</script>
<template>
    <form method="POST" v-on:submit.prevent="onSubmit">
        <div class="loading" v-if="loading">
            <!--Loading...-->
            <div class="preloader">
                <div class="clear-loading loading-effect-2">
                    <span></span>
                </div>
            </div>
        </div>
        <div v-if="error" class="error">
            {{ error }}
        </div>
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="sidebar left">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><strong>Categorias</strong></div>

                                    <div class="panel-body">
                                        <aside class="widget widget_nav_menu">
                                            <div class="menu-services-container" v-if="categories">
                                                <ul class="menu" v-for="categoria in categories">
                                                    <li><a href="#">{{categoria.designacao}}</a></li>
                                                    <!--<li class="active"><a href="#">Accumulation</a></li>-->
                                                </ul>
                                            </div>
                                        </aside>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="form-group col-md-9" v-if="services">
                        <div class="row">
                            <div class="form-group">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <input type="search" class="form-control" id="search" placeholder="Pesquise pelo Serviço..">
                                </div>
                            </div>
                        </div>
                        <div class="searchable-container">
                            <div class="servicos col-xs-5 col-sm-5 col-md-4 col-lg-4 " v-for="service in services">
                                <label v-bind:for="service.id" class="btn btn-default info-block block-info clearfix">
                                    <div  class="bizcontent">
                                        <input type="checkbox" v-bind:id="service.id" v-bind:value="service.id" data-toggle="buttons" v-model="checked_services">
                                        <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                        <h5 class="wordwrap">{{service.nome}}</h5>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="padding-top: 7px!important;">
                    <div class="col-lg-10 col-md-10"></div>
                    <div class="col-md-2">
                        <button class="btn btn-success"> Seguir >> </button>
                    </div>
                </div>
            </div>
        </div>
    </form>

</template>
<script>
    export default {

        data:() => ({
            services:[],
            checked_services:[],
            categories:[],
            max: 3,
            loading: false,
            error: null
        }),
        created(){
            this.fetchData();
        },
        methods:{
            onSubmit(){
                window.location.href='/banks?data='+JSON.stringify({servicos:this.checked_services});

            },
            fetchData () {
                this.error = this.banks = null;
                this.loading = true;
                // replace `getPost` with your data fetching util / API wrapper
                axios.get('/api/serviceData').then(response =>{
                    this.services=response.data;
                    this.fetchCategories();
                    this.loading = false;
                }).catch(error => {
                        this.error = error.response.data.status;
                    }
                );
            },
            fetchCategories(){
                let indexes=[];
                for ( let service of this.services)
                    if (indexes.indexOf(service.categorias.id)<0){
                        this.categories.push(service.categorias);
                        indexes.push(service.categorias.id)
                }

            }

        },
        mounted(){

//            axios.get('/api/serviceData').then(response =>{
//                this.services=response.data;
//                this.fetchCategories();
//            });



        }
    }
</script>
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
                            <div class="servicos col-xs-5 col-sm-5 col-md-3 col-lg-3 " v-for="service in all_banks">
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
                    <div class="col-md-10">
                        <div for="results" class="row">
                            {{checked_services}}
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
    export default {
        props: [
            'banks',
            'services'
        ],
        data:() => ({
            checked_services: [],
            checked_banks:[],
            all_bank_services:[],
            all_banks:[],
        }),
        methods:{
            onSubmit(){
                window.location.href='/bindResults?data='+JSON.stringify(
                    {servicos:this.checked_services, 'bancos':this.checked_banks});
            },
            init_services() {
                let unique_arr = [];
                for (let banks of this.all_bank_services)
                    for (let service of banks.servicos)
                        if (unique_arr.indexOf(service.id) < 0) {
                            this.all_banks.push({"id": service.id, "nome": service.nome})
                            unique_arr.push(service.id);
                        }
            }
        },
        mounted(){
            this.all_bank_services = JSON.parse(this.services);
            this.checked_banks = JSON.parse(this.banks);
            this.init_services();
        }
    }
</script>
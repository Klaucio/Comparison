<template>
    <form method="POST" v-on:submit.prevent="onSubmit">
        <div class="row">
            <div class="searchable-container">
                	<!--A div a seguir percorre a lista de bancos para preencher os cards	-->
                <div class="items col-xs-5 col-sm-5 col-lg-3 col-md-2" v-for="bank in this.all_banks">
                    <!--<label for="">-->
                        <article class="post style2 clearfix info-block block-info ">
                            <label v-bind:for="bank.id" class="btn btn-default  featured-post img-card" >
                                <div class="bizcontent post-image">
                                    <input type="checkbox" v-bind:id="bank.id" v-bind:value="bank.id"
                                           v-model="checked_banks" v-on:onclick="handleClick(this);" autocomplete="off">
                                    <img :src="'images/bancos/' + bank.logo" width="175" height="175" title="" class="post-image" alt=""> <!--.bank.logo-->
                                </div>
                                <ul class="post-date">
                                    <li class="day">{{ bank.abreviatura }}</li>
                                </ul>
                            </label>

                            <!--<div class="content-post">-->
                                <!--<h5 class="title-post">-->
                                    <!--{{bank.designacao}}-->
                                <!--</h5>-->
                                <!--<div class="entry-post">-->

                                <!--</div>-->
                            <!--</div>&lt;!&ndash; /.content-post &ndash;&gt;-->
                        </article><!-- /.post -->
                    <!--</label>-->
                </div><!-- /.col-md-2 -->
            </div>
        </div><!-- /.row -->
        <div class="row">
            <div class="col-md-2 col-sm-4">
                <button class="btn btn-success"> Seguir >> </button>
            </div>

        </div>
    </form>
</template>

<script>
    export default {
        props: [
            'selected_services',//used to extract selected banks from selected services
            'services_array'
        ],
        data:() => ({
            checked_services: [],
            checked_banks:[],
            all_sb_services:[],//all services with banks
            all_banks:[],
        }),
        computed:{
            limit_reached: function(){
                if(this.checked_banks.length >=3){
                    return true;
                }
                return false;
            }
        },
        methods:{
            onSubmit(){
                window.location.href='/bindResults?data='+JSON.stringify(
                    {servicos:this.checked_services, 'bancos':this.checked_banks});

            },
            init_services() {
                let unique_arr = [];
                for (let services of this.all_sb_services)
                    for (let banco of services.bancos)
                        if (unique_arr.indexOf(banco.id) < 0) {
                            this.all_banks.push({"id": banco.id, "nome": banco.nome,
                                                "abreviatura":banco.abreviatura,"logo":banco.logo})
                            unique_arr.push(banco.id);
                        }
            }
        },
        mounted(){
            console.log(this.selected_services+"  ==== "+this.services_array);

            this.all_sb_services = JSON.parse(this.selected_services);
            this.checked_services = JSON.parse(this.services_array);
            this.init_services();
        }
    }
</script>
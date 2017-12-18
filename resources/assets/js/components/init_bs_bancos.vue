<template>
    <form method="POST" v-on:submit.prevent="onSubmit">
        <input type="hidden" name="_token" value="csrf_token()">
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
        <div class="row" v-if="this.banks">
            <div class="searchable-container"><!--	A div a seguir percorre a lista de bancos para preencher os cards	-->
                <div class="items col-xs-5 col-sm-5 col-lg-3 col-md-2" v-for="bank in banks">
                    <!--<label v-bind:for="bank.id">-->
                    <article class="post style2 clearfix info-block block-info ">
                        <label v-bind:for="bank.id"  class="btn btn-default  featured-post img-card" >
                            <div class="bizcontent post-image">
                                <input type="checkbox" v-bind:id="bank.id" v-bind:value="bank.id" v-model="checkedBanks"  onclick="handleClick(this);" autocomplete="off">
                                <img :src="'storage/logos/' + bank.logo" width="175" height="175" title="" class="post-image" alt=""> <!--.bank.logo-->
                                <!--<span class="glyphicon glyphicon-check glyphicon-lg"></span>-->
                            </div>
                            <ul class="post-date">
                                <li class="day">{{ bank.abreviatura }}</li>
                            </ul>
                        </label>

                        <div class="content-post">
                            <h5 class="title-post">
                                {{bank.designacao}}
                            </h5>
                            <div class="entry-post">

                            </div>
                        </div><!-- /.content-post -->
                    </article><!-- /.post -->
                    <!--</label>-->
                </div><!-- /.col-md-2 -->
            </div>
        </div><!-- /.row -->
        <div class="row">
            <div class="col-md-10 col-sm-8">
                <div for="results" class="row">
                    <span >{{ checkedBanks}}</span>
                </div>
            </div>
            <div class="col-md-2 col-sm-4">
                <button class="btn btn-success"> Seguir >> </button>
            </div>

        </div>
    </form>
</template>

<script>
    export default {

//        ready:function () {
//        },
        data(){
            return {
                checkedBanks: [],
                banks: null,
                max: 3,
                loading: false,
                error: null
            }

        },
        created(){
            this.fetchData();
        },
        methods:{

            onSubmit(){
                window.location.href='/services?data='+JSON.stringify({bancos:this.checkedBanks});

            },
            fetchData () {
                this.error = this.banks = null;
                this.loading = true;
                // replace `getPost` with your data fetching util / API wrapper
                axios.get('/api/bankData').then(response =>{
                    this.banks=response.data;
                    this.loading = false;
                }).catch(error => {
                        this.error = error.response.data.status;
                    }
                );
            }

        },
        mounted(){
//            this.fetchData();
        }
    }
</script>
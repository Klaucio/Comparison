
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component',require('./components/Example.vue'));

new Vue({
    el: '#bank-form',

    ready:function () {

    },
    data: {
        checkedBanks: [],
        mensagem:"Message",
        testes:[
            {name:'name'},{name:'teste2'}
        ],
        banks:[]

    },
    methods:{


        onSubmit(){
            // this.checkedBanks = this.$refs.checkedBanks.value;
            // console.log(this.checkedBanks);
            // alert('teste '+ this.checkedBanks);
            axios.post('/api/compare', {'bancos':this.checkedBanks})
                .then(resp=> {
                    // app.$router.push({path: '/'});
                    $bancos=resp.data;
                    // for (let banco of $bancos)
                    //     for (let servico of banco.servicos)
                    //     console.log(servico.nome);
                    // alert(resp.data);
                     window.location.href='/servicosPorBanco?data='+JSON.stringify({bancos:$bancos});
                    // window.location.href='/servicosPorBanco?data='+(resp.data);

                })
                .catch(function (resp) {
                    console.log(resp);
                    alert("Could not create your company"+resp);
                });
        }

    },
    mounted(){
      axios.get('/api/bankData').then(response =>{
          this.banks=response.data;

          this.set('banks',response.data);

          console.log(this.banks);
      });
    }
});



//create method global

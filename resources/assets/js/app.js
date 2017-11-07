
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
        this.getBanksList();
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
        // getBanksList: axios.get('/api/bankData').then((response)=>{
        //     this.set('banks', response.data)
        // }),
        onSubmit(){
            axios.post('/serviceByBank',{
                checkedBanks:this.checkedBanks
            })
        }


    },
    mounted(){
      axios.get('/api/bankData').then(response =>{
          console.log(response);
          this.banks=response.data;

          this.set('banks',response.data);

          console.log(this.banks);
      });
    }
});
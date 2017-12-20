
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
        service_banks:[]

    },
    methods:{

        onSubmit(){
            window.location.href='/services?data='+JSON.stringify({bancos:this.checkedBanks});
        }

    },
    mounted(){
      axios.get('/api/bankData').then(response =>{
          this.service_banks=response.data;

          this.set('service_banks',response.data);
      });
    }
});



//create method global

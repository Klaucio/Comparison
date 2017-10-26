
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
    data: {
        checkedBanks: []
    },
    methods:{
        // test: axios.get('servicesByBank',{
        //     checkedBanks:this.checkedBanks
        // }),
        onSubmit(){
            axios.post('/serviceByBank',{
                checkedBanks:this.checkedBanks
            })
        }


    },
    mounted(){
      axios.get('/bankData').then(response =>{ console.log(response)});
    }
});

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');

window.Vue = require('vue');
window.axios = require('axios');
require('chart.js');
// vue-charts package
require('hchs-vue-charts');
Vue.use(VueCharts);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('result-component',require('./components/bs_result.vue'));

new Vue({
    el: '#results',
    data:{
        isLoggedIn: false,
    },
    methods:{
        login: function() {
            // 'this' refers to the vm instance
            this.isLoggedIn = !this.isLoggedIn;


        },
    }
});



//create method global

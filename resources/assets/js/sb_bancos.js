require('./bootstrap');

window.Vue = require('vue');

Vue.component('bancos',require('./components/sb_bancos.vue'));

new Vue({
    el: '#bank-form',
});
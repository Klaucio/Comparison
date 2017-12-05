require('./bootstrap');

window.Vue = require('vue');

Vue.component('servicos',require('./components/bs_servicos.vue'));

new Vue({
    el: '#service-form',
});

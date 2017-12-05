require('./bootstrap');

window.Vue = require('vue');

Vue.component('servicos',require('./components/init_sb_servicos.vue'));

new Vue({
    el: '#service-form',
});

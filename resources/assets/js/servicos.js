
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');

window.Vue = require('vue');
window.axios = require('axios');


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
// import Bancovue from './components/servicos.vue'

const Bancovue = {
    template: '',
    props: ['banks'],
    created() {
        this.$root.checked_banks = this.banks;
    }
};

new Vue({
    el: '#service-form',
    components:{bancovue: Bancovue},
    data: {
        checked_services: [],
        checked_banks:[]
    },
    methods:{


        onSubmit(){
            // axios.post('/api/checkResulsFromServices', {'servicos':this.checked_services})
            //     .then(resp=> {
            //         let servicos=resp.data;
                    window.location.href='/bindResults?data='+JSON.stringify(
                        {servicos:this.checked_services, 'bancos':this.checked_banks});

                // })
                // .catch(function (resp) {
                //     console.log(resp);
                //     alert("Falha na busca de resultados sobre preços"+resp);
                // });
        }

    },
    mounted(){
        // this.checked_banks=JSON.parse(this.this.slice());
        console.log(this.checked_banks);


    }
});



//create method global

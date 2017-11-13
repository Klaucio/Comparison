
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

// Vue.component('example-component',require('./components/Example.vue'));

new Vue({
    el: '#service-form',
    data: {
        checkedServices: [],
        mensagem:"Message",
        testes:[
            {name:'name'},{name:'teste2'}
        ],
        banks:[]

    },
    methods:{


        onSubmit(){
            axios.post('/api/compare', {'servicos':this.checkedServices})
                .then(resp=> {
                    $servicos=resp.data;
                    window.location.href='/servicosPorBanco?data='+JSON.stringify({$servicos:$servicos});

                })
                .catch(function (resp) {
                    console.log(resp);
                    alert("Falha na busca de resultados sobre preços"+resp);
                });
        }

    },
    mounted(){


    }
});



//create method global

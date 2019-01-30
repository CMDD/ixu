

require('./bootstrap');


window.Vue = require('vue');
import Router from 'vue-router';

Vue.use(Router);


Vue.component('form-crear-suscripcion', require('./components/suscripcion/FormCrearSuscripcionComponent.vue').default);
Vue.component('lista-suscripciones', require('./components/suscripcion/ListaSuscripcionComponent.vue').default);



let router = new Router({
  routes:[
    {
      path:'/suscripcion/crear',
      component: require('./components/suscripcion/FormCrearSuscripcionComponent').default
    },
    {
      path:'/suscripcion/lista',
      component: require('./components/suscripcion/ListaSuscripcionComponent').default
    }
  ],
  linkExactActiveClass:'active'
});

const app = new Vue({
    el: '#app',
    router
});

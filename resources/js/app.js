

require('./bootstrap');


window.Vue = require('vue');
import Router from 'vue-router';

Vue.use(Router);


Vue.component('form-crear-suscripcion', require('./components/suscripcion/FormCrearSuscripcionComponent.vue').default);
Vue.component('lista-suscripciones', require('./components/suscripcion/ListaSuscripcionComponent.vue').default);
Vue.component('show-component',require('./components/suscripcion/ShowComponent.vue').default);
Vue.component('dashboard-component',require('./components/DashboardComponent.vue').default);
Vue.component('index-component',require('./components/titular/IndexComponent.vue').default);



let router = new Router({
  routes:[
    {
      path:'/suscripcion/crear',
      component: require('./components/suscripcion/FormCrearSuscripcionComponent').default
    },
    {
      path:'/suscripcion/lista',
      component: require('./components/suscripcion/ListaSuscripcionComponent').default
    },
    {
      path:'/suscripcion/show/:id',
      name:'/suscripcion/show',
      component: require('./components/suscripcion/ShowComponent').default
    },
    {
      path:'/dashboard',
      component: require('./components/DashboardComponent').default
    },
    {
      path:'/titulares',
      component: require('./components/titular/IndexComponent').default
    }
  ],
  linkExactActiveClass:'active'
});

const app = new Vue({
    el: '#app',
    router
});

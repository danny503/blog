
require('./bootstrap');

window.Vue = require('vue');


Vue.component('home', require('./components/HomeComponent.vue').default);
Vue.component('login-form', require('./components/loginForm.vue').default);

//import router from './router';

const app = new Vue({
    el: '#app',
    router
});


/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

//window.Vue = require('vue');
import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import AppComponent from './views/AppComponent'
import Example from './components/ExampleComponent'
import Example2 from './components/Example2Component'


const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/example',
            name: 'example',
            component: Example
        },
        {
            path: '/example2',
            name: 'example2',
            component: Example2
        },
    ],
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


Vue.component('app-component', require('./views/AppComponent.vue'));

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',
    components: { AppComponent },
        router,

});

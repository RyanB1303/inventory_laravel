require("./bootstrap");

import Vue from "vue";
import VueRouter from "vue-router";
import App from './components/App.vue'

Vue.use(VueRouter);
import {routes} from './routes.js';
// Vue.component(
//     "example-component",
//     require("./components/ExampleComponent.vue").default
// );
const router = new VueRouter({
    routes,
    mode: 'history'
})


const app = new Vue({
    el: "#app",
    components:{
        App
    },
    router
});


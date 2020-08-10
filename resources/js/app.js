require("./bootstrap");

import Vue from "vue";
import VueRouter from "vue-router";
import App from "./components/App.vue";
import Navbar from "./components/Navbar.vue";
import Sidebar from "./components/Sidebar.vue";
Vue.use(VueRouter);
import { routes } from "./routes.js";
import User from "./Helper/User.js";
window.User = User;

import Swal from "sweetalert2";
window.Swal = Swal;
const Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 1000
});

window.Toast = Toast;

const router = new VueRouter({
    routes,
    mode: "history" //change to history again to remove #
});

const app = new Vue({
    el: "#app",
    components: {
        App,
        Navbar,
        Sidebar
    },
    router
});

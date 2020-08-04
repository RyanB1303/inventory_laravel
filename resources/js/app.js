require("./bootstrap");

import Vue from "vue";
import VueRouter from "vue-router";
<<<<<<< HEAD

=======
import App from "./components/App.vue";
import Navbar from "./components/Navbar.vue";
import Sidebar from "./components/Sidebar.vue";
>>>>>>> 1e6a9e6199b1dc95b1217a875107636541b70dad
Vue.use(VueRouter);

Vue.component(
    "example-component",
    require("./components/ExampleComponent.vue").default
);

const app = new Vue({
<<<<<<< HEAD
    el: "#app"
=======
    el: "#app",
    components: {
        App,
        Navbar,
        Sidebar
    },
    router
>>>>>>> 1e6a9e6199b1dc95b1217a875107636541b70dad
});

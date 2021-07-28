import Vue from "vue";
import VueRouter from "vue-router";
import Calculator from './components/Calculator'
import AppLayout from './components/AppLayout'

// Register
Vue.use(VueRouter);

export default new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            component: Calculator
        }
    ],
})
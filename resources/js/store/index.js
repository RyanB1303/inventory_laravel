import Vue from "vue";
import Vuex, { Store } from "vuex";

Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        fruits: [
            "apple",
            "orange",
            "durian",
            "salak",
            "mango",
            "banana",
            "jackfruit",
            "melon"
        ],
        cars: "",
        show: false,
        modalShow: true,
        count: 0
    },
    getters: {
        sortFruits: state => state.fruits.sort(),
        fruitNtSort: state => state.fruits,
        allCars: state => state.cars
    },
    mutations: {
        countInc() {
            state.count++;
        },
        addFruit(state, fruit) {
            state.fruits.push(fruit);
        },
        SET_CARS(state, cars) {
            state.cars = cars;
        },
        SHOW_SPINNER(state) {
            state.show = true;
        },
        HIDE_SPINNER(state) {
            state.show = false;
        }
        // SHOW_LOGOUT(state) {
        //     state.modalShow = true;
        // }
    },
    actions: {
        GET_CARS: async ({ commit }) => {
            async function wait(ms) {
                return new Promise(resolve => {
                    setTimeout(resolve, ms);
                });
            }
            await wait(Math.random() * 1000);
            // let response = await fetch('../cars.json');
            let data = await await (await fetch("../cars.json")).json();

            return commit("SET_CARS", data.cars);
        }
    }
});

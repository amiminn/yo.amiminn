import "./bootstrap";
import "animate.css";
import router from "./router/index.mjs";
import VueFeather from "vue-feather";
import { createApp } from "vue/dist/vue.esm-bundler.js";
import Navbar from "./vue-views/nav.vue";
import kembali from "./vue-views/components/kembali.vue";

import { createStore } from "vuex";

const app = createApp({
    components: {
        Navbar,
    },
});

const store = createStore({
    state() {
        return {
            menu: false,
            baseUrl: "http://127.0.0.1:8000/",
        };
    },
});

app.use(store);

app.component("kembali", kembali);
app.component(VueFeather.name, VueFeather);
app.use(router);

app.mount("#app");

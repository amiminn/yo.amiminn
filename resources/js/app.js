import "./bootstrap";
import router from "./router/index.mjs";
import VueFeather from "vue-feather";
import { createApp } from "vue/dist/vue.esm-bundler.js";
import Navbar from "./vue-views/nav.vue";

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
        };
    },
});

app.use(store);

app.component(VueFeather.name, VueFeather);
app.use(router);

app.mount("#app");

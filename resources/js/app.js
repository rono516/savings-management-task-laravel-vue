import './bootstrap';

import { createApp } from 'vue/dist/vue.esm-bundler.js';
import Home from './components/Home.vue';
import 'bootstrap/dist/css/bootstrap.css';

const app = createApp({
    components: {
        Home,
    }
})

app.mount('#app');

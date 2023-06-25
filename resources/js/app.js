import './bootstrap';

import { createApp } from 'vue/dist/vue.esm-bundler.js';

// import Home from './components/Home.vue';
// import EducationSavings from './components/EducationSavings.vue';
// import PersonalSavings from './components/PersonalSavings.vue';
// import VacationSavings from './components/VacationSavings.vue';
import app from './components/app.vue';
import router from './router/index.js';
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-icons/font/bootstrap-icons.css'



// const router = createRouter({
//     history: createWebHistory(),
//     routes
// })

createApp(app).use(router).mount('#app');
// const app = createApp({
//     app
    // components: {
    // Home, EducationSavings, VacationSavings, PersonalSavings
    // }
// }).mount('#app');
// app.use(router);

// app.mount('#app');

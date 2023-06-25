import { createRouter, createWebHistory } from 'vue-router';
// import Home from './components/Home.vue';
import Home from '../components/Home.vue'
import EducationSavings from '../components/EducationSavings.vue';
import PersonalSavings from '../components/PersonalSavings.vue';
import VacationSavings from '../components/VacationSavings.vue';
import notFound from '../components/notFound.vue'



const routes = [
    {
        path: '/',
        component: Home
    },
    {
        path: '/education-savings',
        component: EducationSavings
    },
    {
        path: '/personal-savings',
        component: PersonalSavings
    },
    {
        path: '/vacation-savings',
        component: VacationSavings
    },
    {
        path: '/:pathMatch(.*)*',
        component: notFound
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes
})



export default router;
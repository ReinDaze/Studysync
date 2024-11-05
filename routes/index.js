import { createRouter, createWebHistory } from 'vue-router';
import LandingPage from '../Pages/LandingPage.vue'; // Pastikan path ini benar
import TesGayaBelajar from '../Pages/TesGayaBelajar.vue'; // Pastikan path ini benar
import Dashboard from '../Pages/Dashboard.vue'; // Import Dashboard

const routes = [
  {
    path: '/',
    name: 'LandingPage',
    component: LandingPage,
  },
  {
    path: '/tes-gaya-belajar',
    name: 'TesGayaBelajar',
    component: TesGayaBelajar,
  },
  {
    path: '/dashboard',
    name: 'Dashboard',
    component: Dashboard,
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;

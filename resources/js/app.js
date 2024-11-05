// Import CSS dan Bootstrap
import '../css/app.css';
import './bootstrap';

// Import Inertia dan helper
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { createApp, h } from 'vue';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/src/js';
import LandingPage from './Pages/LandingPage.vue';
import UserProfile from './Components/UserProfile.vue';
import TesGayaBelajar from './Pages/TesGayaBelajar.vue'; // pastikan .vue ditambahkan
import Dashboard from './Pages/Dashboard.vue'; // pastikan .vue ditambahkan

// Nama aplikasi
const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

// Inertia App
createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob('./Pages/**/*.vue')
        ),
    setup({ el, App, props, plugin }) {
        // Buat instance Vue dan tambahkan komponen tambahan
        const vueApp = createApp({
            render: () => h(App, props)
        });

        // Menggunakan Inertia plugin dan Ziggy
        vueApp
            .use(plugin)
            .use(ZiggyVue);

        // Registrasi komponen tambahan
        vueApp.component('LandingPage', LandingPage);
        vueApp.component('UserProfile', UserProfile);
        vueApp.component('TesGayaBelajar', TesGayaBelajar); // Daftarkan TesGayaBelajar
        vueApp.component('Dashboard', Dashboard); 

        // Mount ke elemen DOM
        vueApp.mount(el);
    },

    progress: {
        color: '#4B5563',
    },
});

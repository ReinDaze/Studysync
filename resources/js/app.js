// Import CSS dan Bootstrap
import '../css/app.css';
import './bootstrap';

// Import Inertia dan helper
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { createApp, h } from 'vue';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';
import App from '../App.vue';
import UserProfile from './Components/UserProfile.vue';

// Nama aplikasi
const appName = import.meta.env.VITE_APP_NAME || 'Laravel';
const app = createApp({});
app.component('user-profile', UserProfile);
app.mount('#app')

// Inertia App
createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob('./Pages/**/*.vue'),
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

        // Komponen tambahan
        
        vueApp.component('LandingPage', LandingPage);

        // Mount ke elemen DOM
        vueApp.mount(el);
    },

    progress: {
        color: '#4B5563',
    },
});

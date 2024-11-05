<template>
    <div>
        <LandingPage /> <!-- Menampilkan komponen LandingPage di sini -->
        <router-view></router-view> <!-- Tempat di mana halaman akan dirender -->
    </div>
</template>

<script>
import LandingPage from './Profile/LandingPage.vue'; // Pastikan path-nya benar
import TesGayaBelajar from './Profile/TesGayaBelajar';

export default {
    name: 'App',
    components: {
        LandingPage // Mendaftarkan komponen LandingPage
    }
};
</script>

<style scoped>
/* Tambahkan CSS di sini jika diperlukan */
</style>
<template>
  <div class="flex flex-col min-h-screen bg-gray-100">
    <!-- Komponen Header -->
    <HeaderContent />

    <!-- Konten Utama -->
    <div class="flex flex-col items-center justify-center flex-grow p-6">
      <h1 class="text-5xl font-bold text-blue-500 mb-4">Tes Gaya Belajar</h1>
      <p class="text-xl text-center text-gray-700 mb-6">
        Temukan gaya belajar yang paling cocok untuk Anda! Ikuti tes ini untuk mendapatkan wawasan tentang cara belajar yang paling efektif.
      </p>
      <button
        @click="startTest"
        class="px-8 py-3 text-2xl font-bold text-white bg-blue-500 rounded-full hover:bg-blue-600 transition duration-300"
      >
        Mulai Tes
      </button>
    </div>

    <!-- Komponen Footer -->
    <FooterContent />
  </div>
</template>

<script lang="ts">
import { defineComponent } from 'vue'
import HeaderContent from '@/Components/HeaderContent.vue'
import FooterContent from '@/Components/FooterContent.vue'

export default defineComponent({
  name: 'TesGayaBelajar',
  components: {
    HeaderContent,
    FooterContent,
  },
  methods: {
    startTest() {
      // Logika untuk memulai tes
      console.log('Tes dimulai!');
      // Arahkan ke halaman tes atau lakukan aksi lainnya
    },
  },
})
</script>

<style scoped>
/* Tambahkan CSS khusus di sini jika diperlukan */
</style>

<script>
import HeaderContent from '@/Components/HeaderContent.vue';
import FooterContent from '@/Components/FooterContent.vue';



export default {
  components: {
    HeaderContent,
    FooterContent,
  },
};
</script>

<style scoped>
/* Add any additional styles here if needed */
</style>

<template>
    <div class="min-h-screen bg-gray-50">
      <HeaderContent />
  
      <!-- Hero Section -->
      <section class="container max-w-6xl mx-auto px-4 py-8 md:py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
          <div class="text-center md:text-left">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-800 mb-6 leading-tight">
              Cari tahu gaya belajarmu sekarang!
            </h1>
            <p class="text-gray-600 mb-8 text-lg">
              Temukan metode belajar yang paling sesuai dengan karakteristik Anda untuk hasil yang optimal.
            </p>
            <router-link 
              to="/tes-gaya-belajar" 
              class="inline-block px-6 py-3 bg-blue-500 hover:bg-blue-600 text-white rounded-lg transition duration-300 ease-in-out transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50"
            >
              Mulai Sekarang
            </router-link>
          </div>
          <div class="flex justify-center items-center">
            <div class="relative w-full max-w-md">
              <svg width="100%" height="100%" viewBox="0 0 1920 952" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-auto">
                <rect width="1920" height="952" fill="white" fill-opacity="0.8"/>
                <rect width="1920" height="952" fill="url(#paint0_linear)" fill-opacity="0.2"/>
                <defs>
                  <linearGradient id="paint0_linear" x1="1065.5" y1="1533.5" x2="1192" y2="396" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#4A90E2" stop-opacity="0"/>
                    <stop offset="0.585" stop-color="#0075FF" stop-opacity="0.73125"/>
                    <stop offset="0.8" stop-color="#4A90E2"/>
                  </linearGradient>
                </defs>
              </svg>
            </div>
          </div>
        </div>
      </section>
  
      <!-- Features Section -->
      <section class="max-w-6xl mx-auto px-4 py-16 bg-white">
        <h2 class="text-2xl md:text-3xl font-semibold text-center mb-12">Kelebihan StudySync</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <!-- Feature 1 -->
          <div class="bg-blue-100 p-8 rounded-xl text-center transform transition duration-300 hover:shadow-lg hover:-translate-y-1">
            <div class="inline-block p-4 bg-blue-500 rounded-full mb-6">
              <i class="fas fa-book text-white text-3xl"></i>
            </div>
            <h3 class="text-xl font-semibold mb-4">Informatif</h3>
            <p class="text-gray-600">Dapatkan informasi mendalam tentang gaya belajar yang sesuai dengan karakteristik Anda.</p>
          </div>
          
          <!-- Feature 2 -->
          <div class="bg-blue-100 p-8 rounded-xl text-center transform transition duration-300 hover:shadow-lg hover:-translate-y-1">
            <div class="inline-block p-4 bg-blue-500 rounded-full mb-6">
              <i class="fas fa-users text-white text-3xl"></i>
            </div>
            <h3 class="text-xl font-semibold mb-4">Personalisasi</h3>
            <p class="text-gray-600">Solusi pembelajaran yang disesuaikan dengan kebutuhan individual Anda.</p>
          </div>
          
          <!-- Feature 3 -->
          <div class="bg-blue-100 p-8 rounded-xl text-center transform transition duration-300 hover:shadow-lg hover:-translate-y-1">
            <div class="inline-block p-4 bg-blue-500 rounded-full mb-6">
              <i class="fas fa-clock text-white text-3xl"></i>
            </div>
            <h3 class="text-xl font-semibold mb-4">Efisien</h3>
            <p class="text-gray-600">Hemat waktu dengan metode belajar yang tepat dan terarah.</p>
          </div>
        </div>
      </section>
  
      <FooterContent />
    </div>
  </template>
  

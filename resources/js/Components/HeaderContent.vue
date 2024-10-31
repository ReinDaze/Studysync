<template>
    <nav class="bg-white shadow-sm">
      <div class="max-w-6xl mx-auto px-4 py-4">
        <!-- Desktop and Mobile Top Bar -->
        <div class="flex justify-between items-center">
          <!-- Logo -->
          <div class="flex items-center space-x-2">
            <span class="text-purple-600 font-semibold text-xl">StudySync</span>
          </div>
  
          <!-- Desktop Navigation -->
          <div class="hidden md:flex items-center space-x-6">
            <router-link to="/" class="text-gray-600 hover:text-gray-900">Beranda</router-link>
            <router-link to="/tes-gaya-belajar" class="text-gray-600 hover:text-gray-900">Tes Gaya Belajar</router-link>
            <router-link to="/dashboard" class="text-gray-600 hover:text-gray-900">Dashboard</router-link>
            <router-link to="#" class="text-gray-600 hover:text-gray-900">Kontak</router-link>
            <router-link to="/login" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition-colors">Login</router-link>
          </div>
  
          <!-- Mobile Menu Button -->
          <div class="md:hidden">
            <button @click="isOpen = !isOpen" class="text-gray-600 hover:text-gray-900 focus:outline-none">
              <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path v-if="!isOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                <path v-else stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
              </svg>
            </button>
          </div>
        </div>
  
        <!-- Mobile Navigation -->
        <div v-show="isOpen" class="md:hidden mt-4">
          <div class="flex flex-col space-y-4">
            <router-link to="/" class="text-gray-600 hover:text-gray-900">Beranda</router-link>
            <router-link to="/tes-gaya-belajar" class="text-gray-600 hover:text-gray-900">Tes Gaya Belajar</router-link>
            <router-link to="/dashboard" class="text-gray-600 hover:text-gray-900">Dashboard</router-link>
            <router-link to="#" class="text-gray-600 hover:text-gray-900">Kontak</router-link>
            <router-link to="/login" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition-colors text-center">Login</router-link>
          </div>
        </div>
      </div>
    </nav>
  </template>
  
  <script>
  export default {
    data() {
      return {
        isOpen: false,
      };
    },
  };
  </script>
  
  <style scoped>
  /* Add any additional styles here if needed */
  </style>
  
<template>
  <header
    class="flex flex-wrap items-center justify-between gap-5 px-14 pt-4 pb-11 w-full bg-white shadow-[0px_4px_4px_rgba(0,0,0,0.25)] max-md:px-5"
  >
    <h1 class="text-5xl font-bold text-blue-500 max-md:text-3xl">Studysync</h1>
    <nav class="flex flex-wrap items-center gap-5 max-md:flex-col">
      <router-link to="/" class="text-2xl font-medium text-blue-500 max-md:text-xl">
        Beranda
      </router-link>
      <router-link to="/tes-gaya-belajar" class="text-2xl font-medium text-blue-500 max-md:text-xl">
        Tes Gaya Belajar
      </router-link>
      <router-link to="/dashboard" class="text-2xl font-medium text-blue-500 max-md:text-xl">
        Dashboard
      </router-link>
      <router-link to="/kontak" class="text-2xl font-medium text-blue-500 max-md:text-xl">
        Kontak
      </router-link>
      <router-link to="/login">
        <button
          class="flex items-center justify-center bg-blue-500 text-white font-bold rounded-full px-8 py-3 text-2xl max-md:text-lg max-md:px-5 max-md:py-2"
        >
          Login
        </button>
      </router-link>
    </nav>
  </header>
</template>

<script lang="ts">
import { defineComponent } from 'vue'

export default defineComponent({
  name: 'StudySyncHeader'
})
</script>

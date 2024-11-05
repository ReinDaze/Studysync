<template>
  <footer class="bg-blue-500 px-6 py-12 md:px-12 lg:px-20">
    <div class="mx-auto max-w-7xl">
      <div class="grid grid-cols-1 gap-8 lg:grid-cols-12">
        <!-- Main Content Section -->
        <div class="lg:col-span-9">
          <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
            <!-- Contact Section -->
            <div>
              <h2 class="text-3xl font-bold text-white lg:text-4xl">Kontak Kami</h2>
              <div class="mt-8 space-y-6">
                <div class="flex items-center gap-4">
                  <img 
                    src="/api/placeholder/32/32" 
                    alt="Logo"
                    class="h-8 w-8"
                  />
                  <span class="text-lg text-white">studysync</span>
                </div>
                <div class="flex items-center gap-4">
                  <img 
                    src="/api/placeholder/32/32" 
                    alt="Email"
                    class="h-8 w-8"
                  />
                  <span class="text-lg text-white">studysync@study.com</span>
                </div>
                <div class="flex items-center gap-4">
                  <img 
                    src="/api/placeholder/32/32" 
                    alt="Social"
                    class="h-8 w-8"
                  />
                  <span class="text-lg text-white">study.sync</span>
                </div>
                <div class="flex items-center gap-4">
                  <img 
                    src="/api/placeholder/32/32" 
                    alt="YouTube"
                    class="h-8 w-8"
                  />
                  <span class="text-lg text-white">study tube</span>
                </div>
              </div>
            </div>

            <!-- Information Section -->
            <div>
              <h2 class="text-3xl font-bold text-white lg:text-4xl">Informasi</h2>
              <div class="mt-8 space-y-6">
                <div class="flex items-center gap-4">
                  <img 
                    src="/api/placeholder/32/32" 
                    alt="Address"
                    class="h-8 w-8"
                  />
                  <span class="text-lg text-white">studysync</span>
                </div>
                <div class="flex items-center gap-4">
                  <img 
                    src="/api/placeholder/32/32" 
                    alt="Phone"
                    class="h-8 w-8"
                  />
                  <span class="text-lg text-white">+62 888 888 888</span>
                </div>
                <address class="text-lg text-white not-italic">
                  Hotel Asia lt. 21<br />
                  Jln. Jomokerto Jomo Mojokerto
                </address>
              </div>
            </div>

            <!-- Navigation Links -->
            <nav>
              <ul class="space-y-6 text-lg text-white">
                <li>
                  <a href="#" class="hover:text-blue-100 transition-colors">
                    Kebijakan Privasi
                  </a>
                </li>
                <li>
                  <a href="#" class="hover:text-blue-100 transition-colors">
                    Syarat & Ketentuan
                  </a>
                </li>
                <li>
                  <a href="#" class="hover:text-blue-100 transition-colors">
                    Tentang kami
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>

        <!-- Company Description -->
        <div class="lg:col-span-3">
          <h1 class="text-3xl font-bold text-white lg:text-4xl">Studysync</h1>
          <p class="mt-6 text-lg text-white">
            Studysync merupakan website yang berfokus membantu pengguna mengetahui 
            gaya belajar, diharapkan setelah mengetahui tipe gaya belajar pengguna 
            dapat termudahkan dalam belajar
          </p>
        </div>
      </div>
    </div>
  </footer>
</template>

<script lang="ts">
import { defineComponent } from 'vue';

export default defineComponent({
  name: 'FooterSection',
});
</script>
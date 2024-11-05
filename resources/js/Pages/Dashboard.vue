<template>
  <div class="min-h-screen bg-gray-50 flex">
    <HeaderContent />
  
    <!-- Sidebar -->
    <aside class="fixed h-screen w-64 bg-white shadow-sm">
      <div class="p-6">
        <div class="mb-8">
          <h1 class="text-2xl font-semibold text-blue-500">
            <router-link to="/" class="hover:text-blue-600 transition-colors">StudySync</router-link>
          </h1>
        </div>

        <nav class="space-y-2">
          <router-link to="/dashboard" class="flex items-center space-x-3 px-4 py-3 bg-blue-50 text-blue-500 rounded-lg">
            <i class="fas fa-chart-line w-5"></i>
            <span>Dashboard</span>
          </router-link>
          <router-link to="/profile/edit" class="flex items-center space-x-3 px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-lg transition-colors">
            <i class="fas fa-user w-5"></i>
            <span>Edit Profile</span>
          </router-link>
          <router-link to="/history" class="flex items-center space-x-3 px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-lg transition-colors">
            <i class="fas fa-history w-5"></i>
            <span>Riwayat</span>
          </router-link>
        </nav>
      </div>
    </aside>
  
    <!-- Main Content -->
    <main class="flex-1 ml-64 p-8">
      <div class="max-w-6xl mx-auto">
        <h1 class="text-2xl font-semibold mb-8">Dashboard</h1>

        <!-- Profile Section -->
        <section class="mb-12">
          <ProfileCard />
        </section>

        <!-- History and Biodata Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
          <LearningHistory />
          <Biodata />
        </div>
      </div>

      <!-- Tips Card -->
      <TipsCard />
    </main>

    <FooterContent />
  </div>
</template>

<script>
import HeaderContent from '@/Components/HeaderContent.vue';
import FooterContent from '@/Components/FooterContent.vue';
import ProfileCard from 'o@/Components/ProfileCard.vue';
import LearningHistory from '@/Components/LearningHistory.vue';
import Biodata from '@/Components/Biodata.vue';
import TipsCard from '@/Components/TipsCard.vue';

export default {
  components: {
    HeaderContent,
    FooterContent,
    ProfileCard,
    LearningHistory,
    Biodata,
    TipsCard,
  },
};
</script>

<style scoped>
/* Add any additional styles here if needed */
</style>

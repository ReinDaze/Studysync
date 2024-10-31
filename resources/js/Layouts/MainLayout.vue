<script setup lang>
import HeaderContent from '@/Components/HeaderContent.vue';
import FooterContent from '@/Components/FooterContent.vue';
</script>

<template>
    <HeaderContent></HeaderContent>
    <main>
        <slot></slot>
    </main>
    <FooterContent></FooterContent>
</template>
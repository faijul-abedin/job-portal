<template>
    


    <slot/>

    <Footer/>

</template>


<script setup>

import Footer from '@/Layouts/Partials/Footer.vue';

</script>


<style>
    body {
        @apply flex min-h-screen flex-col bg-gray-900;
    }
</style>
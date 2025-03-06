

<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";

defineProps({
  name: String,
  course: String,
  year: String,
});
</script>

<template>
  <AppLayout>
    <div class="flex items-center justify-center h-screen bg-gradient-to-br from-teal-700 to-indigo-900">
      <div class="p-8 rounded-2xl bg-white/10 backdrop-blur-md shadow-lg text-center">
        <h1 class="text-4xl font-extrabold text-cyan-300 drop-shadow-lg">Welcome!</h1>
        <p class="text-lg text-white/90 mt-4">Name: <span class="text-cyan-200 font-semibold">IVY H. QUINO</span></p>
        <p class="text-lg text-white/90">Course: <span class="text-cyan-200 font-semibold">BSIT</span></p>
        <p class="text-lg text-white/90">Year: <span class="text-cyan-200 font-semibold">3RD YEAR</span></p>
      </div>
    </div>
  </AppLayout>
</template>

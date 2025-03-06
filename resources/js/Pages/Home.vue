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
    <div class="flex items-center justify-center h-screen flex-col bg-blue-950 text-white">
      <h1 class="text-2xl font-bold text-blue-300">Welcome!</h1>
      <p class="text-blue-200">Name: Mika Laruga</p>
      <p class="text-blue-200">Course: BSIT</p>
      <p class="text-blue-200">Year: 3RD YEAR</p>
    </div>
  </AppLayout>
</template>

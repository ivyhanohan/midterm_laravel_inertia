<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
  <nav class="bg-indigo-800 text-white p-4 shadow-md">
    <div class="container mx-auto flex justify-between items-center">
      <div class="text-2xl font-extrabold tracking-wide">Laravel-Inertia App</div>
      <div class="space-x-6">
        <Link href="/" class="hover:text-gray-300 transition duration-300">Home</Link>
        <Link href="/bidders" class="hover:text-gray-300 transition duration-300">Bidders</Link>
        <Link href="/cars" class="hover:text-gray-300 transition duration-300">Cars</Link>
      </div>
    </div>
  </nav>
</template>

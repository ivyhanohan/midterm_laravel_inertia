<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
  <div>
    <!-- Navigation Bar -->

    <nav class="bg-purple-700 text-white p-4 shadow-md">
      <div class="container mx-auto flex justify-between">
        <div class="text-lg font-bold">Car Auction</div>
        <ul class="flex space-x-4">
          <li><Link href="/" class="hover:underline">Home</Link></li>
          <li><Link href="/bidders" class="hover:underline">Bidders</Link></li>
          <li><Link href="/cars" class="hover:underline">Cars</Link></li>
        </ul>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container mx-auto p-4">
      <slot />
    </div>
  </div>
</template>

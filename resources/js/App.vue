<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
  <div>

    <NavigationBar />

    <main class="p-6">
      <slot />
    </main>
  </div>
</template>

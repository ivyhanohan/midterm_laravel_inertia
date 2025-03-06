<script setup>
import { ref, computed } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";

const props = defineProps({
  bidders: Array,
});

const search = ref("");

const filteredBidders = computed(() =>
  props.bidders.filter(
    (bidder) =>
      bidder.first_name.toLowerCase().includes(search.value.toLowerCase()) ||
      bidder.last_name.toLowerCase().includes(search.value.toLowerCase()) ||
      bidder.email.toLowerCase().includes(search.value.toLowerCase())
  )
);
</script>

<template>
  <AppLayout>
    <div class="p-6 bg-blue-950 min-h-screen text-white">
      <h1 class="text-3xl font-bold mb-4 text-blue-300">Bidders List</h1>
      <input
        type="text"
        v-model="search"
        placeholder="Search bidders..."
        class="mt-2 p-3 w-full max-w-lg border border-blue-700 rounded-lg bg-blue-900 text-white focus:outline-none focus:ring-2 focus:ring-blue-500"
      />
      <div class="mt-6">
        <div
          v-for="bidder in filteredBidders"
          :key="bidder.id"
          class="p-6 mb-4 bg-blue-900 rounded-lg shadow-md border border-blue-800"
        >
          <p class="text-lg font-semibold text-blue-200"><strong>Name:</strong> {{ bidder.first_name }} {{ bidder.last_name }}</p>
          <p class="text-blue-400"><strong>Address:</strong> {{ bidder.address }}</p>
          <p class="text-blue-400"><strong>Email:</strong> {{ bidder.email }}</p>
        </div>
      </div>
    </div>
  </AppLayout>
</template>

<script setup>
import { ref, computed } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";

const props = defineProps({
  cars: Array,
});

const search = ref("");

const filteredCars = computed(() =>
  props.cars.filter(
    (car) =>
      car.make.toLowerCase().includes(search.value.toLowerCase()) ||
      car.model.toLowerCase().includes(search.value.toLowerCase()) ||
      car.year.toString().includes(search.value)
  )
);
</script>

<template>
  <AppLayout>
    <div class="p-6 bg-blue-950 min-h-screen text-white">
      <h1 class="text-3xl font-bold mb-4 text-blue-300">Cars List</h1>
      <input
        type="text"
        v-model="search"
        placeholder="Search cars..."
        class="mt-2 p-3 w-full max-w-lg border border-blue-700 rounded-lg bg-blue-900 text-white focus:outline-none focus:ring-2 focus:ring-blue-500"
      />
      <div class="mt-6">
        <div
          v-for="car in filteredCars"
          :key="car.id"
          class="p-6 mb-4 bg-blue-900 rounded-lg shadow-md border border-blue-800"
        >
          <p class="text-lg font-semibold text-blue-200"><strong>Make:</strong> {{ car.make }}</p>
          <p class="text-blue-400"><strong>Model:</strong> {{ car.model }}</p>
          <p class="text-blue-400"><strong>Year:</strong> {{ car.year }}</p>
          <p class="text-blue-400"><strong>Miles:</strong> {{ car.miles }}</p>
        </div>
      </div>
    </div>
  </AppLayout>
</template>

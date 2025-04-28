<template>
  <div class="min-h-screen bg-gray-100 flex flex-col justify-center items-center p-6">
    <div class="max-w-2xl w-full space-y-8">

      <h1 class="text-4xl font-bold text-center text-indigo-700">Liste des histoires</h1>

      <div v-if="stories.length > 0" class="space-y-6">
        <div
          v-for="story in stories"
          :key="story.id"
          class="bg-white shadow-md rounded-lg p-6 flex flex-col items-center transition hover:shadow-xl"
        >
          <h2 class="text-2xl font-semibold text-gray-800 mb-4">{{ story.title }}</h2>
          <p class="text-gray-600 text-center mb-6">{{ story.description }}</p>

          <!-- Bouton Commencer l'histoire -->
          <router-link
            :to="`/chapter/${story.first_chapter_id}`"
            class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-3 px-6 rounded-lg text-lg transition duration-300"
          >
            Commencer cette histoire
          </router-link>
        </div>
      </div>

      <div v-else class="text-center text-gray-600">
        Aucune histoire disponible.
      </div>

    </div>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import api from '../services/api'

const stories = ref([])

onMounted(async () => {
  const response = await api.get('/stories')
  stories.value = response.data
})
</script>

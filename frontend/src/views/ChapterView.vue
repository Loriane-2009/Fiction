<template>
  <div class="min-h-screen bg-gray-100 flex flex-col justify-center px-6 py-12">
    <div class="max-w-3xl mx-auto bg-white rounded-2xl shadow-lg p-8 space-y-10">

      <!-- Titre du chapitre -->
      <h1 class="text-4xl font-extrabold text-center text-indigo-700">{{ chapter.title }}</h1>

      <!-- Contenu du chapitre -->
      <p class="text-lg text-gray-700 leading-relaxed text-justify">
        {{ chapter.content }}
      </p>

      <!-- Choix de l'utilisateur -->
      <div v-if="choices.length > 0" class="pt-6">
        <h2 class="text-2xl font-semibold text-center text-indigo-500 mb-6">Que veux-tu faire ?</h2>
        <div class="flex flex-col items-center space-y-4">
          <button
            v-for="choice in choices"
            :key="choice.id"
            @click="goToNextChapter(choice.next_chapter_id)"
            class="w-full sm:w-2/3 md:w-1/2 bg-indigo-500 hover:bg-indigo-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-300"
          >
            {{ choice.choice_text }}
          </button>
        </div>
      </div>

      <!-- Fin de l'histoire -->
      <div v-else class="text-center pt-8 space-y-6">
        <p class="text-2xl font-semibold text-red-500">Fin de l'histoire</p>
        <router-link
          to="/"
          class="inline-block bg-gray-500 hover:bg-gray-700 text-white font-semibold py-3 px-8 rounded-lg transition duration-300"
        >
          Retour à l'accueil
        </router-link>
      </div>

    </div>
  </div>
</template>

<script setup>
import { ref, onMounted, watch } from 'vue'
import { useRoute, useRouter } from 'vue-router'
import api from '../services/api'

const route = useRoute()
const router = useRouter()
const chapter = ref({})
const choices = ref([])

async function fetchChapterAndChoices() {
  const chapterId = route.params.id
  const chapterResponse = await api.get(`/chapters/${chapterId}`)
  chapter.value = chapterResponse.data

  const choicesResponse = await api.get(`/choices?chapter_id=${chapterId}`)
  choices.value = choicesResponse.data
}

function goToNextChapter(nextChapterId) {
  if (nextChapterId) {
    router.push(`/chapter/${nextChapterId}`)
  }
}

onMounted(() => {
  fetchChapterAndChoices()
})

watch(() => route.params.id, fetchChapterAndChoices)
</script>

<style scoped>
/* Petite animation fade */
.fade-enter-active, .fade-leave-active {
  transition: opacity 0.5s ease;
}
.fade-enter-from, .fade-leave-to {
  opacity: 0;
}
</style>

<template>
    <div>
      <h1>{{ chapter.title }}</h1> <!-- Afficher le titre du chapitre -->
      <p>{{ chapter.content }}</p> <!-- Afficher le texte du chapitre -->
  
      <div v-if="choices.length > 0">
        <h2>Que veux-tu faire ?</h2>
        <ul>
          <li v-for="choice in choices" :key="choice.id">
            <button @click="goToNextChapter(choice.next_chapter_id)">
              {{ choice.choice_text }}
            </button>
          </li>
        </ul>
      </div>
  
      <div v-else>
        <p>Fin de l'histoire.</p>
      </div>
    </div>
  </template>
  
  
  <script setup>
  import { ref, onMounted, watch } from 'vue';
  import { useRoute, useRouter } from 'vue-router';
  import api from '../services/api';
  
  const route = useRoute();
  const router = useRouter();
  const chapter = ref({});
  const choices = ref([]);
  
  async function fetchChapterAndChoices() {
    const chapterId = route.params.id;
  
    //  Récupérer d'abord le chapitre
    const chapterResponse = await api.get(`/chapters/${chapterId}`);
    chapter.value = chapterResponse.data;
  
    // Puis récupérer les choix
    const choicesResponse = await api.get(`/choices?chapter_id=${chapterId}`);
    choices.value = choicesResponse.data;
  }
  
  function goToNextChapter(nextChapterId) {
    if (nextChapterId) {
      router.push(`/chapter/${nextChapterId}`);
    }
  }
  
  onMounted(() => {
    fetchChapterAndChoices();
  });
  
  // Recharge le chapitre quand l'URL change (quand on clique sur un choix)
  watch(() => route.params.id, fetchChapterAndChoices);
  </script>
  
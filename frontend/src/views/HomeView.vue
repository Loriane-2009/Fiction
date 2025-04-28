<template>
  <div>
    <h1>Liste des histoires</h1>
    <ul>
      <li v-for="story in stories" :key="story.id">
        {{ story.title }}
      </li>
    </ul>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import api from '../services/api';

const stories = ref([]);

onMounted(async () => {
  const response = await api.get('/stories');
  stories.value = response.data;
});
</script>

<template>
  <div class="min-h-screen flex flex-col justify-center items-center bg-gray-50 p-6">
    <div class="text-center space-y-6">
      <h1 class="text-4xl font-bold text-indigo-600">Bienvenue dans l'aventure</h1>
      <p class="text-lg text-gray-700">Es-tu prêt à explorer le Temple Oublié ?</p>
      <router-link
        to="/chapter/1"
        class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-4 px-8 rounded-lg text-xl transition"
      >
        Commencer l'histoire
      </router-link>
    </div>
  </div>
</template>

<template>
  <PageHeader title="" />
  <h1>{{ i18nState.textos.afesisGames }}</h1>
  <p>{{ i18nState.textos.descriptionAfesis }}</p>

  <div class="banner_family"></div>

  <section>
    <h2>{{ i18nState.textos.pitch }}</h2>
    <p>{{ i18nState.textos.pitchText }}</p>
    <h2>{{ i18nState.textos.aboutAfesis }}</h2>
    <p>{{ i18nState.textos.aboutAfesisText }}</p>


    <h2>{{ i18nState.textos.history }}</h2>
    <p>{{ i18nState.textos.historyText }}</p>

    <h2>{{ i18nState.textos.features }}</h2>
    <p>{{ i18nState.textos.feature1 }}.</p>
    <br>
    <p>{{ i18nState.textos.feature2 }}</p>
    <br>
    <p>{{ i18nState.textos.feature3 }}</p>
    <br>
    <p>{{ i18nState.textos.feature4 }}</p>

    <h2>{{ i18nState.textos.lang }}</h2>
    <p>{{ i18nState.textos.langAvailable }}</p>
  </section>
  <section class="section-presskit">
    <h2>Screenshots</h2>

    <a class="download-btn" href="/download/Presskit_ZIPafesis.zip" download>
      Descarga nuestro presskit como ZIP (43.56 Mb)
    </a>

    <div class="gallery">
      <img v-for="(img, index) in images" :key="index" :src="img" :alt="'Screenshot ' + (index + 1)" @click="open(img)"
        :class="{ active: activeImage === img }" />
        </div>
      <div v-if="selected" class="overlay" @click="selected = null">
        <img :src="selected" class="big-image" />
      </div>
    
  </section>
  <section>
    <div class="conoce">
      <img src="/assets/imgs/ConoceDimas (1).png">
    </div>

    <p>Nuestro protagonista Dimas es un adulto que malvive por su cuenta y lleva descontento con
      su vida mucho tiempo. Tras los comienzos del inicio del juego, necesitará una mano amable
      (y de tu guía) para encontrar el camino. </p>

    <div class="conoce">
      <img src="/assets/imgs/ConoceValdejara (1).png">
    </div>

    <p>Valdejara es un pueblo ficticio detenido en el tiempo, se encuentra en la salida de un valle
      oculto en la sierra dentro de la provincia Ávila.Valdejara hoy es un pueblo vivo, con una
      demografía típica para su tamaño. Combina retorno de nativos, llegada de familias jóvenes
      atraídas por calidad de vida y teletrabajo, y una pequeña comunidad de creadores y
      emprendedores que ha tomado la antigua quesería y la vieja fábrica en el valle como
      centros productivos y culturales. Y como es tradición, en el caso de Dimas, la Ferretería
      familiar, Durán e Hijos. </p>

  </section>
  <div style="justify-content: center; align-items:center; display: flex; flex-direction: column; margin-top: 30px;">
    <LinkedImage :src="'assets/imgs/steam.png'" :link="'https://store.steampowered.com/?l=spanish'" :alt="'steam'" />
  </div>
  <div style="text-align: center; margin-top: 30px; margin-bottom: 30px;">
    <RouterLink to="/support" class="yellow-link">¿Quieres apoyar el proyecto?</RouterLink>
  </div>

  <div class="banner-noche">
  </div>

</template>

<script setup>
import { ref } from 'vue';
import PageHeader from '../ui/PageHeader.vue';
import LinkedImage from './../ui/LinkedImage.vue';
import { i18nState } from './../translation/state'
const images = [
  '/assets/imgs/dimas_boceto.png',
  '/assets/imgs/dimas4.png',
  '/assets/imgs/pascua_sketches.png',
  '/assets/imgs/religiosos.png',
  '/assets/imgs/vendedores2 (1).png'
]

const selected = ref(null)

const open = (img) => {
  selected.value = img
}

</script>
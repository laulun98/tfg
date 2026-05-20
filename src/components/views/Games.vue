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
  '/assets/imgs/halloween.png',
  '/assets/imgs/pesadilla.png',
  '/assets/imgs/SpiderDemon.png',
  '/assets/imgs/TheVessel.png',
  '/assets/imgs/comic.png',
  '/assets/imgs/post.png'

]

const selected = ref(null)

const open = (img) => {
  selected.value = img
}

</script>
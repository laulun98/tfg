<template>
    <PageHeader title="" :bannerStyle="'banner'" :page="'/home'"/>
    <Galeria :images="images"/>
    <div class="home-content">
        <h1>{{ i18nState.textos.title }}</h1><!-- Aftos es un estudio madrileño de desarrollo de videojuegos. -->
        <h1 style="margin-top: 0px">{{ i18nState.textos.afesis }}</h1>
        <P>{{ i18nState.textos.description }}</P>
        <p><RouterLink to="/about" class="yellow-link">{{ i18nState.textos.more }}</RouterLink></P>
        <br>
        <RouterLink to="/games" class="yellow-link">{{ i18nState.textos.presskit }}</RouterLink>
    </div>

</template>

<script setup> 
import { i18nState } from './../translation/state'
import PageHeader from './../ui/PageHeader.vue'
import Galeria from './../ui/Galeria.vue'

const images = [
  {"src": "/assets/imgs/CURA.png", "alt": "Imagen CURA"},
  {"src": "/assets/imgs/DIMAS.png", "alt": "Imagen DIMAS"},
  {"src": "/assets/imgs/GAVINO.png", "alt": "Imagen GAVINO"},
  {"src": "/assets/imgs/GESTAS.png", "alt": "Imagen GESTAS"},
  {"src": "/assets/imgs/MADRE.png", "alt": "Imagen MADRE"},
  {"src": "/assets/imgs/MONJA.png", "alt": "Imagen MONJA"},
  {"src": "/assets/imgs/PADRE.png", "alt": "Imagen PADRE"},
  {"src": "/assets/imgs/PASCUA.png", "alt": "Imagen PASCUA"},
  {"src": "/assets/imgs/vendedores.png", "alt": "Imagen VENDEDORES"},
]
</script>
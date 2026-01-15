<template>
    <PageHeader title="" :bannerStyle="'banner'" :page="'home'"/>
    <div class="home-content">
        <h1>Aftos es un estudio madrileño de desarrollo de videojuegos.</h1>
        <h1 style="margin-top: 0px">Creando "Afesis"</h1>
        <P>Somos un estudio de videojuegos y creación audiovisual que advoca por la cultura, el talento de jóvenes creadores y las historias que inspiran. 
        <br><RouterLink to="/about" class="yellow-link">Leer más</RouterLink></P>
        <br>
        <RouterLink to="/games" class="yellow-link">Presskit de Afesis</RouterLink>
    </div>
   <!--
    <section class="section-presskit">
  <h2>Trailers</h2>
  <p class="subtitle">
    Afesis
    <a href="#" target="_blank">YouTube</a>
  </p>

  <div class="video-container-presskit">
    <iframe 
      src="https://www.youtube.com/embed/YOUR_VIDEO_ID" 
      title="YouTube video player" 
      allowfullscreen>
    </iframe>
  </div>
</section> -->
<h2>¡Únete a nuestra comunidad!</h2> <!--  <a class="linkDiscord" href="https://dicord.com" target="_blank" title="Botón de discord">-->

</template>

<script setup>
import PageHeader from '../ui/PageHeader.vue';
import TextTranslation from '../translation/TextTranslation.json';


</script>
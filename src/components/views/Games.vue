<template>
    <PageHeader title="Games"/>

     <p>Afesis es nuestra primera aventura como equipo, una visual novel con suspense para jóvenes
adultos en la que la tradición cristiana cobra vida. Descifra pasajes bíblicos, enfréntate a las
sombras que amenazan la fe y siente el peso de cada elección.
</p>

<section>
    <h2>Pitch</h2>
    <h2>Description</h2>
    <h2>History</h2>
    <h2>Features</h2>
</section>

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
</section>

<section class="section-presskit">
  <h2>Screenshots</h2>

  <a class="download-btn" href="#" download>
    Download all Screenshots as ZIP (4.76 Mb)
  </a>

  <div class="gallery">
    <img src="" alt="Screenshot 1">
    <img src="" alt="Screenshot 2">
    <img src="" alt="Screenshot 3">
    <img src="" alt="Screenshot 4">
    <img src="" alt="Screenshot 5">
    <img src="" alt="Screenshot 6">
  </div> 
</section>
<div>
 <LinkedImage :src="'assets/imgs/steam.png'" :link="'https://store.steampowered.com/?l=spanish'" :alt="'steam'" />
        </div>
<div>
    <RouterLink to="/support-us" class="yellow-link">¿Quieres apoyar el proyecto?</RouterLink>
</div>
</template>

<script setup>
import PageHeader from '../ui/PageHeader.vue';
import LinkedImage from './../ui/LinkedImage.vue';
</script>
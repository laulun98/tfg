<template>
    <PageHeader title="Games"/>

     <p>Afesis es nuestra primera aventura como equipo, una visual novel con suspense para jóvenes
adultos en la que la tradición cristiana cobra vida. Descifra pasajes bíblicos, enfréntate a las
sombras que amenazan la fe y siente el peso de cada elección.
</p>


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
     <LinkedImage :src="'assets/imgs/steam.png'" :alt="'steam'" />
    <img src="assets/imgs/img1.png" alt="Screenshot 1">
    <img src="assets/imgs/img2.png" alt="Screenshot 2">
    <img src="src/assets/imgs/img3.png" alt="Screenshot 3">
    <img src="src/assets/imgs/img4.png" alt="Screenshot 4">
    <img src="src/assets/imgs/img5.png" alt="Screenshot 5">
  </div>
</section>
</template>

<script setup>
import PageHeader from '../ui/PageHeader.vue';
import LinkedImage from './../ui/LinkedImage.vue';
</script>
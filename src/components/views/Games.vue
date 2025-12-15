<template>
    <PageHeader title=""/>
    <h1>Afesis</h1>
     <p>Afesis es nuestra primera aventura como equipo, una visual novel con suspense para jóvenes
adultos en la que la tradición cristiana cobra vida. Descifra pasajes bíblicos, enfréntate a las
sombras que amenazan la fe y siente el peso de cada elección.
</p>

<section>
    <h2>Pitch</h2>
    <p>Afesis es una visual novel con suspense para jóvenes adultos en la que la 
tradición cristiana cobra vida. Descifra pasajes bíblicos, enfréntate a las sombras 
que amenazan la fe y siente el peso de cada elección. </p>
    <h2>Description</h2>
    <p>Mientras que otros videojuegos cristianos abogan por ofrecer una 
experiencia dedicada al público creyente, tomando relatos de la Biblia como propias 
que contar en sus juegos, Áfesis busca no solo acercarse a este público cristiano, 
sino que también intenta atraer a un público general amante de los juegos 
narrativos. Esto lo hace adoptando una trama actual, envuelta en el mensaje del 
perdón cristiano. No necesitas conocer el cristianismo ni practicarlo para poder 
disfrutar del juego, pero para los cristianos este juego es una Oda a su Fe.  
El juego ofrece una experiencia enriquecedora donde se ponen en valor los valores 
cristianos, el peligro de las adicciones, cómo una mala gestión de estas puede 
repercutir negativamente no solo en ti mismo sino en tu entorno y cómo Dios puede 
ayudarnos a reencaminar nuestra vida. </p>
    <!--<h2>History</h2>
    <h2>Features</h2> -->
</section>
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
</section>
-->
<section class="section-presskit">
  <h2>Screenshots</h2>

  <a class="download-btn" href="#" download>
    Download all Screenshots as ZIP (4.76 Mb)
  </a>

  <div class="gallery">
    <div style="margin-left: 100px;">
    <img src="/assets/imgs/dimas_boceto.png" alt="Screenshot 1">
    <img src="/assets/imgs/dimas-expressions.png" alt="Screenshot 2">
    <img style=" object-position: 60% 20%;" src="/assets/imgs/dimas4.png" alt="Screenshot 3">

    <img style=" object-position: 55% 20%;" src="/assets/imgs/Gestasface.png" alt="Screenshot 4">
    <img style=" object-position: 60% 20%;" src="/assets/imgs/GestasBodyTypr.png" alt="Screenshot 5">
    <img src="/assets/imgs/Gestas_sketch.png" alt="Screenshot 6">

    <img src="/assets/imgs/family.png" alt="Screenshot 4">
    <img src="/assets/imgs/religiosos.png" alt="Screenshot 5">
    <img style=" object-position: 30% 20%;"src="/assets/imgs/vendedores2 (1).png" alt="Screenshot 6">
  </div>
  </div> 
</section>
<div style="justify-content: center; align-items:center; display: flex; flex-direction: column; margin-top: 30px;">
 <LinkedImage :src="'assets/imgs/steam.png'" :link="'https://store.steampowered.com/?l=spanish'" :alt="'steam'" />
        </div>
<div style="text-align: center; margin-top: 30px;">
    <RouterLink to="/support" class="yellow-link">¿Quieres apoyar el proyecto?</RouterLink>
</div>
</template>

<script setup>
import PageHeader from '../ui/PageHeader.vue';
import LinkedImage from './../ui/LinkedImage.vue';
</script>
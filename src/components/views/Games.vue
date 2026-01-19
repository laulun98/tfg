<template>
  <PageHeader title="" />
  <h1>Afesis</h1>
  <p>Afesis es nuestra primera aventura como equipo, una visual novel con suspense para jóvenes
    adultos en la que la tradición cristiana cobra vida. Descifra pasajes bíblicos, enfréntate a las
    sombras que amenazan la fe y siente el peso de cada elección.
  </p>

  <div class="banner_family"></div>

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


    <h2>History</h2>
    <p>Esta historia trata sobre cómo el perdón de Dios es lo que libera al ser
      humano del pecado y le permite avanzar en su vida y alcanzar la felicidad por medio
      del amor. Nosotros jugamos como Dimas, que, convertido en todo un adulto que
      malvive por su cuenta, lleva descontento con su vida mucho tiempo. Habita en un
      pequeño apartamento de su familia cerca de la Ferretería Durán e Hijos. Cuando su
      madre, por heridas del pasado, no quiere tener a su hijo cerca y desesperada le da
      un ultimátum, aparece Gestas. Nuestro hermano mayor nos propone cometer un
      delito aprovechando la precaria situación: entre los dos robaremos una Reliquia de
      la Familia Durán y compartiremos la riqueza. Mientras Gestas disfruta de este estilo
      de vida, nosotros pronto sentiremos el hastío de quien se deja arrastrar por sus
      impulsos. Y una vez perdida esa falsa sensación de libertad, intentaremos enmendar
      nuestros errores. Pero para elegir el bien, hay que conocerlo. </p>

    <h2>Features</h2>
    <p>-Sistema de tiempo: Explora la vida cotidiana de esta familia durante la
      madrugada, mediodía, tarde y noche. Atiende (o no) a los eventos y explora
      el pueblo de Valdejara.<br><br>

      -Gestión de ánimo, estrés y adicción: Hacer malabares entre oficio, descanso
      y vicios es algo que muchos pueden entender. Como Dimas, deberás
      adentrarte en las complicadas dependencias que hacen de ti quien quieres o
      no ser. <br><br>

      -Crafteo: En la Ferretería Durán e Hijos hay muchos gadgets a tu disposición,
      pero tu recurso más valioso siempre será tu ingenio. Craftea como Dimas,
      cobra a tus clientes (o tímalos) y arregla cerraduras como buen manitas que
      eres. <br><br>

      -Vínculos: La vida en Valdejara es más amena con compañía, pero no todos
      somos buenos o queremos socializar. Tal vez haya una Dulcinea alternativa
      esperándote, un carnicero de gran corazón y músculo, o un kioskero de
      acento interesante y un poco desconfiado, con los que pasar la tarde en el
      pueblo.
    </p>

    <h2>Idiomas disponibles</h2>
    <p> Español castellano, Inglés, Ruso </p>
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

    <a class="download-btn" href="/download/Presskit_ZIPafesis.zip" download>
      Descarga nuestro presskit como ZIP (43.56 Mb)
    </a>

    <div class="gallery">
      <img v-for="(img, index) in images" :key="index" :src="img" :alt="'Screenshot ' + (index + 1)" @click="open(img)"
        :class="{ active: activeImage === img }" />
      <div v-if="selected" class="overlay" @click="selected = null">
        <img :src="selected" class="big-image" />
      </div>
    </div>
    <!-- Lightbox 
<div id="lightbox" class="lightbox">
  <span class="close">&times;</span>
  <button class="nav prev">&#10094;</button>
  <img class="lightbox-img" src="">
  <button class="nav next">&#10095;</button>
</div>
-->
  </section>
  <section>

    <div class="conoce">
      <img src="/assets/imgs/ConoceDimas.png">
    </div>

    <p>Nuestro protagonista Dimas es un adulto que malvive por su cuenta y lleva descontento con
      su vida mucho tiempo. Tras los comienzos del inicio del juego, necesitará una mano amable
      (y de tu guía) para encontrar el camino. </p>

    <div class="conoce">
      <img src="/assets/imgs/ConoceValdejara.png">
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
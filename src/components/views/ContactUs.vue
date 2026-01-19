<template>
  <PageHeader title="" />

  <h3 style="text-align: center;">¡Contáctanos!</h3>

  <div style="width: 90%; height: 2px; background-color: #FFF ; margin-left: 70px;"></div>

  <div class="contact-section">

    <div class="contact-card">
      <h3>SUPPORT:</h3>
      <p>¿Necesitas ayuda o tienes alguna duda sobre nuestra empresa o juego? Escríbenos.</p>

    </div>

    <div class="contact-card">
      <h3>PRESS:</h3>
      <p>Aquí tenemos nuestro <a href="games">presskit</a>. Si queréis ver nuestro proceso</p>
    </div>

    <div class="contact-card">
      <h3>MERCH:</h3>
      <p>¡Otra forma de apoyarnos sería comprando nuestro merch! Con diseños originales de nuestro juego</p>
    </div>

  </div>
  <div style="width: 90%; height: 2px; background-color: #FFF ; margin-left: 70px;"></div>
  <!-- formulario -->
  <section style="position: relative;" class="contact-container">
    <form action="#" method="post">

      <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required>
      </div>

      <div class="form-group">
        <label for="correo">Correo electrónico</label>
        <input type="email" id="correo" name="correo" placeholder="tucorreo@ejemplo.com" required>
      </div>

      <div class="form-group">
        <label for="asunto">Asunto</label>
        <input type="text" id="asunto" name="asunto" placeholder="Motivo del mensaje" required>
      </div>

      <div class="form-group">
        <label for="mensaje">Mensaje</label>
        <textarea id="mensaje" name="mensaje" placeholder="Escribe tu mensaje aquí..." required></textarea>
      </div>

      <button type="submit">Enviar</button>

    </form>
  </section>
  <!--
<div style="width: 90%; height: 2px; background-color: #FFF ; margin-left: 70px;"></div>

<div class="contact-section">

    <div class="contact-card">
        <h3>SOCIAL</h3>
        <p>Síguenos en redes sociales</p>
    </div>

    <div class="contact-card">
        <h3>WORK</h3>
        <p>¿Quieres trabajar con nosotros?</p>
    </div>

</div>
-->
  <div style="width: 90%; height: 2px; background-color: #FFF ; margin-left: 70px;"></div>

  <div>
    <h2>FAQ</h2>

    <h3>¿Quiénes somos?</h3>
    <p>Somos un estudio de videojuegos y creación audiovisual que advoca por la cultura, el
      talento de jóvenes creadores y las historias que inspiran. Queremos crear oportunidades
      para los juniors en la industria y compartir ideas frescas y novedosas, centrándonos en los
      valores y la moral cristiana. </p>
    <br>

    <h3>¿Cuál es el juego que vais a lanzar?</h3>
    <p>Nuestro primer título es Afesis: Los cuatro peldaños, un juego indie original que combina
      elementos de aventura, exploración y narrativa para ofrecer una experiencia inmersiva y
      diferente. </p>
    <br>

    <h3>¿Cuándo estará disponible el juego?</h3>
    <p>Planeamos lanzar el juego a mediados de 2026. Publicaremos la fecha exacta en nuestras
      redes. </p>
    <br>

    <h3>¿En qué plataformas estará disponible?</h3>
    <p>Por ahora apuntamos a PC (Windows/Linux/macOS). Estamos evaluando llevarlo a
      consolas según la demanda y los recursos del estudio. </p>
    <br>

    <h3>¿Habrá demo?</h3>
    <p>Sí, estamos trabajando en una demo jugable para que puedas probar una parte del juego
      antes del lanzamiento. Avisaremos en cuanto esté disponible. </p>
    <br>

    <h3>¿En qué idiomas estará el juego? </h3>
    <p>Inicialmente estará disponible en español e inglés, con un primer parche de idioma
      planeado de cara a la traducción a ruso. Más adelante consideraremos añadir más idiomas
      si la comunidad lo solicita. </p>
    <br>

    <h3>¿Cómo puedo apoyar el proyecto? </h3>
    <p>¡Gracias! En la sección de <RouterLink to="/support">Support us</RouterLink> encontrarás formas de
      apoyarnos de forma monetaria, y por supuesto, puedes apoyarnos siguiéndonos en redes,
      compartiendo nuestro contenido, añadiendo el juego a tu lista de deseados y dejando
      comentarios o sugerencias.</p>
    <RouterLink to="/support" class="support-btn">Support us</RouterLink>
    <br>
    <!--
 <h3>¿Dónde puedo reportar errores o dar feedback?</h3>
  <p>Hemos habilitado un canal en nuestra comunidad (Discord) para recibir reportes y 
sugerencias.</p>
<br> -->
  </div>

  <div style="width: 90%; height: 2px; background-color: #FFF ; margin-left: 70px;"></div>

  <div class="banner-noche">
  </div>
</template>

<script setup>
import PageHeader from '../ui/PageHeader.vue';
import { RouterLink } from 'vue-router';
import { i18nState } from './../translation/state'

</script>
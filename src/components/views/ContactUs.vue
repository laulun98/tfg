<template>
  <PageHeader title="" />

  <h3 style="text-align: center;">{{ i18nState.textos.contactUs }}</h3>

  <div style="width: 90%; height: 2px; background-color: #FFF ; margin-left: 70px;"></div>

  <div class="contact-section">

    <div class="contact-card">
      <h3>{{ i18nState.textos.support }}</h3>
      <p>{{ i18nState.textos.supportText }}</p>

    </div>

    <div class="contact-card">
      <h3>{{ i18nState.textos.press }}</h3>
      <p>{{ i18nState.textos.pressText }} <a href="games">{{ i18nState.textos.presskitLink }}</a></p>
    </div>

    <div class="contact-card">
      <h3>{{ i18nState.textos.merch }}</h3>
      <p>{{ i18nState.textos.merchText }}</p>
    </div>

  </div>
  <div style="width: 90%; height: 2px; background-color: #FFF ; margin-left: 70px;"></div>
  <!-- formulario -->
  <section style="position: relative;" class="contact-container">
    <form action="/forms/ContactUsForm.php" method="post">

      <div class="form-group">
        <label for="nombre">{{ i18nState.textos.name }}</label>
        <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required>
      </div>

      <div class="form-group">
        <label for="correo">{{ i18nState.textos.email }}</label>
        <input type="email" id="correo" name="correo" placeholder="tucorreo@ejemplo.com" required>
      </div>

      <div class="form-group">
        <label for="asunto">{{ i18nState.textos.subject }}</label>
        <input type="text" id="asunto" name="asunto" placeholder="Motivo del mensaje" required>
      </div>

      <div class="form-group">
        <label for="mensaje">{{ i18nState.textos.message }}</label>
        <textarea id="mensaje" name="mensaje" placeholder="Escribe tu mensaje aquí..." required></textarea>
      </div>

      <button type="submit">{{ i18nState.textos.send }}</button>

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

    <h3>{{ i18nState.textos.who }}</h3>
    <p>{{ i18nState.textos.whoText }}</p>
    <br>

    <h3>{{ i18nState.textos.release }}</h3>
    <p>{{ i18nState.textos.releaseText }}</p>
    <br>

    <h3>{{ i18nState.textos.when }}</h3>
    <p>{{ i18nState.textos.whenText }}</p>
    <br>

    <h3>{{ i18nState.textos.platforms }}</h3>
    <p>{{ i18nState.textos.platformsText }}</p>
    <br>

    <h3>{{ i18nState.textos.demo }}</h3>
    <p>{{ i18nState.textos.demoText }}</p>
    <br>

    <h3>{{ i18nState.textos.langContact }}</h3>
    <p>{{ i18nState.textos.langContactText }}</p>
    <br>

    <h3>{{ i18nState.textos.supportProject }}</h3>
    <p>{{ i18nState.textos.supportProjectText }}</p>
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
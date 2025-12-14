<template>
    <PageHeader title="Contact Us"/>


<h3 style="text-align: center;">Aquí nos podéis contactar para cualquier cosa</h3>

<div style="width: 90%; height: 2px; background-color: #FFF ; margin-left: 70px;"></div>

    <div class="contact-section">

    <div class="contact-card">
        <h3>PRESS:</h3>
        <p>Our Press Kits for each game <a href="#">live here</a>. Reach out to us any time for interviews and the like!</p>
    </div>

    <div class="contact-card">
        <h3>SUPPORT:</h3>
        <p>Need help with your purchase or technical support on our games? Hit us up here.</p>
       
    </div>

    <div class="contact-card">
        <h3>MERCH:</h3>
        <p>Otra forma de apoyarnos sería comprando nuestro merch! Con diseños originales de nuestros juegos</p>
    </div>

</div>
<div style="width: 90%; height: 2px; background-color: #FFF ; margin-left: 70px;"></div>
  <!-- formulario -->
  <section class="contact-container">
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

<div style="width: 90%; height: 2px; background-color: #FFF ; margin-left: 70px;"></div>


</template>

<script setup>
import PageHeader from '../ui/PageHeader.vue';

</script>
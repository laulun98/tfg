<template>
    <PageHeader title="careers" />
<h1>Bienvenido a Careers</h1>´
<section style="position: relative;" class="careers-container">
    <form action="#" method="post">
        <h2>Información personal</h2>
      <div class="careers-group">
        <label for="nombre"></label>
        <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required>
      </div>

       <div class="careers-group">
        <label for="Primer apellido*"></label>
        <input type="text" id="apellido" name="apellido" placeholder="Primer apellido" required>
      </div>

      <div class="careers-group">
        <label for="Segundo apellido*"></label>
        <input type="text" id="apellidoDos" name="apellidoDos" placeholder="Segundo apellido" required>
      </div>

      <div class="careers-group">
        <label for="correo"></label>
        <input type="email" id="correo" name="correo" placeholder="tucorreo@ejemplo.com" required>
      </div>

      <div class="careers-group">
        <label for="Verifique su correo"></label>
        <input type="email" id="vericorreo" name="vericorreo" placeholder="tucorreo@ejemplo.com" required>
      </div>

      <div class="careers-group">
        <label for="Ciudad"></label>
        <input type="text" id="ciudad" name="ciudad" placeholder="Ciudad" required>
      </div>

      <div class="careers-group">
        <label for="Teléfono"></label>
        <textarea id="telefono" name="telefono" placeholder="Teléfono" required></textarea>
      </div>

      <h2>Experiencia</h2>

      <h2>Educación</h2>

      <h2>Redes Sociales</h2>
      <div class="careers-group">
        <label for="Linkedin"></label>
        <textarea id="linkedin" name="linkedin" placeholder="Escribe aquí..." ></textarea>
      </div>

      <div class="careers-group">
        <label for="X (aka Twitter)"></label>
        <textarea id="x" name="x" placeholder="Escribe aquí..." ></textarea>
      </div>

      <div class="careers-group">
        <label for="Página Web"></label>
        <textarea id="paginaWeb" name="paginaWeb" placeholder="Escribe aquí..." ></textarea>
      </div>

       <div class="careers-group">
        <label for="Instagram"></label>
        <textarea id="instagram" name="instagram" placeholder="Escribe aquí..." ></textarea>
      </div>

      <h2>Escribe un mensaje al equipo</h2>
      <p>¿Por qué te gustaría trabajar aquí?</p>
      <div class="careers-group">
        <label for="mensaje"></label>
        <textarea id="mensaje" name="mensaje" placeholder="Escribe tu mensaje aquí..." required></textarea>
      </div>
      
      <button type="submit"></button>

    </form>
  </section>

</template>

<script setup>
</script>
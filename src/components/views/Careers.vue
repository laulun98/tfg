<template>
    <PageHeader title="careers" />
<h1>Bienvenido a Careers</h1>´
<section style="position: relative;" class="contact-container">
    <form action="#" method="post">
        <h2>Información personal</h2>
      <div class="form-group">
        <label for="nombre">{{ i18nState.textos.name }}</label>
        <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required>
      </div>

       <div class="form-group">
        <label for="Primer apellido*">{{ i18nState.textos.name }}</label>
        <input type="text" id="apellido" name="apellido" placeholder="Primer apellido" required>
      </div>

      <div class="form-group">
        <label for="Segundo apellido*">{{ i18nState.textos.name }}</label>
        <input type="text" id="apellidoDos" name="apellidoDos" placeholder="Segundo apellido" required>
      </div>

      <div class="form-group">
        <label for="correo">{{ i18nState.textos.email }}</label>
        <input type="email" id="correo" name="correo" placeholder="tucorreo@ejemplo.com" required>
      </div>

      <div class="form-group">
        <label for="Verifique su correo">{{ i18nState.textos.email }}</label>
        <input type="email" id="vericorreo" name="vericorreo" placeholder="tucorreo@ejemplo.com" required>
      </div>

      <div class="form-group">
        <label for="Ciudad">{{ i18nState.textos.subject }}</label>
        <input type="text" id="ciudad" name="ciudad" placeholder="Ciudad" required>
      </div>

      <div class="form-group">
        <label for="Teléfono">{{ i18nState.textos.message }}</label>
        <textarea id="telefono" name="telefono" placeholder="Teléfono" required></textarea>
      </div>

      <h2>Experiencia</h2>

      <h2>Educación</h2>

      <h2>Redes Sociales</h2>
      <div class="form-group">
        <label for="Linkedin">{{ i18nState.textos.message }}</label>
        <textarea id="linkedin" name="linkedin" placeholder="Escribe aquí..." ></textarea>
      </div>

      <div class="form-group">
        <label for="X (aka Twitter)">{{ i18nState.textos.message }}</label>
        <textarea id="x" name="x" placeholder="Escribe aquí..." ></textarea>
      </div>

      <div class="form-group">
        <label for="Página Web">{{ i18nState.textos.message }}</label>
        <textarea id="paginaWeb" name="paginaWeb" placeholder="Escribe aquí..." ></textarea>
      </div>

       <div class="form-group">
        <label for="Instagram">{{ i18nState.textos.message }}</label>
        <textarea id="instagram" name="instagram" placeholder="Escribe aquí..." ></textarea>
      </div>

      <h2>Escribe un mensaje al equipo</h2>
      <p>¿Por qué te gustaría trabajar aquí?</p>
      <div class="form-group">
        <label for="mensaje">{{ i18nState.textos.message }}</label>
        <textarea id="mensaje" name="mensaje" placeholder="Escribe tu mensaje aquí..." required></textarea>
      </div>
      
      <button type="submit">{{ i18nState.textos.send }}</button>

    </form>
  </section>

</template>

<script setup>
</script>
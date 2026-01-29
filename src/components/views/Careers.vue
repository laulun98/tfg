<template>
    <PageHeader title="careers" />
<h1 style="text-align: center;">Bienvenido a Careers</h1>
<section style="position: relative; max-width:900px; margin:auto; padding:30px; border-radius:6px;" >
    <form action="#" method="post">
<div class="ea-container">
<div class="ea-upload">Choose a file or drop it here<br><small>10MB size limit</small></div>
<button class="ea-btn-primary">Enviar</button>
</div>


<h3>Información Personal</h3>
<div class="ea-grid-2">
<div>
<label>Nombre *</label>
<input type="text" />
</div>
<div>
<label>Apellidos *</label>
<input type="text" />
</div>
<div>
<label>Email *</label>
<input type="email" />
</div>
<div>
<label>Confirma tu email *</label>
<input type="email" />
</div>
<div>
<label>Ciudad *</label>
<input type="text" />
</div>
<div>
<label>Teléfono *</label>
<input type="tel" />
</div>
</div>


<h3>Experiencia <button class="ea-add-btn">+ Add</button></h3>
<h3>Educación <button class="ea-add-btn">+ Add</button></h3>


<h3>Tus perfiles RRSS</h3>
<div class="ea-grid-2">
<div>
<label>LinkedIn</label>
<input type="url" />
</div>
<div>
<label>Facebook</label>
<input type="url" />
</div>
<div>
<label>X (Twitter)</label>
<input type="url" />
</div>
<div>
<label>Website</label>
<input type="url" />
</div>
</div>


<h3>CV</h3>
<div class="ea-upload">Choose a file or drop it here<br><small>10MB size limit</small></div>


<h3>¿Algún comentario para el equipo?</h3>
<textarea placeholder="Déjanos saber por qué quieres unirte al equipo"></textarea>


<div class="ea-footer">
</div>

      
      <button type="submit">Enviar</button>

    </form>
  </section>

</template>

<script setup>
</script>
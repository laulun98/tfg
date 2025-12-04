<template>
    <PageHeader title="Home" :bannerStyle="'banner'"/>
    <div class="home-content">
        <h1>Aftos es un estudio madrileño de desarrollo de videojuegos. <br>Creando "Afesis"</h1>
        <P>Somos un estudio de videojuegos y creación audiovisual que advoca por la cultura, el talento de jóvenes creadores y las historias que inspiran. 
        <br><RouterLink to="/about" class="yellow-link">Leer más</RouterLink></P>
        <br>
        <RouterLink to="/games" class="yellow-link">Presskit de Afesis</RouterLink>
    </div>
</template>

<script setup>
import PageHeader from '../ui/PageHeader.vue';
</script>
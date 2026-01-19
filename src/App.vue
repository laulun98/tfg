<template>
  <div style="border: 2px">
    <MenuBar /> <!-- @prueba="traducirPagina" -->
  </div>
  <UIFooter/>
</template>

<script setup>
import MenuBar from './components/navbar/MenuBar.vue';
import UIFooter from './components/ui/UIFooter.vue';
import { useRoute } from 'vue-router';
import { i18nState } from '@/components/translation/state'

const route = useRoute();
/*
function traducirPagina(idioma) {
  const paginaActual = route.path
  traducir(paginaActual, idioma)
}
*/
</script>
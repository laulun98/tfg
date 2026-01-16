<template>
  <div style="border: 2px">
    <MenuBar :page="route.path"/>
  </div>
  <UIFooter/>
</template>

<script setup>
import { watch } from 'vue';
import MenuBar from './components/navbar/MenuBar.vue';
import UIFooter from './components/ui/UIFooter.vue';
import { useRoute } from 'vue-router';

const route = useRoute();

</script>
<template>
  <button @click="changeLanguages">
    {{ i18nState.idioma }}
  </button>
</template>

<script setup>
    import { i18nState } from '@/components/translation/state'

    function changeLanguages() {
    i18nState.idioma = i18nState.idioma === 'ES' ? 'EN' : 'ES'
    }
</script>
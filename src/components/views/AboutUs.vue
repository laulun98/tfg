<template>
    <PageHeader title="" />
    <div class="home-content">
        <h1>{{ i18nState.textos.titleAbout }}</h1>
        <h1>{{ i18nState.textos.afesisAbout }}</h1>
        <P>{{ i18nState.textos.descriptionAbout }}</P>
           
        <h1>{{ i18nState.textos.doing }}</h1>
        <p>{{ i18nState.textos.developing }}</p>

        <h1>{{ i18nState.textos.born }}</h1>
        <p>{{ i18nState.textos.aftos }}</p>

        
        <RouterLink to="/careers" class="yellow-link">¿Quieres unirte a nosotros?</RouterLink>
        
    </div>
    <div class="banner-noche">
    </div>
</template>

<script setup>
import PageHeader from '../ui/PageHeader.vue';
import { i18nState } from './../translation/state'
</script>
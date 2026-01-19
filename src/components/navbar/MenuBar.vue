<template>
    <div style="width: 100%; margin-bottom: 5px;">
        <nav style="display: flex; justify-content: center; gap: 5px; position:sticky; top:0;z-index: 1000;">
            <div style="margin:6px">
                <RouterLink to="/home"><img :src="'assets/imgs/logo-menu.png'" :alt="logo" style="height:30px; width:30px" /></RouterLink>
            </div>
            <div class="links">
                <RouterLink to="/home">Home</RouterLink>
            </div>
            <div class="links">
                <RouterLink to="/about">About Us</RouterLink>
            </div>
            <div class="links">
                <RouterLink to="/support">Support Us</RouterLink>
            </div>
            <div class="links">
                <RouterLink to="/games">Games</RouterLink>
            </div>
            <div class="links">
                <RouterLink to="/contact">Contact Us</RouterLink>
            </div>
            <div>
                <TranslationButton :page="page" @prueba="prueba"/>
            </div>
        </nav>
        <RouterView />
    </div>
</template>

<script setup>
import { RouterLink, RouterView } from 'vue-router'
import TranslationButton from '../translation/TranslationButton.vue';

const props = defineProps({
    page: {
        type: String,
        required: true
    }
})

function prueba(language){
    emit('languageChanged', language)
}

const emit = defineEmits(['languageChanged'])

</script>
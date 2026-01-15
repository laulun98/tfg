<template>
    <div>
        <button @click="changeLanguages">{{ lang }}</button>
    </div>
</template>

<script setup>
import { ref, watch } from 'vue';

const props = defineProps({
    language: {
        type: String,
        default: 'EN'
    },
    page: {
        type: String,
        required: true
    }
})

const lang = ref(props.language)
const emit = defineEmits(['pageTranslated', 'lang', 'prueba'])

function changeLanguages(){
    if(lang.value=='EN'){
        lang.value='ES'
        emit('prueba', lang.value+'.'+props.page)
    } else {
        lang.value='EN'
        emit('prueba', lang.value+'.'+props.page)
        //emit('pageTranslated', props.page)
        //emit('lang', 'EN')
    }
}

watch(() => props.language, (newVal) => {
    lang.value = newVal
})

/*
a ver que me estoy liando, esto sería desde el aquí, a la barra 
de navegación y de la barra de navegación a la página en la que se este
*/


</script>
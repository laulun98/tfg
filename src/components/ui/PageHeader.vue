<template>
    <div :class=bannerStyle>
        <h1> {{ title }}</h1>
    </div>
</template>

<script setup>

const props = defineProps({
    title: {
        type: String,
        default: ''
    }, 
    imgSrc: {
        type: String,
        default: 'assets/imgs/banner.jpeg'
    }, 
    bannerStyle: {
        type: String,
        default: 'secondary_banner' //puede ser banner (para el home) o secondary_banner (para el resto)
    }
})

</script>
<template>
    <div :class=bannerStyle>
        <h1 style="background-color: rgba(71, 52, 52, 0.4); padding:5px; border-radius: 80%; backdrop-filter: blur(1.5px);"> {{ title }}</h1>
    </div>
</template>

<script setup>

const props = defineProps({
    /*title: {
        type: String,
        default: ''
    }, */
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
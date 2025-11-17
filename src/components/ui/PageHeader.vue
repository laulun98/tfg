<template>
    <div class="secondary_banner">
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
    }
})

</script>
<template>
    <div :class=finalBannerClass></div>
</template>

<script setup>
import { computed } from 'vue';
const hour = new Date().getHours();
console.log(hour)

const props = defineProps({
    imgSrc: {
        type: String,
        default: 'assets/imgs/banner.png'
    }, 
    bannerStyle: {
        type: String,
        default: 'secondary_banner' //puede ser banner (para el home) o secondary_banner (para el resto)
    }
})

const finalBannerClass = computed(() => {
  if (hour >= 6 && hour < 18) {
    return props.bannerStyle
  } 
  return `${props.bannerStyle}_night`
})


</script>
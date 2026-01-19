<template>
  <div style="display: flex; justify-content: center">
    <Galleria :value="images.src" :numVisible="5" containerStyle="max-width: 640px" :showThumbnails="false"
    :showIndicators="true" :changeItemOnIndicatorHover="true">
    <template #item="slotProps">
      <img :src="slotProps.item.itemImageSrc" :alt="slotProps.item.alt" style="width: 50%; display: block" />
    </template>
  </Galleria>
  </div>
</template>

<script setup>
import Galleria from 'primevue/galleria';

defineProps({
  images: {
    type: Array,
    required: true
  }
});

</script>
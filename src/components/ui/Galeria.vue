<template>
    <div>
        <Galleria :value="images" :numVisible="5" containerStyle="max-width: 640px" :showThumbnails="false" :showIndicators="true">
            <template #item="{ item }">
                <img :src="item.itemImageSrc" :alt="item.alt" style="width: 100%; display: block;" />
            </template>
        </Galleria>
    </div>
</template>

<script setup>
import Galleria from 'primevue/galleria';

const props = defineProps({
    images: {
        type: Array,
        required: true
    }
});


</script>
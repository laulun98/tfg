<template>
  <div>
    <Galleria
      v-model:visible="display"
      :value="images"
      :responsiveOptions="responsiveOptions"
      :numVisible="5"
      :showThumbnails="true"
      :showIndicators="true"
      :showItemNavigators="true"
      :fullScreen="true"
      :circular="true"
    >
      <template #item="{ item }">
        <img
          :src="item.itemImageSrc"
          :alt="item.alt"
          style="width: 100%; display: block;"
        />
      </template>

      <template #thumbnail="{ item }">
        <img
          :src="item.itemImageSrc"
          :alt="item.alt"
          style="width: 100%; display: block;"
        />
      </template>
    </Galleria>

    <!-- Imagen trigger -->
    <img
      :src="images[0].itemImageSrc"
      class="preview"
      @click="display = true"
    />
  </div>
</template>

<script setup>
import { ref } from 'vue';
import Galleria from 'primevue/galleria';

defineProps({
  images: {
    type: Array,
    required: true
  }
});

const display = ref(false);

const responsiveOptions = [
  { breakpoint: '1024px', numVisible: 5 },
  { breakpoint: '768px', numVisible: 3 },
  { breakpoint: '560px', numVisible: 1 }
];
</script>

<style scoped>
.preview {
  width: 300px;
  cursor: pointer;
}
</style>




<!--
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
-->
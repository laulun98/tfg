<template>
    <div class="donate">
        <a :href="link" target="_blank" rel="noopener noreferrer">
            <img :src="src" :alt="alt" />
        </a>
    </div>
</template>

<script setup>
const props = defineProps({
    src: {
        type: String,
        default: ''
    },
    alt: {
        type: String,
        default: ''
    },
    link: {
        type: String,
        required: false,
        default: '#'
    }
});
</script>
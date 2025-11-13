<template>
    <div>
        <nav style="display: flex; gap: 5px;">
            <div style="border: 1px solid black; margin: 5px; padding: 20px">
                <RouterLink to="/about">About Us</RouterLink>
            </div>
            <div style="border: 1px solid black; margin: 5px; padding: 20px">
                <RouterLink to="/support">Support Us</RouterLink>
            </div>
        </nav>
        <RouterView />
    </div>
</template>

<script setup>
import { RouterLink, RouterView } from 'vue-router'

</script>
<template>
    <div>
        <div style="width: 100%;">
            <nav style="display: flex; justify-content: center; gap: 5px;">
                <div class="links">
                    <RouterLink to="/home">Home</RouterLink>
                </div>
                <div class="links">
                    <RouterLink to="/about">About Us</RouterLink>
                </div>
                <div class="links">
                    <RouterLink to="/support">Support Us</RouterLink>
                </div>
                <div class="links">
                    <RouterLink to="/games">Games</RouterLink>
                </div>
                <div class="links">
                    <RouterLink to="/contact">Contact Us</RouterLink>
                </div>
            </nav>
            <RouterView />
        </div>
    </div>
</template>

<script setup>
import { RouterLink, RouterView } from 'vue-router'

</script>
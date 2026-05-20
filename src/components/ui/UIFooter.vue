<template>
    <div class="ui-footer" style="display:flex; flex-direction: column;">
        <div style="display:flex;  justify-content: center;">
            <div><SocialButton/></div>
        </div>
        <div>
            <div style="display: flex; flex-direction: row; justify-content: space-between;">
                <div style="display: flex; flex-direction: row; gap:1rem;">
                    <div><RouterLink to="/home" class="yellow-link">Home</RouterLink></div>
                    <div><RouterLink to="/about" class="yellow-link">About Us</RouterLink></div>
                    <div><RouterLink to="/games" class="yellow-link">Games</RouterLink></div>
                    <div><RouterLink to="/contact" class="yellow-link">Contact Us</RouterLink></div>
                </div>
                <div style="display: flex; flex-direction: row; gap:1rem;">
                    <RouterLink to="/privacy" class="yellow-link">Política de Privacidad</RouterLink>
                    <RouterLink to="/legal" class="yellow-link">Aviso legal</RouterLink>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import SocialButton from './SocialButton.vue';
</script>
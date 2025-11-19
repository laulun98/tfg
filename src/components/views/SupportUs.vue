<template>
    <PageHeader title="'Support Us'" />
    <div style="margin-bottom: 80px; display: flex; justify-content: center;">
        <div>
            <div style="display: flex; flex-direction: column;">
                <h2>¡Ayúdanos a seguir creando juegos!</h2>
                <p>¡Tu apoyo es fundamental para que estudios indie como el nuestro sigan creando experiencias
                    increíbles!<br>
                    Si quieres contribuir, puedes hacerlo por aquí:</p>
            </div>
            <div class="donate-container">
                <LinkedImage :src="'assets/imgs/paypal.png'" :link="'https://www.paypal.com/es/home'" :alt="'paypal'" />
                <LinkedImage :src="'assets/imgs/mastercard.png'" :link="'https://www.mastercard.com/es/es.html'" :alt="'mastercard'" />
                <LinkedImage :src="'assets/imgs/kickstarter.png'" :link="'https://www.kickstarter.com/'" :alt="'kickstarter'" />
            </div>
        </div>
    </div>
    <div style="margin-bottom: 50px; display: flex; justify-content: center;">
        <div>
            <h2>¡Pre-guarda nuestro juego en Steam!</h2>
            <div class="donate-container">
                <LinkedImage :src="'assets/imgs/steam.png'" :link="'https://store.steampowered.com/?l=spanish'" :alt="'steam'" />
        </div>
        </div>
    </div>
</template>

<script setup>
import LinkedImage from './../ui/LinkedImage.vue';
import PageHeader from '../ui/PageHeader.vue';
</script>
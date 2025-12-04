<template>
    <PageHeader title="'Support Us'" />
    <div style="margin-bottom: 80px; display: flex; justify-content: center;">
        <div style="display: flex; flex-direction: column;">
            <h1>¡Ayúdanos a seguir creando juegos!</h1>
            <p>¡Tu apoyo es fundamental para que estudios indie como el nuestro sigan creando experiencias
                increíbles!<br>
                Si quieres contribuir, puedes hacerlo por aquí:</p>
        </div>
    </div>
    <div style="display:flex; flex-direction: row; justify-content: center;">
        <div >
            <img src="/assets/imgs/dimas-presenta-1.png" alt="Dimas" style="max-width: 85%; max-height: 85%;"/>
        </div>
        <div>
            <div class="donate-container">
            <LinkedImage :src="'assets/imgs/paypal.png'" :link="'https://www.paypal.com/es/home'" :alt="'paypal'" />
            <LinkedImage :src="'assets/imgs/mastercard.png'" :link="'https://www.mastercard.com/es/es.html'"
                :alt="'mastercard'" />
            <LinkedImage :src="'assets/imgs/kickstarter.png'" :link="'https://www.kickstarter.com/'"
                :alt="'kickstarter'" />
        </div>
        <div style="margin-top: 80px; display: flex; flex-direction: column; align-items: center;">
            <h2>¡Pre-guarda nuestro juego en Steam!</h2>
            <div class="donate-container">
                <LinkedImage :src="'assets/imgs/steam.png'" :link="'https://store.steampowered.com/?l=spanish'"
                    :alt="'steam'" />
            </div>
        </div>
        </div>
    </div>
    <div style="display: flex; justify-self: center; margin-top: 80px; margin-bottom: 80px;">
        <div style="border:1px solid black; width:600px; height:90px; border-radius: 20px; background-color: #FBD856;">
            <h1 style="display:flex; justify-self: center;color:rgba(18, 41, 75, 1)">Merchandising coming soon!</h1>
        </div>
    </div>
</template>

<script setup>
import LinkedImage from './../ui/LinkedImage.vue';
import PageHeader from '../ui/PageHeader.vue';
</script>
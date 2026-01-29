<template>
    <PageHeader title="" />
    <div style="margin-bottom: 40px; display: flex; justify-content: center;">
        <div style="display: flex; flex-direction: column;">
            <h1>{{ i18nState.textos.help }}</h1>
            <p>{{ i18nState.textos.descriptionSupport }}</p>
        </div>
    </div>
    <div style="display:flex; flex-direction: column; justify-content: center; margin-bottom: 100px;">
        <div style="display:flex; flex-direction: column; justify-content: center;">
            <h1>{{ i18nState.textos.kick }}</h1>
            <h3>{{ i18nState.textos.kickstarter }}</h3>
        </div>
        <div style="display:flex; justify-content: center">
            <LinkedImage :src="'assets/imgs/kickstarter.png'" :link="'https://www.kickstarter.com/'" :alt="'kickstarter'" />
        </div>
        <div class="kickstarter"> <img class="kickstarter" src="/assets/imgs/Web_KickStarter_Portada.png"></div>
    </div>
    <!--
    <div style="display:flex; flex-direction: row; justify-content: center; margin-right: 150px; margin-left: 120px">
        <div>
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
    -->
    <div style="display: flex; justify-self: center; margin-top: 40px; margin-bottom: 80px;">
        <div style="background-color: #FBD856; width:650px; height:90px; border-radius: 20px; display:flex; justify-content: center;">
            <h1 style="display:flex; width:600px; color:rgba(18, 41, 75, 1);">Merchandising coming soon!</h1>
        </div>
    </div>

     <div class="banner-noche">
    </div>
    
</template>

<script setup>
import LinkedImage from './../ui/LinkedImage.vue';
import PageHeader from '../ui/PageHeader.vue';
import { i18nState } from './../translation/state'

</script>
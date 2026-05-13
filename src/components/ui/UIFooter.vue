<template>
    <div class="ui-footer" style="display:flex; flex-direction: column;">
        <div style="display:flex;  justify-content: center;">
            <div style="display:flex; flex-direction: column;">
                <RouterLink to="/home" style="display: flex; justify-content: center;"><img :src="'assets/imgs/IMAGOTIPO.png'" :alt="logo" style="height:100px; width:200px"/></RouterLink>
                <div><SocialButton/></div>
                <!--
                <p> © Aftos Studios todos los derechos reservados | <RouterLink to="/privacy">Política de Privacidad</RouterLink> | <RouterLink to="/legal">Aviso legal</RouterLink></p>
                -->
            </div>
        </div>
        <div>
            <!-- 
            <div class="footer">
                <div class="footer-column">
                    <ul>
                        <li><RouterLink to="/home">Home</RouterLink></li>
                        <li><RouterLink to="/about">About Us</RouterLink></li>
                        <li><RouterLink to="/games">Games</RouterLink></li>
                        <li><RouterLink to="/contact">Contact Us</RouterLink></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <ul>
                        <li><RouterLink to="/privacy">Política de Privacidad</RouterLink></li>
                        <li><RouterLink to="/legal">Aviso legal</RouterLink></li>
                    </ul>
                </div>
            </div>
            -->
            <div style="display: flex; flex-direction: row; justify-content: space-between;">
                <div style="display: flex; flex-direction: row; gap:1rem;">
                    <div><RouterLink to="/home">Home</RouterLink></div>
                    <div><RouterLink to="/about">About Us</RouterLink></div>
                    <div><RouterLink to="/games">Games</RouterLink></div>
                    <div><RouterLink to="/contact">Contact Us</RouterLink></div>
                </div>
                <div style="display: flex; flex-direction: row; gap:1rem;">
                    <RouterLink to="/privacy">Política de Privacidad</RouterLink>
                    <RouterLink to="/legal">Aviso legal</RouterLink>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import SocialButton from './SocialButton.vue';
</script>
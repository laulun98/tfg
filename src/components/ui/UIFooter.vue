<template>
    <div class="ui-footer" style="display:flex; flex-direction: column;">
        <div style="display:flex;  justify-content: center;">
            <div style="display:flex; flex-direction: column;">
                <RouterLink to="/home" style="display: flex; justify-content: center;"><img :src="'assets/imgs/IMAGOTIPO.png'" :alt="logo" style="height:100px; width:200px"/></RouterLink>
               <div><SocialButton/></div>
                <p> © Aftos Studios todos los derechos reservados | <RouterLink to="/privacy">Política de Privacidad</RouterLink></p>
            </div>
        </div>
        <div>
            <div style="display: flex; justify-content: center; gap:100px">
            <div>
                <h2>Empresa</h2>
                <ul>
                    <li><RouterLink to="/home">Home</RouterLink></li>
                    <li><RouterLink to="/about">About Us</RouterLink></li>
                    <li><RouterLink to="/games">Games</RouterLink></li>
                </ul>
            </div>
            <div>
                <h2>Juegos</h2>
                <ul>
                    <li><RouterLink to="/afesios">Afésis</RouterLink></li>
                    <li><RouterLink to="/afesios">Presskit</RouterLink></li>
                </ul>
            </div>
            <div>
                <h2>Support</h2>
                <ul>
                    <li><RouterLink to="/support">Support Us</RouterLink></li>
                    <li><RouterLink to="/contact">Contact Us</RouterLink></li>
                    <li><RouterLink to="/privacy">Política de Privacidad</RouterLink></li>
                </ul>
            </div>
        </div>
        </div>
    </div>
</template>

<script setup>
import SocialButton from './SocialButton.vue';
</script>
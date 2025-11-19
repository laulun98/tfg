<template>
    <div class="ui-footer">
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
            <h2>Support</h2>
            <ul>
                <li><RouterLink to="/support">Support Us</RouterLink></li>
                <li><RouterLink to="/contact">Contact Us</RouterLink></li>
                <li>Política de privacidad</li>
            </ul>
        </div>
        </div>
    </div>
</template>

<script setup>
</script>
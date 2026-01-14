import { createApp } from 'vue'
import './style.css'
import App from './App.vue'
import router from './router'
import { PrimeVue } from '@primevue/core'

import Lara from '@primevue/themes/lara';

const app = createApp(App)
app.use(router)
app.use(PrimeVue, {
  theme: {
    preset: Lara
  }
});
app.mount('#app')

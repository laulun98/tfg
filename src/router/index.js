import { createRouter, createWebHistory } from 'vue-router'

import AboutUs from '../components/views/AboutUs.vue'
import SupportUs from '../components/views/SupportUs.vue'

const routes = [
  {
    path: '/about',
    name: 'about',
    component: AboutUs,
  },
  {
    path: '/support',
    name: 'support',
    component: SupportUs,
  }
]

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes,
})

export default router

import { createRouter, createWebHistory } from 'vue-router'

import AboutUs from '../components/views/AboutUs.vue'
import SupportUs from '../components/views/SupportUs.vue'
import Games from '../components/views/Games.vue'
import Home from '../components/views/Home.vue'
import ContactUs from '../components/views/ContactUs.vue'

const routes = [
  {
    path: '/home',
    name: '/home',
    component: Home,
  },
  {
    path: '/about',
    name: 'about',
    component: AboutUs,
  },
  {
    path: '/support',
    name: 'support',
    component: SupportUs,
  }, 
  {
    path: '/games',
    name: '/games',
    component: Games,
  }, 
  {
    path: '/contact',
    name: '/contact',
    component: ContactUs,
  }, 
]

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes,
})

export default router

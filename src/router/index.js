import { createRouter, createWebHistory } from 'vue-router'
import { i18nState } from '@/components/translation/state'

import AboutUs from '../components/views/AboutUs.vue'
import SupportUs from '../components/views/SupportUs.vue'
import Games from '../components/views/Games.vue'
import Home from '../components/views/Home.vue'
import ContactUs from '../components/views/ContactUs.vue'
import Privacy from '../components/views/Privacy.vue'
import Afesios from '../components/views/games_views/Afesis.vue'
import Careers from '../components/views/Careers.vue'

const routes = [
  { 
    path: '/', 
    redirect: '/home' },
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
  {
    path: '/privacy',
    name: '/privacy',
    component: Privacy,
  },
  {
    path: '/afesios',
    name: '/afesios',
    component: Afesios,
  },
  {
    path: '/careers',
    name: '/careers',
    component: Careers,
  },
]

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes,
})

router.afterEach((to) => {
  i18nState.pagina = to.path
})

export default router

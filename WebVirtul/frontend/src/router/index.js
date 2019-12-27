import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'home',
    component: Home
  },
  {
    path: '/about',
    name: 'about',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/About.vue')
  },
  {
    path: '/news',
    name: '/name',
    component: () => import('../views/News.vue')
  },
  {
    path: '/new/id',
    name: 'article',
    component: () => import('../views/Article.vue')
  },
  {
    path: '/cart',
    name: 'cart',
    component: () => import('../views/Cart.vue')
  },
  {
    path: '/buy',
    name: 'buy',
    component: () => import('../views/Buy.vue')
  },
  {
    path: '/deadknight',
    name: '/deadknight',
    component: () => import('../views/DeadKnight.vue')
  },
  {
    path: '/youtube',
    name: '/youtube',
    component: () => import('../views/YouTube.vue')
  },
  {
    path: '/instagram',
    name: '/instagram',
    component: () => import('../views/Instagram.vue')
  },
  {
    path: '/fotoprocessing',
    name: '/fotoprocessing',
    component: () => import('../views/FotoProcessing.vue')
  },
  {
    path: '/audioprocessing',
    name: '/audioprocessing',
    component: () => import('../views/AudioProcessing.vue')
  },
  {
    path: '/videoediting',
    name: '/videoediting',
    component: () => import('../views/VideoEditing.vue')
  }
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router

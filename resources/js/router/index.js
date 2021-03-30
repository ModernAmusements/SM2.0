import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../components/Home.vue'
import Type from '../components/Type.vue'
import Meditation from '../components/Meditation.vue'
import Sound from '../components/Sound.vue'




Vue.use(VueRouter)

const routes = [

  {
   path: '/startsilentmoon',
   name: 'home',
   component: Home
  },

  {
  path: '/type',
  name: 'type',
  component: Type
  },

  {
   path: '/meditation',
   name: 'meditation',
   component: Meditation
  },

  {
  path: '/sound',
  name: 'sound',
  component: Sound
  },
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router

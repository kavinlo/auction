import Vue from 'vue'
import Router from 'vue-router'
import Index from './views/Index.vue'

Vue.use(Router)

export default new Router({
  mode: 'history',
  base: process.env.BASE_URL,
  routes: [
    {
      path: '/',
      name: 'Index',
      component: Index,
      children:[
        {
          path: '',
          name: 'index',
          component: () => import('./views/index/index.vue')
        },
        {
          path: '/collection',
          name: 'collection',
          component: () => import('./views/index/collection.vue')
        },
      ]
    },

  ]
})

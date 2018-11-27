import Vue from 'vue'
import Router from 'vue-router'
import Index from './Index.vue'

Vue.use(Router)
require('@/assets/js/jquery.js')
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
                  path:'',
                  name:'index',
                  component:()=>import('./index/index.vue')
              },
              {
                  path:'/collection',
                  name:'collection',
                  component:()=>import('./index/collection.vue')
              },
              {
                  path:'/person',
                  name:'person',
                  component:()=>import('./index/person.vue')
              },
              {
                  path:'/activity',
                  name:'activity',
                  component:()=>import('./index/activity.vue')
              },
              {
                  path:'/news',
                  name:'news',
                  component:()=>import('./index/news.vue')
              },
              {
                  path:'/auctionList',
                  name:'auctionList',
                  component:()=>import('./index/auctionList.vue')
              },
              {
                  path:'/special',
                  name:'special',
                  component:()=>import('./index/special.vue')
              },
          ]
      }]
})


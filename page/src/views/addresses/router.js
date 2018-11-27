import Vue from 'vue'
import Router from 'vue-router'
import Addresses from './addresses.vue'
import addAddre from './addAddre.vue'

Vue.use(Router)
export default new Router({
    mode: 'history',
    base: process.env.BASE_URL,
    routes: [
        {
            path: '/',
            name: 'Addresses',
            component: Addresses,
        },
        {
            path: '/addAddre',
            name: 'addAddre',
            component: addAddre,
        },
    ]
})


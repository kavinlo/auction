import Vue from 'vue'
import Router from 'vue-router'
import Regist from './regist.vue'

Vue.use(Router)
export default new Router({
    mode: 'history',
    base: process.env.BASE_URL,
    routes: [
        {
            path: '/',
            name: 'Regist',
            component: Regist,
        }]
})


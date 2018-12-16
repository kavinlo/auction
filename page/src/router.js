import Vue from 'vue'
import Router from 'vue-router'
import nav from '@/views/nav/nav.vue'

Vue.use(Router)

export default new Router({
    mode: 'history',
    base: process.env.BASE_URL,
    routes: [
        {
            path: '/',
            name: 'nav',
            component: nav,
            children: [
                {
                    path: '',
                    name: 'nav/main',
                    component: () => import('@/views/nav/index.vue'),   // 首页底部导航栏
                },
                {
                    path: '/nav/collect',
                    name: 'nav/collect',
                    component: () => import('@/views/nav/collect.vue'), //首页栏目下收藏
                },
                {
                    path: '/nav/person',
                    name: 'nav/person',
                    component: () => import('@/views/nav/person.vue'),  //首页栏目下个人中心
                },
                {
                    path: '/nav/auction_list',
                    name: 'nav/auction_list',
                    component: () => import('@/views/nav/auction_list.vue'),  // 首页底部导航栏下拍品列表
                },
                {
                    path: '/nav/auction',
                    name: 'nav/auction',
                    component: () => import('@/views/nav/auction.vue'),  // 首页底部导航栏下拍品列表
                }
            ]
        },
        {
            path: '/order_head',
            name: 'order_head',
            component: () => import('@/views/myorder/order_head.vue'),  //订单顶部栏
            children:[
                {
                    path: '',
                    name: 'order_head/myorders',
                    component: () => import('@/views/myorder/myorders.vue'),    //我的订单
                },
                {
                    path: '/order_head/no_pay',
                    name: 'order_head/no_pay',
                    component: () => import('@/views/myorder/no_pay.vue'),  //我的订单栏目下未付款订单
                },
                {
                    path: '/order_head/no_send',
                    name: 'order_head/no_send',
                    component: () => import('@/views/myorder/no_send.vue'), //我的订单栏目下未发货订单
                },
                {
                    path: '/order_head/no_get',
                    name: 'order_head/no_get',
                    component: () => import('@/views/myorder/no_get.vue'),  //我的订单栏目下未收货订单
                },
                {
                    path: '/order_head/no_comment',
                    name: 'order_head/no_comment',
                    component: () => import('@/views/myorder/no_comment.vue'),  //我的订单栏目下未评价订单
                },
            ]
        },
        {
            path: '/auction_rule',
            name: 'auction_rule',
            component: () => import('@/views/auction_rule/auction_rule.vue'),  //拍卖规则
        },
        {
            path: '/no_address',
            name: 'no_address',
            component: () => import('@/views/address/no_address.vue'),  //未没有地址
        },
        {
            path: '/add_address',
            name: 'add_address',
            component: () => import('@/views/address/add_address.vue'),  //添加地址
        },
        {
            path: '/address',
            name: 'address',
            component: () => import('@/views/address/address.vue'),  //地址列表
        },
        {
            path: '/login',
            name: 'login',
            component: () => import('@/views/user/login.vue'),  //地址列表
        },
        {
            path: '/regist',
            name: 'regist',
            component: () => import('@/views/user/regist.vue'),  //地址列表
        },
    ]
})

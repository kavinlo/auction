import Vue from 'vue'
import router from './router'
import Index from './Index.vue'
import store from './store'

Vue.config.productionTip = false

// 导航 守卫 判断是否需要登录
router.beforeEach((to , from , next)=>{
    if( to.meta.Check_Access_Token ){
        var token = sessionStorage.getItem('ACCESS_TOKEN')
        if( token ){
            next()
        }else{
            window.location = '/login.html'
        }
    }else{
        next()
    }
})

new Vue({
    router,
    store,
    render: h => h(Index)
}).$mount('#app')


import Vue from 'vue'
import router from './router'
import Login from './login.vue'

Vue.config.productionTip = false
new Vue({
    router,
    render: h => h(Login)
}).$mount('#login')


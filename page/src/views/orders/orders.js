import Vue from 'vue'
import router from './router'
import Orders from './Orders.vue'
import store from './store'

Vue.config.productionTip = false
new Vue({
    router,
    store,
    render: h => h(Orders)
}).$mount('#order')


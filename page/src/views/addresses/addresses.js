import Vue from 'vue'
import router from './router'
import Addresses from './addresses.vue'
import store from './store'

Vue.config.productionTip = false
new Vue({
    router,
    store,
    render: h => h(Addresses)
}).$mount('#address')


import Vue from 'vue'
import router from './router'
import Index from './Index.vue'
import store from './store'

Vue.config.productionTip = false
new Vue({
    router,
    store,
    render: h => h(Index)
}).$mount('#app')


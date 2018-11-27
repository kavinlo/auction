import Vue from 'vue'
import router from './router'
import addAddre from './addAddre.vue'
import store from './store'

Vue.config.productionTip = false
new Vue({
    router,
    store,
    render: h => h(addAddre)
}).$mount('#addAddre')


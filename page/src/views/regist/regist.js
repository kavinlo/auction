import Vue from 'vue'
import router from './router'
import Regist from './regist.vue'

Vue.config.productionTip = false
new Vue({
    router,
    render: h => h(Regist)
}).$mount('#regist')


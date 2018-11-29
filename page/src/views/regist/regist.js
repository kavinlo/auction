import Vue from 'vue'
import router from './router'
import Regist from './regist.vue'

// import axios
import axios from 'axios'
import VueAxios from 'vue-axios'
Vue.use(VueAxios , axios)
// axios 设置基础域名
    Vue.axios.defaults.baseURL="http://localhost:9999/api"

// import we-vue
import WeVue from 'we-vue'
import 'we-vue/lib/style.css'
Vue.use(WeVue)
Vue.config.productionTip = false
new Vue({
    router,
    render: h => h(Regist)
}).$mount('#regist')


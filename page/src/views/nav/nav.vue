<template>
    <div>
        <router-view></router-view>
        <footer>
            <div>
                <router-link to="/">
                    <img v-if="this.$route.name == 'nav/main'" src="@/assets/images/home.png" alt="">
                    <img v-else src="@/assets/images/home2.png" alt="">
                    <span v-bind:class="{now:this.$route.name == 'nav/main'}">首页</span>
                </router-link>
            </div>

            <div>
                <router-link to="/nav/collect">
                    <img v-if="this.$route.name == 'nav/collect'" src="@/assets/images/collection2.png" alt="">
                    <img v-else src="@/assets/images/collection.png" alt="">
                    <span v-bind:class="{now:this.$route.name == 'nav/collect'}">收藏</span>
                </router-link>
            </div>

            <div>
                <router-link to="/nav/person">
                    <img v-if="this.$route.name == 'nav/person'" src="@/assets/images/personal2.png" alt="">
                    <img v-else src="@/assets/images/personal.png" alt="">
                    <span v-bind:class="{now:this.$route.name == 'nav/person'}">个人中心</span>
                </router-link>
            </div>
        </footer>
    </div>
</template>
<script>

    import {Flex, FlexItem} from 'we-vue'
    import Vue from 'vue'

    Vue.use(Flex).use(FlexItem)
    export default {}

</script>
<style scoped>
    @import "../../assets/css/style.css";

    footer {
        display: inline-flex;
    }
</style>
<template>
    <div>
        <router-view></router-view>
        <footer>
            <div>
                <router-link to="/">
                    <img v-if="this.$route.name == 'index'" src="@/assets/images/home.png" alt="">
                    <img v-else src="../../assets/images/home2.png" alt="">
                    <span :class="{now:this.$route.name == 'index'}">首页</span>
                </router-link>
            </div>
            <div>
                <router-link to="/collection">
                    <img v-if="this.$route.name == 'collection'" src="@/assets/images/collection2.png" alt="">
                    <img v-else src="../../assets/images/collection.png" alt="">

                    <span :class="{now:this.$route.name == 'collection'}">收藏</span>
                </router-link>
            </div>
            <div>
                <router-link to="/person">
                    <img v-if="this.$route.name == 'person'" src="@/assets/images/personal2.png" alt="">
                    <img v-else src="../../assets/images/personal.png" alt="">
                    <span :class="{now:this.$route.name == 'person'}">个人中心</span>
                </router-link>
            </div>
        </footer>
    </div>
</template>
<style>
    @import url('../../assets/css/swiper-3.3.1.min.css');
    @import url('../../assets/css/style.css');
</style>


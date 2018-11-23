<template>
    <div>
        <router-view></router-view>
        <footer>
            <div><router-link to="/"><img src="../assets/images/home.png" alt=""><span class="now">首页</span></router-link></div>
            <div><router-link to="/collection"><img src="../assets/images/collection.png" alt=""> <span>收藏</span></router-link></div>
            <div><router-link to="/collection"><img src="../assets/images/personal.png" alt=""> <span>个人中心</span></router-link></div>
        </footer>
    </div>
</template>
<style>
    @import url('../assets/css/swiper-3.3.1.min.css');
    @import url('../assets/css/style.css');
</style>


<template>
    <div class="special_all">
        <a class="banner">
            <img src="@/assets/images/3.jpg" alt="">
        </a>
        <div class="br">
            <div class="left"></div>
            <div class="middle">昌化石专场</div>
            <div class='right'></div>
        </div>
        <div class="main">
            <router-link to="/nav/auction" href="special.html" class="wrap">
                <img src="@/assets/images/4.jpg" alt="">
                <div>昌化玻璃白冻 瑞兽钮正章</div>
                <p>开拍时间: 2016/8/2 19:30:00</p>
                <p>结束时间: 2016/7/14 22:00:00</p>
                <p>拍卖状态: <span>竞拍中 围观291 出价21</span></p>
                <p>最高价:<span>￥12600</span></p>
            </router-link>

            <router-link to="/nav/auction" class="wrap">
                <img src="@/assets/images/4.jpg" alt="">
                <div>昌化玻璃白冻 瑞兽钮正章</div>
                <p>开拍时间: 2016/8/2 19:30:00</p>
                <p>结束时间: 2016/7/14 22:00:00</p>
                <p>拍卖状态: <span>竞拍中 围观291 出价21</span></p>
                <p>最高价:<span>￥12600</span></p>
            </router-link>

            <router-link to="/nav/auction" class="wrap">
                <img src="@/assets/images/4.jpg" alt="">
                <div>昌化玻璃白冻 瑞兽钮正章</div>
                <p>开拍时间: 2016/8/2 19:30:00</p>
                <p>结束时间: 2016/7/14 22:00:00</p>
                <p>拍卖状态: <span>竞拍中 围观291 出价21</span></p>
                <p>最高价:<span>￥12600</span></p>
            </router-link>

            <router-link to="/nav/auction" class="wrap">
                <img src="@/assets/images/4.jpg" alt="">
                <div>昌化玻璃白冻 瑞兽钮正章</div>
                <p>开拍时间: 2016/8/2 19:30:00</p>
                <p>结束时间: 2016/7/14 22:00:00</p>
                <p>拍卖状态: <span>竞拍中 围观291 出价21</span></p>
                <p>最高价:<span>￥12600</span></p>
            </router-link>

        </div>

        <!-- 焦点图2 -->
        <div class="bottomwrap">
            <p>今日推荐</p>
            <div class="swiper-container2">
                <wv-swipe :height='204' :autoplay="4000">
                    <wv-swipe-item >
                        <img src="@/assets/images/1.jpg" alt="">
                    </wv-swipe-item>
                    <wv-swipe-item >
                        <img src="@/assets/images/1.jpg" alt="">
                    </wv-swipe-item>
                    <wv-swipe-item >
                        <img src="@/assets/images/1.jpg" alt="">
                    </wv-swipe-item>
                </wv-swipe>
            </div>
        </div>
    </div>
</template>
<style scoped="scoped">
    @import '../../assets/css/mui.min.css';
    @import '../../assets/css/style.css';
    .special_all .swiper-container2 {
        margin-bottom: 0;
        background: #fff;
        height: 12.5rem;
    }
</style>
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
            <router-link to="/special" class="wrap">
                <img src="@/assets/images/4.jpg" alt="">
                <div>昌化玻璃白冻 瑞兽钮正章</div>
                <p>开拍时间: 2016/8/2 19:30:00</p>
                <p>结束时间: 2016/7/14 22:00:00</p>
                <p>拍卖状态: <span>竞拍中 围观291 出价21</span></p>
                <p>最高价:<span>￥12600</span></p>
            </router-link>

            <router-link to="/special" class="wrap">
                <img src="@/assets/images/4.jpg" alt="">
                <div>昌化玻璃白冻 瑞兽钮正章</div>
                <p>开拍时间: 2016/8/2 19:30:00</p>
                <p>结束时间: 2016/7/14 22:00:00</p>
                <p>拍卖状态: <span>竞拍中 围观291 出价21</span></p>
                <p>最高价:<span>￥12600</span></p>
            </router-link>

            <router-link to="/special" class="wrap">
                <img src="@/assets/images/4.jpg" alt="">
                <div>昌化玻璃白冻 瑞兽钮正章</div>
                <p>开拍时间: 2016/8/2 19:30:00</p>
                <p>结束时间: 2016/7/14 22:00:00</p>
                <p>拍卖状态: <span>竞拍中 围观291 出价21</span></p>
                <p>最高价:<span>￥12600</span></p>
            </router-link>

            <router-link to="/special" class="wrap">
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
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="" class="wrap">
                            <img src="@/assets/images/1.jpg" alt="">
                            <p>日安艺拍下期预告</p>
                            <p>当前价 ￥0</p>
                        </a>
                        <a href="" class="wrap">
                            <img src="@/assets/images/1.jpg" alt="">
                            <p>日安艺拍下期预告</p>
                            <p>当前价 ￥0</p>
                        </a>
                        <a href="" class="wrap">
                            <img src="@/assets/images/1.jpg" alt="">
                            <p>日安艺拍下期预告</p>
                            <p>当前价 ￥0</p>
                        </a>
                        <a href="" class="wrap">
                            <img src="@/assets/images/1.jpg" alt="">
                            <p>日安艺拍下期预告</p>
                            <p>当前价 ￥0</p>
                        </a>
                        <a href="" class="wrap">
                            <img src="@/assets/images/1.jpg" alt="">
                            <p>日安艺拍下期预告</p>
                            <p>当前价 ￥0</p>
                        </a>
                        <a href="" class="wrap">
                            <img src="@/assets/images/1.jpg" alt="">
                            <p>日安艺拍下期预告</p>
                            <p>当前价 ￥0</p>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="" class="wrap">
                            <img src="@/assets/images/1.jpg" alt="">
                            <p>日安艺拍下期预告</p>
                            <p>当前价 ￥0</p>
                        </a>
                        <a href="" class="wrap">
                            <img src="@/assets/images/1.jpg" alt="">
                            <p>日安艺拍下期预告</p>
                            <p>当前价 ￥0</p>
                        </a>
                        <a href="" class="wrap">
                            <img src="@/assets/images/1.jpg" alt="">
                            <p>日安艺拍下期预告</p>
                            <p>当前价 ￥0</p>
                        </a>
                        <a href="" class="wrap">
                            <img src="@/assets/images/1.jpg" alt="">
                            <p>日安艺拍下期预告</p>
                            <p>当前价 ￥0</p>
                        </a>
                        <a href="" class="wrap">
                            <img src="@/assets/images/1.jpg" alt="">
                            <p>日安艺拍下期预告</p>
                            <p>当前价 ￥0</p>
                        </a>
                        <a href="" class="wrap">
                            <img src="@/assets/images/1.jpg" alt="">
                            <p>日安艺拍下期预告</p>
                            <p>当前价 ￥0</p>
                        </a>
                    </div>

                </div>
                <!--  焦点图按钮 -->
                <div class="pagination2">
                    <div class=" swiper-pagination  swiper-visible-switch"></div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Swiper from 'swiper'

    export default {
        mounted() {
            new Swiper('.swiper-container', {
                loop: true,
                autoplay :true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable:true,
                },
            })
        }
    }
</script>

<style scoped>

    .bottomwrap {
        height: auto;
        margin-bottom: 20%;
    }

    .pagination2 {
        position: relative;
        bottom: -2px;
        width: 100%;
        height: 20px;;
        display: inline-block;
        left: 50%;
    }

    .swiper-pagination-bullet {
        margin-left: 5px;

    }

</style>
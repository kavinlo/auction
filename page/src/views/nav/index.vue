<template>
    <div id="index">
        <!-- 焦点图 -->
        <div class="focu">
            <wv-swipe :height="250" :autoplay="4000">
                <wv-swipe-item>
                    <router-link to="/nav/auction_list">
                        <img src="@/assets/images/1.jpg" alt="">
                    </router-link>
                </wv-swipe-item>
                <wv-swipe-item>
                    <router-link to="/nav/auction_list">
                        <img src="@/assets/images/1.jpg" alt="">
                    </router-link>
                </wv-swipe-item>
                <wv-swipe-item>
                    <router-link to="/nav/auction_list">
                        <img src="@/assets/images/1.jpg" alt="">
                    </router-link>
                </wv-swipe-item>
            </wv-swipe>
        </div>

        <!-- 导航 -->
        <nav class="flex">

            <div class="nav1">
                <a href="">
                    <div class="nav1_img"><img src="@/assets/images/nav1.png" alt=""></div>
                    <p>专场拍卖</p>
                </a>
            </div>

            <div class="nav3">
                <a href="activity.html">
                    <div class="nav3_img"><img src="@/assets/images/nav3.png" alt=""></div>
                    <p>拍卖场</p>
                </a>
            </div>

        </nav>
        <!-- 内容 -->
        <!-- 1 -->
        <a href="special_all.html" class="single">
            <div class="left">
                <img src="@/assets/images/2.jpg" alt="">
            </div>
            <div class="right">
                <h1>昌化石专场</h1>
                <p>开拍时间:<span>2016/7/2 19:30</span></p>
                <p>结束时间:<span>2016/7/14 22:00</span></p>
                <div class="end_wrap wrap">
                    <div><p>竞拍结束</p></div>
                    <div><p>围观 4045</p></div>
                    <div><p>出价 98</p></div>
                </div>
            </div>
        </a>
        <!-- 2 -->
        <a href="special_all.html" class="single">
            <div class="right">
                <h1>古今可用专场</h1>
                <p>开拍时间:<span>2016/7/9 9:00</span></p>
                <p>结束时间:<span>2016/7/30 19:30</span></p>
                <div class="end_wrap wrap">
                    <div><p>竞拍结束</p></div>
                    <div><p>围观 13024</p></div>
                    <div><p>出价 98</p></div>
                </div>
            </div>
            <div class="left">
                <img src="@/assets/images/3.jpg" alt="">
            </div>
        </a>
        <!-- 3 -->
        <a href="special_all.html" class="single">
            <div class="left">
                <img src="@/assets/images/4.jpg" alt="">
            </div>
            <div class="right">
                <h1>书画专场</h1>
                <p>开拍时间:<span>2016/7/28 19:30</span></p>
                <p>结束时间:<span>2016/8/14 22:00</span></p>
                <div class="begin_wrap wrap">
                    <div><p>竞拍开始</p></div>
                    <div><p>围观 41</p></div>
                    <div><p>出价 98</p></div>
                </div>
            </div>
        </a>
        <!-- 4 -->
        <a href="special_all.html" class="single">
            <div class="right">
                <h1>印石专场</h1>
                <p>开拍时间:<span>2016/7/26 19:30</span></p>
                <p>结束时间:<span>2016/8/14 22:00</span></p>
                <div class="end_wrap wrap">
                    <div><p>竞拍结束</p></div>
                    <div><p>围观 4045</p></div>
                    <div><p>出价 98</p></div>
                </div>
            </div>
            <div class="left">
                <img src="@/assets/images/5.jpg" alt="">
            </div>
        </a>
        <!-- 5 -->
        <a href="special_all.html" class="single">
            <div class="left">
                <img src="@/assets/images/6.jpg" alt="">
            </div>
            <div class="right">
                <h1>海外回流文玩品专场</h1>
                <p>开拍时间:<span>2016/7/24 19:30</span></p>
                <p>结束时间:<span>2016/8/14 22:00</span></p>
                <div class="begin_wrap wrap">
                    <div><p>竞拍开始</p></div>
                    <div><p>围观 41</p></div>
                    <div><p>出价 98</p></div>
                </div>
            </div>
        </a>
        <!-- 6 -->
        <a href="special_all.html" class="single">
            <div class="right">
                <h1>当代书画专场</h1>
                <p>开拍时间:<span>2016/7/2 19:30</span></p>
                <p>结束时间:<span>2016/7/14 22:00</span></p>
                <div class="end_wrap wrap">
                    <div><p>竞拍结束</p></div>
                    <div><p>围观 4045</p></div>
                    <div><p>出价 98</p></div>
                </div>
            </div>
            <div class="left">
                <img src="@/assets/images/7.jpg" alt="">
            </div>
        </a>
        <!-- 7 -->
        <a href="special_all.html" class="single">
            <div class="left">
                <img src="@/assets/images/8.jpg" alt="">
            </div>
            <div class="right">

                <h1>吴山在线玉雕专场</h1>
                <p>开拍时间:<span>2016/7/24 19:30</span></p>
                <p>结束时间:<span>2016/8/14 22:00</span></p>
                <div class="end_wrap wrap">
                    <div><p>竞拍开始</p></div>
                    <div><p>围观 41</p></div>
                    <div><p>出价 98</p></div>
                </div>

            </div>
        </a>
        <!-- 8 -->
        <a href="special_all.html" class="single">
            <div class="right">
                <h1>当代寿山石雕刻大师精品专场</h1>
                <p>开拍时间:<span>2016/7/2 19:30</span></p>
                <p>结束时间:<span>2016/7/14 22:00</span></p>
                <div class="begin_wrap wrap">
                    <div><p>竞拍结束</p></div>
                    <div><p>围观 4045</p></div>
                    <div><p>出价 98</p></div>
                </div>
            </div>
            <div class="left">
                <img src="@/assets/images/9.jpg" alt="">
            </div>
        </a>
        <!-- 9 -->
        <a href="special_all.html" class="single">
            <div class="left">
                <img src="@/assets/images/10.jpg" alt="">
            </div>
            <div class="right">
                <h1>中青年实力派艺师紫砂专场</h1>
                <p>开拍时间:<span>2016/7/2 19:30</span></p>
                <p>结束时间:<span>2016/7/14 22:00</span></p>
                <div class="begin_wrap wrap">
                    <div><p>竞拍开始</p></div>
                    <div><p>围观 6311</p></div>
                    <div><p>出价 98</p></div>
                </div>
            </div>
        </a>
        <!-- 10 -->
        <a href="special_all.html" class="single">
            <div class="right">
                <h1>珠宝专场</h1>
                <p>开拍时间:<span>2016/7/2 19:30</span></p>
                <p>结束时间:<span>2016/7/14 22:00</span></p>
                <div class="begin_wrap wrap">
                    <div><p>竞拍结束</p></div>
                    <div><p>围观 4045</p></div>
                    <div><p>出价 98</p></div>
                </div>
            </div>
            <div class="left">
                <img src="@/assets/images/11.jpg" alt="">
            </div>
        </a>



    </div>
</template>
<script>

    import {Swipe, SwipeItem} from 'we-vue'
    import Vue from 'vue'
    Vue.use(Swipe).use(SwipeItem)
    export default {}
</script>
<style scoped="scoped">
    @import "../../assets/css/style.css";
    .focu img {
        width: 100%;
        height: 100%;
    }



    #text1, #text2 {
        height: 28px;
        width: 98%;
        outline: none;
        border: 1px solid #ccc;
        font-size: 16px;
        text-indent: 10px;
    }
    .wv-swipe-item img {
        width: 100%;
    }
</style>
<template>
    <div class="special">
        <div class="swiper-container1">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="@/assets/images/2.jpg" alt=""></div>
                <div class="swiper-slide"><img src="@/assets/images/3.jpg" alt=""></div>
                <div class="swiper-slide"><img src="@/assets/images/4.jpg" alt=""></div>
            </div>
            <!--  焦点图按钮 -->
            <div class="pagination1">
                <span class="swiper-pagination1"></span>
                <span class=" swiper-pagination1 swiper-active-switch"></span>
            </div>
        </div>
        <!--  键盘按钮 -->
        <header>
            <div class="wrap">
                <h1>朱天曙《题吕欢呼桃花成扇》<span>包邮</span></h1>
                <!--<span><i class="icon icon-shoucang"></i>280</span>-->
                <!--<span><i class="icon icon-icon7"></i>280</span>-->
            </div>
        </header>

        <!-- 拍卖按钮区域 -->
        <div class="up">
            <div class="wrap">
                <p>参与时间:2016/7/9 9:00</p>
                <p>结束时间:2016/7/9 9:00</p>
                <p>当前出价:￥14700</p>
                <p>参与人数:26</p>
            </div>
        </div>
        <div class="up1">
            <div class="wrap">
                <button type="button" id="btn">开始拍卖</button>
                <span><i>起</i>￥1000元</span>
                <span><i>加</i>￥300元</span>
                <span><i>保</i>￥0元</span>
                <span><i>延</i>5分钟</span>
            </div>
        </div>
        <!-- 介绍区域 -->
        <div class="middle">
            <div class="wrap">

                <p class="text1">商品简介:</p>
                <div class="p1">
                    <p class="text2">
                        <span>作者：朱天曙</span>
                        <span>作品类型:专场拍卖</span>
                        <span>创作时间:2016年</span>
                    </p>

                    <p class="text3">
                        <span>作品尺寸:1.9cm*1.9cm*5.7cm</span>
                        <span>作品材质:昌化玻璃白冻</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="middle2">
            <div class="wrap">
                <p class="text1">详情介绍:</p>
                <p class="text2">
                    玻璃白冻,微透明,玻璃地,凝结成冻,有黑针,石质色彩柔和,有种水乳交融之美,冻地佳,刀感好,雕兽钮。边缘润滑,形象饱满精致,而颇具古韵,无格裂,偶尔保养。玻
                </p>
            </div>
        </div>
        <!-- 评论区域 -->
        <div class="bottom">
            <div class="mui-content">
                <div>
                    <div id="segmentedControl" class="mui-segmented-control">
                        <a @click="history($event)" data-cont="item1" class="mui-control-item mui-active" href="javascript:;">
                            出价历史
                        </a>
                        <a @click="history($event)" data-cont="item2" class="mui-control-item" href="javascript:;">
                            评价
                        </a>

                    </div>
                </div>
                <div>

                    <div id="item1" class="mui-control-content mui-active">
                        <ul class="mui-table-view">

                            <li class="mui-table-view-cell">
                                <div class="history">
                                    <img src="@/assets/images/1.jpg" alt="">
                                    <div class="p">
                                        <p><span class="left">莫言</span><span class="right">领先</span></p>
                                        <p><span class="left">￥14700元</span><span
                                                class="right">2016/07/23 21:59:52</span></p>
                                    </div>
                                </div>
                            </li>

                            <li class="mui-table-view-cell">
                                <div class="history">
                                    <img src="@/assets/images/1.jpg" alt="">
                                    <div class="p">
                                        <p><span class="left">莫言</span><span class="right">领先</span></p>
                                        <p><span class="left">￥14700元</span><span
                                                class="right">2016/07/23 21:59:52</span></p>
                                    </div>
                                </div>
                            </li>

                            <li class="mui-table-view-cell">
                                <div class="history">
                                    <img src="@/assets/images/1.jpg" alt="">
                                    <div class="p">
                                        <p><span class="left">莫言</span><span class="right">领先</span></p>
                                        <p><span class="left">￥14700元</span><span
                                                class="right">2016/07/23 21:59:52</span></p>
                                    </div>
                                </div>
                            </li>

                            <li class="mui-table-view-cell">
                                <div class="history">
                                    <img src="@/assets/images/1.jpg" alt="">
                                    <div class="p">
                                        <p><span class="left">莫言</span><span class="right">领先</span></p>
                                        <p><span class="left">￥14700元</span><span
                                                class="right">2016/07/23 21:59:52</span></p>
                                    </div>
                                </div>
                            </li>

                            <li class="mui-table-view-cell">
                                <div class="history">
                                    <img src="@/assets/images/1.jpg" alt="">
                                    <div class="p">
                                        <p><span class="left">莫言</span><span class="right">领先</span></p>
                                        <p><span class="left">￥14700元</span><span
                                                class="right">2016/07/23 21:59:52</span></p>
                                    </div>
                                </div>
                            </li>

                        </ul>


                    </div>

                    <div id="item2" class="mui-control-content">
                        <ul class="mui-table-view">

                            <li class="mui-table-view-cell">
                                <div class="history">
                                    <img src="@/assets/images/1.jpg" alt="">
                                    <div class="p">
                                        <p><span class="left">莫言</span><span class="right">2016/07/23 21:59:52</span>
                                        </p>
                                        <p>卖家服务态度很好，货很有艺术感，值得收藏与玩弄，大师级的作品就是不一样的,作哈哈品非常值得大家。</p>
                                    </div>
                                </div>
                            </li>

                            <li class="mui-table-view-cell">
                                <div class="history">
                                    <img src="@/assets/images/1.jpg" alt="">
                                    <div class="p">
                                        <p><span class="left">莫言</span><span class="right">2016/07/23 21:59:52</span>
                                        </p>
                                        <p>卖家服务态度很好，货很有艺术感，值得收藏与玩弄，大师级的作品就是不一样的,作哈哈品非常值得大家。</p>
                                    </div>
                                </div>
                            </li>

                            <li class="mui-table-view-cell">
                                <div class="history">
                                    <img src="@/assets/images/1.jpg" alt="">
                                    <div class="p">
                                        <p><span class="left">莫言</span><span class="right">2016/07/23 21:59:52</span>
                                        </p>
                                        <p>卖家服务态度很好，货很有艺术感，值得收藏与玩弄，大师级的作品就是不一样的,作哈哈品非常值得大家。</p>
                                    </div>
                                </div>
                            </li>

                            <div class="getnew">
                                <p>刷新</p>
                                <div>
                                    <input type="text">
                                    <span>发送</span>
                                </div>
                            </div>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <!-- 焦点图2 -->
        <div class="bottomwrap">
            <p>今日推荐</p>
            <div class="swiper-container2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="wrap">
                            <img src="@/assets/images/1.jpg" alt="">
                            <p>日安艺拍下期预告</p>
                            <p>当前价 ￥0</p>
                        </div>
                        <div class="wrap">
                            <img src="@/assets/images/1.jpg" alt="">
                            <p>日安艺拍下期预告</p>
                            <p>当前价 ￥0</p>
                        </div>
                        <div class="wrap">
                            <img src="@/assets/images/1.jpg" alt="">
                            <p>日安艺拍下期预告</p>
                            <p>当前价 ￥0</p>
                        </div>
                        <div class="wrap">
                            <img src="@/assets/images/1.jpg" alt="">
                            <p>日安艺拍下期预告</p>
                            <p>当前价 ￥0</p>
                        </div>
                        <div class="wrap">
                            <img src="@/assets/images/1.jpg" alt="">
                            <p>日安艺拍下期预告</p>
                            <p>当前价 ￥0</p>
                        </div>
                        <div class="wrap">
                            <img src="@/assets/images/1.jpg" alt="">
                            <p>日安艺拍下期预告</p>
                            <p>当前价 ￥0</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="wrap">
                            <img src="@/assets/images/1.jpg" alt="">
                            <p>日安艺拍下期预告</p>
                            <p>当前价 ￥0</p>
                        </div>
                        <div class="wrap">
                            <img src="@/assets/images/1.jpg" alt="">
                            <p>日安艺拍下期预告</p>
                            <p>当前价 ￥0</p>
                        </div>
                        <div class="wrap">
                            <img src="@/assets/images/1.jpg" alt="">
                            <p>日安艺拍下期预告</p>
                            <p>当前价 ￥0</p>
                        </div>
                        <div class="wrap">
                            <img src="@/assets/images/1.jpg" alt="">
                            <p>日安艺拍下期预告</p>
                            <p>当前价 ￥0</p>
                        </div>
                        <div class="wrap">
                            <img src="@/assets/images/1.jpg" alt="">
                            <p>日安艺拍下期预告</p>
                            <p>当前价 ￥0</p>
                        </div>
                        <div class="wrap">
                            <img src="@/assets/images/1.jpg" alt="">
                            <p>日安艺拍下期预告</p>
                            <p>当前价 ￥0</p>
                        </div>
                    </div>

                </div>
                <!--  焦点图按钮 -->
                <div class="pagination2">
                    <span class="swiper-pagination2"></span>
                    <span class=" swiper-pagination2 swiper-active-switch"></span>
                </div>
            </div>
        </div>


        <!-- 虚拟键盘 -->
        <div id="auth_keybord7724" class="auth_keybord">
            <div id="auth_keybord_exit" class="auth_keybord_exit">关闭</div>
            <div id="auth_keybord_menu" class="auth_keybord_menu">请输入你的手机号码，方便卖家与你联系</div>

            <div class="wrap">
                <!-- 输入价格 -->
                <div class="mui-numbox auth_pro_con" data-numbox-step='200' data-numbox-min='200'
                     data-numbox-max='10000' style="width: 100%;height: 40px;" id="myinpt">
                    <ul>
                        <button class="mui-btn mui-btn-numbox-minus" type="button">-</button>
                        <li><input class="mui-input-numbox numkeyboard" type="number" id="numkeyboard1"
                                   readonly="readonly" style="width: 100%;height: 40px;"/></li>
                        <button class="mui-btn mui-btn-numbox-plus" type="button">+</button>
                    </ul>
                </div>
                <!-- 手机号短信验证 -->
                <div class="next">
                    <input type="text" placeholder="请输入手机号码" class="test1 numkeyboard" readonly id="phone">

                    <input type="text" placeholder="请输入验证码" class="test2 numkeyboard" readonly>
                    <input type='button' id="send" value='发送'>
                </div>
                <button id="next">下一步</button>
                <button id="sure">确定</button>
            </div>
            <!-- 键盘数字 -->
            <ul class="number_list" id="number_list">
                <li>
                    <button type="button">7</button>
                </li>
                <li>
                    <button type="button">8</button>
                </li>
                <li>
                    <button type="button">9</button>
                </li>
                <li>
                    <button type="button">4</button>
                </li>
                <li>
                    <button type="button">5</button>
                </li>
                <li>
                    <button type="button">6</button>
                </li>
                <li>
                    <button type="button">1</button>
                </li>
                <li>
                    <button type="button">2</button>
                </li>
                <li>
                    <button type="button">3</button>
                </li>
                <li>
                    <button type="button">0</button>
                </li>
                <li>
                    <button type="submit">清除</button>
                </li>
                <li>
                    <button type="submit">退格</button>
                </li>
            </ul>
        </div>

    </div>
</template>
<script>
    import Swiper from 'swiper'
    export default {
        mounted() {
            new Swiper('.swiper-container1', {
                loop: true,
                autoplay :true,
                pagination: {
                    el: '.swiper-pagination1',
                    clickable:true,
                },
            });
            new Swiper('.swiper-container2', {
                loop: true,
                autoplay :true,
                pagination: {
                    el: '.swiper-pagination2',
                    clickable:true,
                },
            });
        },
        methods:{
            history (event){
                // 点击 dom 元素
                var dom = event.currentTarget
                // 选中 元素
                var prev = document.querySelector('.mui-active')
                var cont = prev.dataset.cont
                // 隐藏 移除 非选中 class
                document.querySelector('#'+cont).style.display = 'none'
                prev.classList.remove('mui-active')

                // 为点击元素添加 class 显示
                dom.classList.add('mui-active')
                var cont = dom.dataset.cont
                document.querySelector('#'+cont).style.display = 'block'
            }
        }
    }
</script>
<style scoped>
    @import url('../../../assets/css/style.css');
    p {
        color: #8f8f94;
    }
    .swiper-active-switch {
        opacity:0;
    }
    .mui-table-view-cell {
        position: relative;
        overflow: hidden;
        padding: 11px 15px;
    }
    .swiper-container1 > .swiper-pagination-bullet {
        background-color: red;
        margin: 5px 5px;
        display: inline-block;
    }
    .special .mui-content .mui-segmented-control {
        border: none;
        border-bottom: 1px solid rgba(0,0,0,0.1);
        background: #fff;
        font-size: 15px;
        font-weight: 400;
        position: relative;
        display: table;
        overflow: hidden;
        width: 100%;
        table-layout: fixed;
    }
    .mui-segmented-control {
        font-size: 15px;
        font-weight: 400;
        position: relative;
        display: table;
        overflow: hidden;
        width: 100%;
        table-layout: fixed;
        border-radius: 3px;
    }
    .special .mui-content .mui-segmented-control .mui-active {
        color: #f8b551;
        border: none;
        border-top: 1px solid #f8b551;
        border-left: 1px solid rgba(0,0,0,0.1);
        border-right: 1px solid rgba(0,0,0,0.1);
        background: url('../../../assets/images/history.png') no-repeat top center;
        background-size: 0.255rem 0.225rem;
    }
    .mui-segmented-control {
        font-size: 15px;
        font-weight: 400;
        position: relative;
        display: table;
        overflow: hidden;
        width: 100%;
        table-layout: fixed;
        border: 1px solid #007aff;
        border-radius: 3px;
        background-color: transparent;
    }

    .mui-segmented-control .mui-control-item {
        line-height: 38px;
        display: table-cell;
        overflow: hidden;
        width: 1%;
        transition: background-color .1s linear;
        text-align: center;
        white-space: nowrap;
        text-overflow: ellipsis;
    }

    /*评价*/
    .mui-control-content.mui-active {
        display: block;
    }
    .mui-control-content {
        position: relative;
        display: none;
    }
    .mui-active {
        display: inline-block;
    }
    .mui-table-view {
        position: relative;
        margin-top: 0;
        margin-bottom: 0;
        padding-left: 0;
        list-style: none;
        background-color: #fff;
    }
    .mui-table-view:before {
        position: absolute;
        right: 0;
        left: 0;
        height: 1px;
        content: '';
        -webkit-transform: scaleY(.5);
        transform: scaleY(.5);
        background-color: #c8c7cc;
        top: -1px;
    }
    .mui-table-view-cell {
        position: relative;
        overflow: hidden;
        padding: 11px 15px;
    }
    li {
        vertical-align: bottom;
    }
    .special .getnew input {
        height: 1.5rem;
        border-radius: 0.3rem;
        font-size: 17px;
        width: 100%;
        margin-bottom: 15px;
        padding: 5px 65px 5px 15px;
        border: 1px solid rgba(0,0,0,.2);
        background-color: #fff;
        box-sizing: border-box;
    }
    .special .getnew span {
        display: block;
        width: 2.5rem;
        height: 1rem;
        background: #f8b551;
        color: #fff;
        text-align: center;
        border-radius: 0.2rem;
        position: absolute;
        right: 0.5rem;
        top: 2.25rem;
    }
</style>
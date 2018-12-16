<template>
    <div class="special">
        <!-- 焦点图1 -->
        <div class="swiper-container1">

            <wv-swipe :height="250" :autoplay="4000">
                <wv-swipe-item>
                    <img src="@/assets/images/2.jpg" alt="" style="width: 100%;height: 100%;">
                </wv-swipe-item>
                <wv-swipe-item>
                    <img src="@/assets/images/3.jpg" alt="" style="width: 100%;height: 100%;">
                </wv-swipe-item>
                <wv-swipe-item>
                    <img src="@/assets/images/4.jpg" alt="" style="width: 100%;height: 100%;">
                </wv-swipe-item>
            </wv-swipe>

        </div>
        <!--  键盘按钮 -->
        <header>
            <div class="wrap">
                <h1>朱天曙《题吕欢呼桃花成扇》<span>包邮</span></h1>
                <span><i class="iconfont">&#xe62b;</i>280</span>
                <span><i class="iconfont">&#xe6f5;</i>280</span>
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
                <button type="button" id="btn" @click="numkeyboard">开始拍卖</button>
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
                        <a class="mui-control-item mui-active" @click="commentHistory($event)" data-area="#item1">
                            出价历史
                        </a>
                        <a class="mui-control-item" @click="commentHistory($event)" data-area="#item2">
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
                    <wv-swipe :height="200" :autoplay="4000">
                        <wv-swipe-item><img src="@/assets/images/8.jpg" alt=""></wv-swipe-item>
                        <wv-swipe-item><img src="@/assets/images/9.jpg" alt=""></wv-swipe-item>
                        <wv-swipe-item><img src="@/assets/images/6.jpg" alt=""></wv-swipe-item>
                    </wv-swipe>
                </div>
            </div>
        </div>

        <!-- 虚拟键盘 -->
        <div id="auth_keybord7724" class="auth_keybord">
            <div id="auth_keybord_exit" class="auth_keybord_exit" @click="removekeyboard()">关闭</div>
            <div id="auth_keybord_menu" class="auth_keybord_menu">请输入你的手机号码，方便卖家与你联系</div>

            <div class="wrap">
                <!-- 输入价格 -->
                <div class="mui-numbox auth_pro_con" data-numbox-step='200' data-numbox-min='200'
                     data-numbox-max='10000' style="width: 100%;height: 40px;" id="myinpt">
                    <ul>
                        <button class="mui-btn mui-btn-numbox-minus" type="button" @click="reduce()">-</button>
                        <li><input class="mui-input-numbox numkeyboard" type="number" id="numkeyboard1"
                                   readonly="readonly" v-model="this.low" style="width: 100%;height: 40px;"/></li>
                        <button class="mui-btn mui-btn-numbox-plus" type="button" @click="plus()">+</button>
                    </ul>
                </div>
                <!-- 手机号短信验证 -->
                <div class="next">
                    <input type="text" placeholder="请输入手机号码" readonly class="test1 numkeyboard"
                           @click="inputPhone($event)" v-model="this.phone" id="phone">

                    <input type="text" placeholder="请输入验证码" readonly class="test2 numkeyboard"
                           @click="inputValidate($event)" v-model="this.valid" id="valid">
                    <input type='button' id="send" @click="sendalidate()" value='发送'>
                </div>
                <button id="next" @click="nextTo()">下一步</button>
                <button id="sure">确定</button>
            </div>
            <!-- 键盘数字 -->
            <ul class="number_list" id="number_list">
                <li>
                    <button type="button" @click="keywords(7)">7</button>
                </li>
                <li>
                    <button type="button" @click="keywords(8)">8</button>
                </li>
                <li>
                    <button type="button" @click="keywords(9)">9</button>
                </li>
                <li>
                    <button type="button" @click="keywords(4)">4</button>
                </li>
                <li>
                    <button type="button" @click="keywords(5)">5</button>
                </li>
                <li>
                    <button type="button" @click="keywords(6)">6</button>
                </li>
                <li>
                    <button type="button" @click="keywords(1)">1</button>
                </li>
                <li>
                    <button type="button" @click="keywords(2)">2</button>
                </li>
                <li>
                    <button type="button" @click="keywords(3)">3</button>
                </li>
                <li>
                    <button type="button" @click="keywords(0)">0</button>
                </li>
                <li>
                    <button type="submit" @click="removeKey()">清除</button>
                </li>
                <li>
                    <button type="submit" @click="sendalidate()">确定</button>
                </li>
            </ul>
        </div>


    </div>
</template>
<script>
    import {Swipe, SwipeItem} from 'we-vue'
    import Vue from 'vue'
    import {TopTips} from 'we-vue'

    Vue.use(Swipe).use(SwipeItem)
    export default {
        data() {
            return {
                isFirst: 0,     // 标记是否第一次输入
                inputType: '',  // 输入类型 电话/验证码
                phone: '',      //  手机号码
                valid: '',      // valid
                range: 20,     //  加价幅度
                low: 200,       // 加价
            }
        },
        methods: {
            numkeyboard: function () {
                document.querySelector('.auth_keybord').classList.add('block')  // 为开始拍卖按钮添加 block 属性
            },
            removekeyboard: function () {
                this.isFirst = 0    // 关闭键盘 标记为 0
                document.querySelector('.auth_keybord').classList.remove('block')  // 为关闭按钮删除 block 属性
            },
            inputPhone: function (o) {
                o.currentTarget.placeholder = ''    // 点击 清除输入框 placeholder
                this.inputType = 'phone'    //  赋值输入类型
            },
            inputValidate: function (o) {
                o.currentTarget.placeholder = ''    // 点击 清除输入框 placeholder
                this.inputType = 'valid'     //  赋值输入类型
            },
            keywords: function (num) { // 数字键
                if (this.inputType === 'phone') {
                    if (this.isFirst === 0 && num === 0) {  // 判断数字首位是否为 0
                        return;
                    }
                    this.isFirst++
                    // append 手机号(phone)
                    this.phone += num.toString()
                } else if (this.inputType === 'valid') {
                    // append 验证码(valid)
                    this.valid += num
                }
            },
            removeKey: function () {   // 清除末位号码   / valid
                if (this.inputType === 'phone') {
                    this.phone = this.phone.substr(0, this.phone.length - 1)   // this.phone 删除一位输数
                } else if (this.inputType === 'valid') {
                    this.valid = this.valid.substr(0, this.valid.length - 1)   // this.phone 删除一位输数
                }
            },
            sendalidate: function () { //发送验证码 按钮
                TopTips({
                    message: '发送成功',
                    duration: 2000
                })
            },
            nextTo: function () { // 下一步按钮 -- 跳转到 价格区间
                // 电话 验证码 输入框 隐藏
                document.querySelector('.next').classList.add('none')
                // 价格区间显示
                document.querySelector('.auth_pro_con').classList.add('block')
                // auth_keybord_menu    改变其提示语
                document.querySelector('#auth_keybord_menu').innerHTML = '当前最高价为 ￥ 1400'
                // 下一步 => 确定
                document.querySelector('#next').innerHTML = '确定 '
            },
            reduce: function () {  // 加价
                this.low -= this.range
            },
            plus: function () {    // 减价
                this.low += this.range
            },
            commentHistory: function (o) { //mui-active
                var active = document.querySelectorAll('.mui-active')   // 获取已选中元素
                for (var i = 0; i < active.length; i++) { // 循环移除 mui-active
                    active[i].classList.remove('mui-active')
                }
                o.currentTarget.classList.add('mui-active')
                var item = o.currentTarget.dataset.area //item
                document.querySelector(item).classList.add('mui-active')    // 相对应的item 显示

            }
        }
    }

</script>
<style scoped="scoped">
    @import '../../assets/css/mui.min.css';
    @import '../../assets/css/style.css';

    .iconfont {
        font-family: "iconfont" !important;
        font-size: 14px;
        font-style: normal;
        -webkit-font-smoothing: antialiased;
        -webkit-text-stroke-width: 0.2px;
        -moz-osx-font-smoothing: grayscale;
    }

    @font-face {
        font-family: 'iconfont';  /* project id 965421 */
        src: url('//at.alicdn.com/t/font_965421_xq37aaibgx.eot');
        src: url('//at.alicdn.com/t/font_965421_xq37aaibgx.eot?#iefix') format('embedded-opentype'),
        url('//at.alicdn.com/t/font_965421_xq37aaibgx.woff') format('woff'),
        url('//at.alicdn.com/t/font_965421_xq37aaibgx.ttf') format('truetype'),
        url('//at.alicdn.com/t/font_965421_xq37aaibgx.svg#iconfont') format('svg');
    }

    @font-face {
        font-family: 'iconfont';  /* project id 965423 */
        src: url('//at.alicdn.com/t/font_965423_mycvw06qkx.eot');
        src: url('//at.alicdn.com/t/font_965423_mycvw06qkx.eot?#iefix') format('embedded-opentype'),
        url('//at.alicdn.com/t/font_965423_mycvw06qkx.woff') format('woff'),
        url('//at.alicdn.com/t/font_965423_mycvw06qkx.ttf') format('truetype'),
        url('//at.alicdn.com/t/font_965423_mycvw06qkx.svg#iconfont') format('svg');
    }

    .special {
        /*height: 2000px;*/
    }

    /*数字键盘*/
    .block {
        display: block !important;
    }

    .none {
        display: none !important;
    }

    .special .getnew span {
        top: 3.25em;
    }
    .special .swiper-container2 {
        margin-bottom:0.5em;
    }
    .wv-swipe-item img {
        width: 100%;
    }
</style>
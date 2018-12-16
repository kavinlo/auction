<template>
    <div class="person">
        <div class="banner">
            <div class="banner-wrap">
                <img src="@/assets/images/person1.jpg" alt="">
                <span>请叫我白富美</span>
            </div>
        </div>
        <div class="bg"></div>
        <div class="mid">
            <div class="mid-top">
                <div class="mid-top-wrap">
                    <span class="left"><router-link to="/order_head"><img src="@/assets/images/p_nav01.png"
                                                                          alt="">我的订单</router-link></span>
                    <span class="right"><router-link to="/order_head">查看全部订单<img src="@/assets/images/p_nav02.png"
                                                                                 alt=""></router-link></span>
                </div>
            </div>
            <div class="mid-main">
                <div>
                    <router-link to="/order_head/no_pay"><img src="@/assets/images/p_nav1.png" alt=""><span>待付款</span>
                    </router-link>
                </div>
                <div>
                    <router-link to="/order_head/no_send"><img src="@/assets/images/p_nav2.png" alt=""><span>待发货</span>
                    </router-link>
                </div>
                <div>
                    <router-link to="/order_head/no_get"><img src="@/assets/images/p_nav3.png" alt=""><span>待收货</span>
                    </router-link>
                </div>
                <div>
                    <router-link to="/order_head/no_comment"><img src="@/assets/images/p_nav4.png"
                                                                  alt=""><span>待评价</span></router-link>
                </div>
            </div>
        </div>
        <div class="bg"></div>
        <div class="list">
            <ul>
                <li>
                    <div>
                        <router-link to="/nav/collect"><img src="@/assets/images/p_nav11.png" alt=""
                                                            class="left"><span>个人收藏</span><img
                                src="@/assets/images/p_nav02.png"
                                alt="" class="right"></router-link>
                    </div>
                </li>
                <li>
                    <div><router-link to="/auction_rule" href="rule.html"><img src="@/assets/images/p_nav12.png" alt=""
                                                  class="left"><span>拍卖规则</span><img
                            src="@/assets/images/p_nav02.png" alt="" class="right"></router-link></div>
                </li>
                <li>
                    <div><router-link to="/no_address"><img src="@/assets/images/p_nav13.png" alt=""
                                                        class="left"><span>收货地址</span><img
                            src="@/assets/images/p_nav02.png"
                            alt="" class="right"></router-link>
                    </div>
                </li>
            </ul>
        </div>
    </div>

</template>

<style scoped>
    @import "../../assets/css/style.css";
    .person .mid-top .left img, .person .mid-top .right img {
        width:1.2em;

    }
    .person .mid-main {
        color: #333;
        font-family: "Microsoft YaHei";
        font-size: 0.7rem;
    }
    .person .mid-top {
        font-size: 0.7rem;
    }
    .person .mid-main img {
        width: 1.35rem !important;
        height: 1.25rem !important ;
        display: block  !important;
        margin: 0 auto !important;
    }
    .list {
        font-family: "Microsoft YaHei";
        font-size: 0.7rem;
        color: #333;
        background: #fff;
        color: #333;

    }
    .person .list li .left {
        padding-right: 0.3rem;
    }
    a, a:visited {
        text-decoration: none;
        color: #333 !important;
    }
    .person .list img {
        width: 1rem;
        height: 0.75rem;
        vertical-align: middle;
    }

</style>
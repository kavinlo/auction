<template>
    <div class="myorder">
        <div class="mui-content">
            <div>
                <div id="segmentedControl" class="mui-segmented-control">
                    <router-link class="mui-control-item mui-active" to="/">全部</router-link>
                    <a class="mui-control-item" href="">待付款</a>
                    <a class="mui-control-item" href="#item3">待发货</a>
                    <a class="mui-control-item" href="#item4">待收货</a>
                    <a class="mui-control-item" href="#item5">待评价</a>
                </div>
            </div>
            <!-- 全部订单 -->
            <div>
                <div id="item1" class="mui-control-content mui-active">

                    <div class="mui-scroll">
                        <ul class="mui-table-view">

                            <li class="mui-table-view-cell">
                                <div class="wrap top">
                                    <span class="left">昌化石专场></span>
                                    <span class="right">买家已成功重拍</span>
                                </div>
                                <div class="main">
                                    <div class="wrap main-wrap">
                                        <img src="@/assets/images/1.jpg" alt="">
                                        <div class="text">
                                            <p>昌化玻璃白冻 瑞兽钮正章</p>
                                            <p>成交金额：￥15000</p>
                                            <p>成交日期：2016-7-11 22:00:00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap botm" >
                                    <span class="right">提醒发货</span>
                                </div>
                            </li>

                            <li class="mui-table-view-cell">
                                <div class="wrap top">
                                    <span class="left">昌化石专场></span>
                                    <span class="right">等待买家付款</span>
                                </div>
                                <div class="main">
                                    <div class="wrap main-wrap">
                                        <img src="@/assets/images/1.jpg" alt="">
                                        <div class="text">
                                            <p>昌化玻璃白冻 瑞兽钮正章</p>
                                            <p>成交金额：￥15000</p>
                                            <p>成交日期：2016-7-11 22:00:00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap botm" >
                                    <span class="left">取消订单</span>
                                    <span class="right">付款</span>
                                </div>
                            </li>

                        </ul>
                    </div>

                </div>
                <!-- 代付款 -->
                <div id="item2" class="mui-control-content">
                    <ul class="mui-table-view">
                        <li class="mui-table-view-cell">
                            <div class="wrap top">
                                <span class="left">昌化石专场></span>
                                <span class="right">等待买家付款</span>
                            </div>
                            <div class="main">
                                <div class="wrap main-wrap">
                                    <img src="@/assets/images/1.jpg" alt="">
                                    <div class="text">
                                        <p>昌化玻璃白冻 瑞兽钮正章</p>
                                        <p>成交金额：￥15000</p>
                                        <p>成交日期：2016-7-11 22:00:00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap botm" >
                                <span class="left">取消订单</span>
                                <span class="right">付款</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- 待发货 -->
                <div id="item3" class="mui-control-content">
                    <ul class="mui-table-view">
                        <li class="mui-table-view-cell">
                            <div class="wrap top">
                                <span class="left">昌化石专场></span>
                                <span class="right">买家已成功重拍</span>
                            </div>
                            <div class="main">
                                <div class="wrap main-wrap">
                                    <img src="@/assets/images/1.jpg" alt="">
                                    <div class="text">
                                        <p>昌化玻璃白冻 瑞兽钮正章</p>
                                        <p>成交金额：￥15000</p>
                                        <p>成交日期：2016-7-11 22:00:00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap botm" >
                                <span class="right">提醒发货</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- 待收货 -->
                <div id="item4" class="mui-control-content">
                    <ul class="mui-table-view">
                        <li class="mui-table-view-cell">
                            <div class="wrap top">
                                <span class="left">昌化石专场></span>
                                <span class="right">买家已付款</span>
                            </div>
                            <div class="main">
                                <div class="wrap main-wrap">
                                    <img src="@/assets/images/1.jpg" alt="">
                                    <div class="text">
                                        <p>昌化玻璃白冻 瑞兽钮正章</p>
                                        <p>成交金额：￥15000</p>
                                        <p>成交日期：2016-7-11 22:00:00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap botm" >
                                <span class="right">确认收货</span>
                            </div>
                        </li>

                    </ul>
                </div>

                <!-- 待评价 -->
                <div id="item5" class="mui-control-content">
                    <ul class="mui-table-view">
                        <li class="mui-table-view-cell">
                            <div class="wrap top">
                                <span class="left">昌化石专场></span>
                                <span class="right">交易成功</span>
                            </div>
                            <div class="main">
                                <div class="wrap main-wrap">
                                    <img src="@/assets/images/1.jpg" alt="">
                                    <div class="text">
                                        <p>昌化玻璃白冻 瑞兽钮正章</p>
                                        <p>成交金额：￥15000</p>
                                        <p>成交日期：2016-7-11 22:00:00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap botm" >
                                <span class="right">删除订单</span>
                                <a href="rated.html"><span class="right">评价</span></a>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
    </div>
    </div>
</template>
<style>
    @import url('../../assets/css/style.css');

    .mui-content {
        border-bottom: 1px solid #ccc;
    }
    .mui-segmented-control {
        font-size: 15px;
        font-weight: 400;
        position: relative;
        display: table;
        overflow: hidden;
        width: 100%;
        table-layout: fixed;
    }

    .mui-segmented-control a{
        font-size: 0.7rem;
        border: none;
        color: #000;
    }
    .mui-segmented-control .mui-active {
        color: red;
        background: #fff;
    }
    .mui-control-item {
        line-height: 38px;
        display: table-cell;
        overflow: hidden;
        width: 1%;
        -webkit-transition: background-color .1s linear;
        transition: background-color .1s linear;
        text-align: center;
        white-space: nowrap;
        text-overflow: ellipsis;
        color: #007aff;
        border-color: #007aff;
        border-left: 1px solid #007aff;
    }
</style>

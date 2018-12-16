<template>
    <div class="myorder">
        <div class="mui-content">
            <div>
                <div id="segmentedControl" class="mui-segmented-control">
                    <router-link to="/order_head" v-bind:class="{'mui-active':this.$route.name=='order_head/myorders'}" class="mui-control-item">全部</router-link>
                    <router-link to="/order_head/no_pay" v-bind:class="{'mui-active':this.$route.name=='order_head/no_pay'}" class="mui-control-item">待付款</router-link>
                    <router-link to="/order_head/no_send" v-bind:class="{'mui-active':this.$route.name=='order_head/no_send'}" class="mui-control-item">待发货</router-link>
                    <router-link to="/order_head/no_get" v-bind:class="{'mui-active':this.$route.name=='order_head/no_get'}" class="mui-control-item">待收货</router-link>
                    <router-link to="/order_head/no_comment" v-bind:class="{'mui-active':this.$route.name=='order_head/no_comment'}" class="mui-control-item">待评价</router-link>
                </div>
            </div>
            <router-view></router-view>
        </div>
    </div>
</template>
<style>
    @import "../../assets/css/mui.min.css";

    .collect .text p {
        font-size: 0.6rem;
        color: #333;
    }

</style>
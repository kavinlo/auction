<template>
    <div class="collect">
        <ul id="OA_task_1" class="mui-table-view">

            <div class="wrap" v-for="(v,k) in collectGood" :key="k">
                <div class="top">
                    <div class="top-text">
                        <span class="left">{{ v.publisher }}</span>
                        <span class="right" @click="pull(k)">编辑</span>
                    </div>
                </div>
                <li class="mui-table-view-cell">
                    <div class="mui-slider-handle">
                        <div class="main">
                            <div class="img">
                                <img :src="v.img" alt="" style="width:100px;height: 100px;">
                            </div>
                            <div class="text">
                                <h1>{{ v.title }}</h1>
                                <p>开拍时间：{{ v.startTime }}</p>
                                <p>结束时间：{{ v.endTime }}</p>
                                <span>当前最高价：￥{{ v.topPrice }}</span>
                            </div>
                            <div class="mui-slider-right mui-disabled"><a href="javascript:;" class="mui-btn mui-btn-red" @click="editDel(k)">删除</a></div>
                        </div>
                    </div>
                </li>
            </div>

        </ul>
    </div>
</template>
<script>
    import $ from 'jquery'

    export default {
        data(){
            return {
                collectGood:[
                    {
                        publisher: '昌化石专场',
                        title: '小明手机',
                        img: require('@/assets/images/collect1.jpg'),
                        startTime: '2016-07-11 22:00:00',
                        endTime: '2016-07-18 22:00:00',
                        topPrice: '15000'
                    },
                    {
                        publisher: '苹果手机',
                        title: '昌化玻璃白冻 瑞兽钮正章',
                        img: require('@/assets/images/collect1.jpg'),
                        startTime: '2016-07-11 22:00:00',
                        endTime: '2016-07-18 22:00:00',
                        topPrice: '15000'
                    },
                    {
                        publisher: '华为手机',
                        title: '昌化玻璃白冻 瑞兽钮正章',
                        img: require('@/assets/images/collect1.jpg'),
                        startTime: '2016-07-11 22:00:00',
                        endTime: '2016-07-18 22:00:00',
                        topPrice: '15000'
                    }
                ]
            }
        },
        methods: {
            pull(k) {
                let doms = document.querySelectorAll(".mui-disabled")
                let dom = doms[k]
                if (document.querySelectorAll(".right")[k].innerHTML == '编辑') {
                    $(dom).animate({ right: 0 })
                    document.querySelectorAll(".right")[k].innerHTML = '返回'
                }else{
                    $(dom).animate({ right : '-80px' })
                    document.querySelectorAll(".right")[k].innerHTML = '编辑'
                }
            },
            editDel(k) {
                // 删除 collectGood 数组下标为 k 的元素
                this.collectGood.splice(k,1)

                // 删除框撤回
                let doms = document.querySelectorAll(".mui-disabled")// 获取所有

                for( var i= 0;i<this.collectGood.length ;i++ ){
                    $(doms[k]).animate({ right : '-80px' })
                    document.querySelectorAll(".right")[k].innerHTML = '编辑'
                }

            }
        }
    }
</script>
<style scoped>
    @import "../../assets/css/style.css";

    .collect {
        font-family: "Microsoft YaHei";
        font-size: 0.7rem;
        padding-bottom: 2.5rem;
        box-sizing: border-box;
    }
    /* js动态左拉框 start */
    .main {
        position: relative;
    }
    .mui-disabled {
        position: fixed;
        right: -80px;
        height: 104px;
        background-color: #dd524d;
        text-align: center;
        width: 80px;
    }
    .mui-disabled a {
        margin-top: 60%;
        transform: translate(0,-50%);
        line-height: 104px;
        color: #fff;
    }
    /* js动态左拉框 end */


    .mui-table-view-cell {
        position: relative;
        overflow: hidden;
        padding: 11px 15px;
        -webkit-touch-callout: none;
    }
    .collect .text p {
        font-size: 0.6rem;
        color: #333;
    }
</style>
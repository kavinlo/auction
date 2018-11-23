<template>
    <div class="collect">
        <ul id="OA_task_1" class="mui-table-view">


            <div class="wrap" v-for="(v,k) in collecGood" :key="k">
                <div class="top">
                    <div class="top-text">
                        <span class="left">{{ v.publisher }}</span>
                        <span class="right" @click="editDel(k)">编辑</span>
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
                            <div class="mui-slider-right mui-disabled"><a href="javascript:;" class="mui-btn mui-btn-red">删除</a></div>
                        </div>
                    </div>
                </li>
            </div>


        </ul>
    </div>
</template>


<script src="../../assets/js/jquery.js"></script>
<script>

    export default {
        data() {
            return {
                collecGood: [
                    {
                        publisher: '昌化石专场',
                        title: '昌化玻璃白冻 瑞兽钮正章',
                        img: '../../assets/images/collect1.jpg',
                        startTime: '2016-07-11 22:00:00',
                        endTime: '2016-07-18 22:00:00',
                        topPrice: '15000'
                    },
                    {
                        publisher: '昌化石专场',
                        title: '昌化玻璃白冻 瑞兽钮正章',
                        img: '../../assets/images/collect1.jpg',
                        startTime: '2016-07-11 22:00:00',
                        endTime: '2016-07-18 22:00:00',
                        topPrice: '15000'
                    },
                    {
                        publisher: '昌化石专场',
                        title: '昌化玻璃白冻 瑞兽钮正章',
                        img: '../../assets/images/collect1.jpg',
                        startTime: '2016-07-11 22:00:00',
                        endTime: '2016-07-18 22:00:00',
                        topPrice: '15000'
                    },
                ]
            }
        },
        methods: {
            editDel(k) {
                let doms = document.querySelectorAll(".mui-disabled")
                let dom = doms[k]
                if (document.querySelectorAll(".right")[k].innerHTML == '编辑') {
                    $(dom).animate({ right: 0 })
                    document.querySelectorAll(".right")[k].innerHTML = '返回'
                }else{
                    $(dom).animate({ right : '-80px' })
                    document.querySelectorAll(".right")[k].innerHTML = '编辑'
                }
            }
        }
    }

</script>

<style scoped>
    .main {
        position: relative;
    }

    .mui-disabled {
        position: fixed;
        right: -80px;
        height: 80px;
        background-color: red;
        text-align: center;
        width: 80px;
        line-height: 80px;
    }
</style>
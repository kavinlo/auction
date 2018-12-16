<template>
    <div class="address">

        <ul id="OA_task_1" class="mui-table-view">
            <li class="mui-table-view-cell">
                <div class="mui-slider-right mui-disabled">
                    <a class="mui-btn mui-btn-grey mui-btn-grey1"><span><img src="images/change.png" alt="">修改</span></a>
                    <a class="mui-btn mui-btn-grey mui-btn-grey2"><span><img src="images/del.png" alt="">删除</span></a>
                </div>
                <div class="mui-slider-handle">
                    <div class="wrap">
                        <div class="top">
                            <div class="left">
                                <span>吕蒙</span>
                                <span class="mr">默认地址</span>
                            </div>
                            <div class="right">
                                <span>1866666666</span>
                            </div>
                        </div>
                        <div class="botm">
                            <p>浙江省/杭州市/江干区白杨街道科技园10号 杭州服务外包大楼</p>
                        </div>
                    </div>

                </div>
            </li>

            <li class="mui-table-view-cell">
                <div class="mui-slider-right mui-disabled">
                    <a class="mui-btn mui-btn-grey mui-btn-grey1"><span><img src="images/change.png" alt="">修改</span></a>
                    <a class="mui-btn mui-btn-grey mui-btn-grey2"><span><img src="images/del.png" alt="">删除</span></a>
                </div>
                <div class="mui-slider-handle">
                    <div class="wrap">
                        <div class="top">
                            <div class="left">
                                <span>吕蒙</span>
                                <span class="mr">默认地址</span>
                            </div>
                            <div class="right">
                                <span>1866666666</span>
                            </div>
                        </div>
                        <div class="botm">
                            <p>浙江省/杭州市/江干区白杨街道科技园10号 杭州服务外包大楼</p>
                        </div>
                    </div>

                </div>
            </li>
        </ul>

            <!-- 底部 -->
            <div class="add-address">
                <router-link to="/add_address"><img src="images/add_address.png" alt=""><span>添加新地址</span></router-link>
            </div>
    </div>
</template>
<style scoped="scoped">
    @import '../../assets/css/mui.min.css';
    /* **********************************************************************************************
                                                  地址
    ************************************************************************************************* */
    .address .add-address a{
        width: 90%;
        height: 2.25rem;
        background: #3d3d3d;
        margin: 0 auto;
        position: fixed;
        bottom: 2%;
        left: 0;
        right: 0;
        color:#fff;
        text-align: center;
        line-height: 2.25rem;

    }
    .address .add-address a img{
        width: 0.8rem;
        height: 0.8rem;
        padding-right: 0.3rem;
    }
    .address .wrap {
        width: 100%;

    }
    .address .wrap .top{
        width: 95%;
        margin: 0.5rem auto;
        overflow: hidden;
    }
    .address .wrap .top .left{
        float: left;
    }
    .address .wrap .top .left .mr{
        display: inline-block;
        width: 3rem;
        color: #fff;
        font-size: 0.6rem;
        background: #dab26c;
        text-align: center;
    }
    .address .wrap .top .right{
        float: right;
    }
    .address .wrap .top .left {
        font-size: 0.8em;
    }
    .address .wrap .botm{
        width: 95%;
        margin:0 auto 0.5rem;
    }
    .address .mui-table-view-cell,.collect .mui-slider-handle{background: #fff;}
    .address,.address .mui-table-view{
        background: #fff;
    }
    .address  .mui-btn-grey img{
        display: block;
        margin: 0 auto;
        width: 0.9rem;
        height: 0.9rem;
    }
    .address  .mui-btn-grey span{
        display: block;
        text-align:center;

    }

</style>
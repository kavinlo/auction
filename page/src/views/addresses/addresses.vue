<template>
    <div class="address">

        <ul id="OA_task_1" class="mui-table-view">
            <li class="mui-table-view-cell">
                <div class="mui-slider-right mui-disabled">
                    <a class="mui-btn mui-btn-grey mui-btn-grey1"><span><img src="@/assets/images/change.png" alt="">修改</span></a>
                    <a class="mui-btn mui-btn-grey mui-btn-grey2"><span><img src="@/assets/images/del.png" alt="">删除</span></a>
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
                    <a class="mui-btn mui-btn-grey mui-btn-grey1"><span><img src="@/assets/images/change.png" alt="">修改</span></a>
                    <a class="mui-btn mui-btn-grey mui-btn-grey2"><span><img src="@/assets/images/del.png" alt="">删除</span></a>
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
                <a href="addAddre.html"><img src="@/assets/images/add_address.png" alt=""><span>添加新地址</span></a>
            </div>
    </div>
</template>
<style>
    @import url('../../assets/css/style.css');
     .left > .mr {
        display: inline-block;
        width: 3rem;
        color: #fff;
        font-size: 0.6rem;
        background: #dab26c;
        text-align: center;
         line-height: 21px;
    }
    p {
        font-size: 14px;
        margin-top: 0;
        margin-bottom: 10px;
        color: #8f8f94;
    }
    .right {
        float: right;
        display: inline-block;
    }
    .mui-slider-right  {
        display: none;
    }
</style>
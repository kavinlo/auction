<template>
    <div class="add_address">
        <ul class="wrap1">
            <li>
                <input type="text" placeholder="收货人姓名">
            </li>
            <li class="mui-input-row">
                <label>+086</label>
                <input type="tel" placeholder="联系电话" id='tel'>
            </li>
            <li>
                <input type="text" placeholder="省/市/区">
            </li>
            <li>
                <input type="text" placeholder="小区、街道、门牌等详细信息">
            </li>
            <li class="mui-table-view-cell">
                设为默认地址<br/>
                注:每次下单时会默认使用该地址
                <div class="mui-switch mui-switch-blue mui-switch-mini mui-active">
                    <div class="mui-switch-handle"></div>
                </div>
            </li>
        </ul>
        <div class="wrap2">
            <router-link to="/address"><input type="button" value='确定'></router-link>
        </div>
    </div>
</template>

<style scoped="scoped">
    @import '../../assets/css/mui.min.css';

    /* **********************************************************************************************
                                                  添加地址
    ************************************************************************************************* */
    .add_address .mui-table-view-cell {
        color: #8f8c8c;
        border-bottom: 1px solid rgba(0,0,0,0.2);
        font-size: 0.7em;
    }
    .add_address{
        background: #fff;
    }
    .add_address .wrap1,.add_address .wrap2{
        width: 90%;
        margin: 0 auto;
    }
    .add_address input{
        border: none;
        border-bottom: 1px solid rgba(0,0,0,0.2);
        margin: 0;
        font-family: '微软雅黑';
        font-size: 0.7rem;
        border-radius: 0;
    }
    .add_address .mui-input-row input{
        width: 75%;
        border-bottom: 1px solid rgba(0,0,0,0.2);


    }
    .add_address .mui-input-row label{
        font-size: 0.8rem;
        border-bottom: 1px solid rgba(0,0,0,0.2);
        height: 40px;
        width: 20%;
    }
    .add_address  .mui-table-view-cell{
        color: #8f8c8c;
        border-bottom: 1px solid rgba(0,0,0,0.2);
    }
    .add_address .wrap2 a{
        display: block;
    }
    .add_address .wrap2 input{
        width: 100%;
        height: 2.25rem;
        background: #3d3d3d;
        margin-top: 0.75rem;
        color: #fff;
    }
    .add_address .mui-switch-handle{
        background: #fff;
        border:1px solid rgba(0,0,0,0.1);
    }
    .add_address .mui-active{
        background: #6f6666;
        border-color: rgba(0,0,0,0.1);
    }
</style>
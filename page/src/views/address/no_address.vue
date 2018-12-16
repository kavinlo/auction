<template>
    <div class="no_address">
        <div class="wrap">
            <img src="@/assets/images/no_address.png" alt="">
            <p>您还没有收货地址赶快创建一个吧~</p>
        </div>
        <div>
            <router-link to="/add_address"><img src="@/assets/images/add_address.png" alt=""><span>添加新地址</span></router-link>
        </div>
    </div>
</template>
<style scoped="scoped">
    /* **********************************************************************************************
                                                  没有地址
    ************************************************************************************************* */
    .no_address .wrap{
        position: fixed;
        top: 35%;
        left: 20%;
    }
    .no_address .wrap img{
        display: block;
        margin: 0 auto;
        width: 3.25rem;
        height: 3.25rem;

    }
    .no_address p{
        margin-top: 0.5rem;
        text-align: center;
    }
    .no_address a{
        width: 90%;
        height: 2.25rem;
        background: #3d3d3d;
        margin: 0 auto;
        position: fixed;
        bottom: 2%;
        left: 0;
        right: 0;
        color:#fff;
        visibility:middle;

    }
    .no_address a {
        text-align: center;
        line-height: 2.25rem;
    }
    .no_address a img{
        width: 0.8rem;
        height: 0.8rem;
        padding-right: 0.3rem;
    }
</style>
<?php

    // 注册
    Route::post('api/registeres','api/v1.Login/create')->allowCrossDomain();

    // 登录
    Route::get('api/member','api/v1.Login/read')->allowCrossDomain();

    // 收货地址 列表
    Route::get('api/addresses','api/v1.Address/index')->middleware('JwtService')->allowCrossDoman();


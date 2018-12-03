<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

function success($info)
{

    return json([
        'status_code' => 200,
        'message' => 'success',
        'data' => $info
    ]);

}

function error($error, $code)
{
    // 状态码
    static $_http_code = [
        400 => "Bad Request",                  // 请求数据有问题
        401 => "Unauthorized",                 // 未登录
        403 => "Forbidden",                    // 登录但没有权限
        404 => "Not Found",                    // 请求数据没找到
        422 => "Unprocessable Entity",         // 无法处理输入的数据
        500 => "Internal Server Error",         // 服务器内部错误
    ];

    return json([
        'status_code' => $code,
        'message' => $_http_code[$code],
        'errors' => $error
    ]);

}

// jwt 秘钥
function jwt()
{
    return [
        'key' => 'asdasdas@#@#%#$^$^$fsd]{|sdfsdf/-*+625',
        'expire' => 7200
    ];
}

// redis
function redis(){



}
<?php

namespace app\http\middleware;

use \Firebase\JWT\JWT;
use think\Request;

class JwtService
{

    public function handle($request, \Closure $next)
    {
        // 解密 jwt
        $jwt = substr($request->server('HTTP_AUTHORIZATION'), 7);
        try{
            // 公共函数 获得jwt 数据
            $jwtData = jwt();
            $key = $jwtData['key'];

            // 保存 到request
            $request->jwt = JWT::decode($jwt, $key, ['HS256']);

            return $next($request);

        } catch(\Exception $e){
            return error('HTTP/1.1 403 Forbidden','403');
        }

    }
}

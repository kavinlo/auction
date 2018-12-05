<?php

namespace app\http\middleware;
use think\facade\Session;

class Islogin
{
    public function handle($request, \Closure $next)
    {
        $mName = Session::get('mName');
        if( $mName ){
            return $next($request);
        }
        return redirect('/admin/manage');
    }
}

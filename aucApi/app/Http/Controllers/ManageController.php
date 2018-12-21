<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manage;
class ManageController extends Controller
{
    // 管理员登录 处理表单
    public function handleLogin(Request $req)
    {
        $isTRue = Manage::where('mName',$req->mName)->where('mPassword',md5($req->mPassword))->find(1);
        if( $isTRue ){
            session('manage_id',$isTRue->id);
            return redirect('/admin/successLogin');
        }else{
            return back();
        }
    }
}

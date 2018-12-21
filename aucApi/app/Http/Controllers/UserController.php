<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // 会员 列表
    public function memberList()
    {
        $memberData = User::paginate(4);
        return view('admin.memberList',[
            'memberData'=>$memberData
        ]);
    }

    // 会员 点击单个删除
    public function memberDeleteByOne($id)
    {
        $memeber = User::find($id);
        $memeber -> delete();
    }

    // 会员 点击删除所有
    public function memberDeleteByAll(Request $req)
    {
        $deleteCount = User::whereIn('id',$req->checkId)->delete();
        if( $deleteCount == count($req->checkId) ){
            return json_encode([
                'code'=>200,
                'message'=>'删除成功'
            ]);
        }
    }
}

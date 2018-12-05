<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\model\Member as MemberModel;
class Member extends Controller
{
    protected $middleware = ['Islogin'];

    /**
     * 显示资源列表
     *
     * @return \think\Response
     */

    // 会员列表
    public function index()
    {
        $data = MemberModel::all();
        $this -> assign('members',$data);
        return $this->fetch('member');
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
    }

    // GET 删除会员
    public function deleteMember($id){
        $isTrue = MemberModel::where('id',$id)->delete();
    }

    // 批量删除
    public function deleteBatch(Request $req){
        $idArr = $req->param('idArr');
        MemberModel::destroy($idArr);
    }


}

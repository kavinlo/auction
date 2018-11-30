<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\model\Manage as ManageModel;

class Manage extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    // 管理员登录
    public function index()
    {
        return $this->fetch('login');
    }

    // 管理员登录处理表单
    public function doLogin(Request $req)
    {
        $data = ManageModel::where('mName', $req->param('mName'))->where('mPassword', md5($req->param('mPassword')))->find();
        if ($data) {
            // 登录 成功重定向到首页
            return $this->success('登陆成功', '/admin/index');
        }

        $this->error('账号不存在或者密码错误');
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
     * @param  \think\Request $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //
    }

    /**
     * 显示指定的资源
     *
     * @param  int $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request $request
     * @param  int $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}

<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\model\Lot as LotModel;

class Lot extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        $data = LotModel::all();
        $this -> assign('lots',$data);
        return $this->fetch('lot');
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

    // GET 删除 拍品
    public function deleteLot($id)
    {
        LotModel::destroy($id);
    }

    // 批量删除
    public function deleteBatch(Request $req){
        $idArr = $req->param('idArr');
        LotModel::destroy($idArr);
    }

    // 新增拍品 页面表单展示
    public function addLot(){
        return $this->fetch('create');
    }

    // 新增拍品 表单提交处理
    public function doAddLot(Request $req){
        $data = LotModel::create($req->param())->hidden(['date']);
        return [
            'code_status' => 200,
            'data' => $data
        ];
    }

    // 新增拍品 属性图片
    public function addAttriImg(Request $req){

        return $req->param();

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


}

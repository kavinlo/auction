<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\model\Lot as LotModel;
use app\admin\model\LotAttri;
use app\admin\model\LotAttrRelation;
use app\admin\model\LotImg;

class Lot extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {

        $list = LotModel::paginate(4);
        $page = $list->render();    // 分页显示

        $this->assign('lots', $list);
        $this->assign('page', $page);

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

    // GET 删除 拍品
    public function deleteLot($id)
    {

        LotModel::destroy($id);
    }

    // 批量删除
    public function deleteBatch(Request $req)
    {
        $idArr = $req->param('idArr');
        LotModel::destroy($idArr);
    }

    // 新增拍品 页面表单展示
    public function addLot()
    {
        return $this->fetch('create');
    }

    // 新增拍品 表单提交处理
    public function doAddLot(Request $req)
    {
        $data = LotModel::create($req->param())->hidden(['date']);
        return [
            'code_status' => 200,
            'data' => $data
        ];

    }

    // 新增拍品 属性图片
    public function addAttriImg(Request $req)
    {

        /* =====================  处理属性 LotAttri ======================*/

        // 获取 拍品id
        $lot_id = $req->param('lot_id');
        $lotId = explode('-', $lot_id)[1];

        // 属性名 和 属性值 数据处理
        $aName = explode(',', $req->param('aName'));
        $aValue = explode(',', $req->param('aValue'));
        // 添加 属性
        $list = [];   // 拍品ID => 属性ID
        for ($i = 0; $i < count($aName); $i++) {
            $attri = LotAttri::create([
                'lotAttriName' => $aName[$i],
                'lotAttriValue' => $aValue[$i]
            ]);
            $list[] = [
                'lot_id' => $lotId,
                'attri_id' => $attri->id
            ];
        }

        /* ================  处理拍品和属性关联表 LotAttrRelation ===============*/

        // 批量添加 拍品和属性
        $relation = new LotAttrRelation();
        $relation->saveAll($list);

        /* =====================  处理图片 LotImg =====================*/

        $lotImg = new LotImg();
        $dirList = $lotImg->handle($_FILES, $lotId);  // 调用封装函数 生成缩略图

        // 启动redis lpush 到队列中
        $redis = new Redis;
        // 插入数据库
        foreach ($dirList as $k => $v) {
            $imgId = LotImg::create([
                'lot_id' => $v['lot_id'],
                'img_url' => $v['img_url']
            ]);

            // 构造数据
            $list = [
                'id' => $imgId->id,
                'url' => $v['img_url']
            ];
            // lpush  到队列中
            $redis->lpushUrl($list);
        }
        return [
            'code_status' => 200,
            'mes' => '添加拍品成功'
        ];
    }


    /**
     * 删除指定资源
     *
     * @param  int $id
     * @return \think\Response
     */
    public function delete($id)
    {
    }


}

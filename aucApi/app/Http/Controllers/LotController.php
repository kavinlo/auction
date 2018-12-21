<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lot;
use App\Jobs\SaveImage;
use App\Models\Img;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class LotController extends Controller
{

    // 拍品列表
    public function lotList()
    {
        $lotData = Lot::paginate(4);
        return view('admin.lotList', [
            'lotData' => $lotData
        ]);
    }

    // 新增拍品的处理表单
    public function lotAddHandle(Request $req)
    {
        $lot = new Lot();
        $lot->lotName = $req->data['lotName'];
        $lot->lotPrice = $req->data['lotPrice'];
        $lot->range = $req->data['range'];
        $lot->time = $req->data['date'] . ' ' . $req->data['datetime'];
        $lot->timeLength = $req->data['datetime'];
        $lot->lDescription = $req->data['lDescription'];
        $lot->save();
        return json_encode([
            'code_status' => 200,
            'message' => $lot
        ]);
    }

    //
    public function attrHandle(Request $req, Img $img)
    {
        // 取出 拍品 id
        $lotId = explode('-', $req->lId)[1];

        /*==========================================保存 属性 到数据库=======================================*/
        $aName = explode(',', $req->aName);
        $aVal = explode(',', $req->aVal);
        $attriData = [];
        foreach ($aName as $k => $v) {  // 循环保存
            $attriData[] = ['attriName' => $v, 'attriVal' => $aVal[$k], 'lot_id' => $lotId];
        }
        DB::table('attris')->insert($attriData);    // 牌品属性添加

        /*==========================================保存 图片 到数据库=======================================*/

        for ($i = 0; $i < $req->iLength; $i++) {
            $key = 'img_'.$i;
            // 修改指定图片的大小
            $img = Image::make($req->$key)->resize(480, 250);

            //  如果没有这个路径就生成
            $dir = "lot/" . date('Y-m-d');    // 图片保存路径
            if (!is_dir($dir)) {
                mkdir($dir, 777, true);
            }
            // 生成图片名
            $ret = strchr( $_FILES['img_'.$i]['name'],'.');    // 图片后缀
            $name = md5(date('ymd') . rand(1, 99999999999999)) . $ret;
            // 图片保存
            $img->save($dir.'/'.$name);
            // 消息队列 保存七牛云
            $this->dispatch(new SaveImage($dir.'/'.$name));
            // 删除硬盘文件
            @unlink($dir.'/'.$name);
        }

    }


}

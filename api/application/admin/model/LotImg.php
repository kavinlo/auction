<?php

namespace app\admin\model;

use think\Model;
use \think\Image;

class LotImg extends Model
{
    protected $name = 'lotimg';

    // 图片处理
    public function handle($img, $lotId)
    {

        // 判断是否存在此目录 不存在创建
        $dir = 'uploads/' . date('Y-m-d');
        if (!is_dir($dir)) {
            mkdir($dir, 777, true);
        }

        $list = [];
        // 循环移动图片
        foreach ($img as $k => $v) {
            $imgName = md5(time() . rand(1, 999999));    // 文件名
            $ext = strchr($v['name'], '.');  // 文件后缀名
            $image = Image::open($v['tmp_name']);   // 打开 文件
            $image->thumb(480, 250, Image::THUMB_FIXED)->save($dir . '/' . $imgName . $ext); //保存图片
            $list[] = [
                'lot_id' => $lotId,
                'img_url' => $dir . '/' . $imgName . $ext
            ];
        }
        return $list;
    }


}

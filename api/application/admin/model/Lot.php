<?php

namespace app\admin\model;

use think\Model;

class Lot extends Model
{
    protected $name = 'lots';

    // 模型关联 LotImg
    public function LotImg(){
        return $this->hasMany('LotImg','lot_id');
    }
}

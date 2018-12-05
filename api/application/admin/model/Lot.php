<?php

namespace app\admin\model;

use think\Model;

class Lot extends Model
{
    protected $name = 'lots';

    // 模型关联 LotAttrRelation
    public function lotattrirelation(){
        return $this->hasMany('LotAttrRelation','lot_id');
    }

    // 模型关联 LotImg
    public function lotimgrelation(){
        return $this->hasMany('LotImg','lot_id');
    }

    // 模型关联 LotAttri
    public function lotattri(){
        return $this->belongsToMany('LotAttri','lotattrirelation','attri_id','lot_id');
    }
}

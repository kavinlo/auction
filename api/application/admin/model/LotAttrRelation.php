<?php

namespace app\admin\model;

use think\Model;

class LotAttrRelation extends Model
{
    protected $name = 'lotattrirelation';

    // 模型关联 LotAttri
    public function lotattri(){
        return $this->hasOne('LotAttri','id','attri_id');
    }
}

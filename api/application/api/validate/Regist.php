<?php

namespace app\api\validate;

use think\Validate;

class Regist extends Validate
{
    /**
     * 定义验证规则
     * 格式：'字段名'	=>	['规则1','规则2'...]
     *
     * @var array
     */
    protected $rule = [
        'uName' => 'require|min:3|max:15|unique:members',
        'uPassword' => 'require|min:3|max:15'
    ];
    /**
     * 定义错误信息
     * 格式：'字段名.规则名'	=>	'错误信息'
     *
     * @var array
     */	
    protected $message = [];
}

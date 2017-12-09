<?php
namespace app\common\validate;
use think\Validate;
header("content-type:text/html;charset=utf8");
class AdminUser extends Validate{
    protected $rule = [
        'adminName' => 'require|min:5',
        'password2' => 'require|min:8',
        'phone'     => 'number',
        'email'     => 'email',
    ];
    protected $message  =   [
        'adminName.require' => '名称必须',
        'adminName.min'     => '名称最少5个字符',
        'password2.require'   => '密码必须输入',
        'password2.min'   => '密码必须输入8个字符以上',
        'phone.number'  => '手机号码格式错误',
        'email'        => '邮箱格式错误',
    ];
}
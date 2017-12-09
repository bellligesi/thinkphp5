<?php
namespace app\common\model;
use think\Model;

class AdminUser extends Model{
    //后台用户添加
    public function add($data){
        if(!is_array($data)){
            exception("<span style='color:red;font-size:50px'>添加数据不合法</span>");
        }
        return $this->allowField(true)->save($data);
    }
}
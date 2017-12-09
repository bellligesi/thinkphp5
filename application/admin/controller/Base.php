<?php
namespace app\admin\controller;
use think\Controller;

class Base extends Controller{

    public function _initialize(){
        $this->isLogin();
    }

    public function isLogin(){
        if(session(config('admin.admin_session_name'),'',config('admin.admin_session_scope')) == NULL){
            $this->error("请登录",'/admin/login/index','',1);
        }
    }
}
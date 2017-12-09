<?php
namespace app\admin\controller;
use app\common\validate\AdminUser;
use think\Controller;
use think\Session;

class Login extends Controller{

    //登陆页面
    public function index(){
        return $this->fetch();
    }

    //登陆表单验证
    public function check(){
        $data = input("post.");
        if(!request()->isPost()){
            $this->error("请求不合法");
        }

        if(!captcha_check($data['captcha'])){
            $this->error("验证码不正确",'/admin/login/index','',2);
        }

            //验证数据
            $res = model("AdminUser")->get(['name' => $data['username']]);
            if (!$res || $res->status != config('code.normal_code')) {
                $this->error("用户不存在");
            } else if ($res->password != md5($data['password'])) {
                $this->error("密码不正确");
            } else {
                $up_data = [
                    'last_login_time' => time(),
                    'last_ip' => request()->ip(),
                ];
                try {
                model('AdminUser')->save($up_data, ['id' => $res->id]);
                }catch (\Exception $e){
                    $this->error($e->getMessage());
                }
                //保存session
                session(config("admin.admin_session_name"),$data['username'],config("admin.admin_session_scope"));
                $this->success("登陆成功",'/admin/index/index','',1);
            }

    }

    //退出登陆
    public function logout(){
        //清空session
        session(null,config('admin.admin_session_scope'));
        $this->redirect('/admin/login/index');
    }
}
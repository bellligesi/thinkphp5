<?php

namespace app\admin\controller;
header("content-type:text/html;charset=utf8");
class Admin extends Base{

    public function index(){
        return $this->fetch();
    }

    public function add(){
        //添加
        if(request()->isPost()) {
            $data = input('post.');
            $validate = new \app\common\validate\AdminUser();
            if (!$validate->check($data)) {
                $this->error($validate->getError());
            };
            $data['password'] = md5($data['password']);

            //模型对象进行数据添加
            $add_data = array();
            $add_data['name'] = $data['adminName'];
            $add_data['password'] = $data['password'];
            $add_data['phone'] = $data['phone'];
            $add_data['email'] = $data['email'];
            $add_data['role']  = $data['adminRole'];

            $add_data['status'] = 1;
            $add_data['create_time'] = time();
            $model = new \app\common\model\AdminUser();

            try{
                $id = $model->add($add_data);
            }catch (\Exception $e){
                echo $e->getMessage();
            }

            if($id){
                $this->success('添加成功');
            }else{
                $this->error('添加失败');
            }
        }
        //显示
        return $this->fetch();
    }
}
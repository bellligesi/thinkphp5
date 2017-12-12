<?php
namespace app\admin\controller;

class Article extends Base{
    //文章列表页
    public function lists(){
        if(request()->isPost()){
            halt(input('post.'));
        }else{
            $res_data = model('News')->getNews();
            $this->assign('news',$res_data['data']);
            return $this->fetch();
        }
    }

    //文章添加
    public function add(){
        if(request()->isPost()){
            $data = input('post.');
            $add_res = model('News')->addnews($data);
            halt($add_res);
        }else{
            return $this->fetch();
        }

    }



}

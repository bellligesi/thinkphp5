<?php
namespace app\admin\controller;

class Article extends Base{

    //文章添加
    public function add(){
        if(request()->isPost()){
            return 'aaa';
        }else{
            return $this->fetch();
        }

    }



}

<?php
namespace app\admin\controller;

class Image extends Base{

    //图片添加
    public function upload(){
        $file = $_FILES;
        $suffix = substr(strrchr($_FILES['file']['name'], '.'), 1);
        if(!is_dir('./upload/'.date('Y-m'))){
            mkdir('./upload/'.date('Y-m'));
            $dir =  './upload/'.date('Y-m').'/';
            mkdir(($dir).date('d').'/');
            $dir = $dir.date('d').'/';
        }else{
            $dir = './upload/'.date('Y-m').'/'.date('d').'/';
        }
        $filename = uniqid().".$suffix";
        $upload_res = move_uploaded_file($file['file']['tmp_name'],$dir.$filename);
        if($upload_res){
            return '随便返回什么,这里是标记,如果这条信息返回给前台那么就表示上传成功';
        }else{
            //return false;
        }
        return $this->fetch();
    }



}

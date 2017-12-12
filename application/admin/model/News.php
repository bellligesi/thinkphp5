<?php
namespace app\admin\model;
use think\Model;

class News extends Model{

    //文章增加
    public function addnews($data){
        $add_data = array();
        $add_data['title'] = $data['title'];
        $add_data['small_title'] = $data['small_title'];
        $add_data['catid'] = $data['lanmu'];
        $add_data['image'] = $data['uploadimg'];
        $add_data['description'] = $data['abstract'];
        if(!in_array('is_postion',$data)){
            $add_data['is_postion'] = 0;
        }else{
            $add_data['is_postion'] = 1;
        }
        if(!in_array('is_allowcomment',$data)){
            $add_data['is_allowcomment'] = 0;
        }else{
            $add_data['is_allowcomment'] = 1;
        }

        $add_data['author'] = $data['auther'];
        $add_data['source_type'] = $data['source'];
        $add_data['keywords'] = $data['keywords'];
        $add_data['status'] = 1;
        $add_data['create_time'] = time();
        try{
            $add_res = model('News')->save($add_data);
        }catch (\Exception $e){
            $this->getError($e->getMessage());
        }

        if($add_res){
            exit(json_encode('添加成功'));
        }else{
            exit(json_encode('添加失败'));
        }
    }

    //查询
    public function getNews($data=array()){
        $data['status'] = 1;
        $where = $data;
        $order = 'id asc';
        $news = model('News')->where($where)
                     ->order($order)
                     ->paginate(3);
        return $news->toArray();
    }

}


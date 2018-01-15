<?php
/*
*@author LDD
*@time  2016-11-11 11:44
*
**/
namespace app\admin\model;
use think\Model;
class Driver extends Model {
    /*获取单条数据*/
    public function getOne($id=null){
        if(empty($id)){
            $this->error='参数不正确';
            return false;
        }
        $data=$this->get($id);
        return $data;
    }
    public function data_list($where=null){
        $data=$this->where($where)->paginate();
        return $data;
    }
    public function selectList(){
        $data=$this->select();
        return $data;
    }
    public function add($data){
        if(isset($data['yearcheck'])){
            $data['yearcheck']=strtotime($data['yearcheck']);
        }
        $result=$this->save($data);
        return $result;
    }

    public function edit($data){
        if(isset($data['yearcheck'])){
            $data['yearcheck']=strtotime($data['yearcheck']);
        }
        $result=$this->update($data);
        return $result;
    }

    public function del($id){
        $result=$this->destroy($id);
        return $result;
    }
}
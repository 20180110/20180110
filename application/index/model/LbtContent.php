<?php
namespace app\index\model;
use think\Model;
class LbtContent extends Model{
    public function lbtList(){
        $data=$this->where('status',1)->order('sort,create_time')->select();
        return $data;
    }
}
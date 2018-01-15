<?php
namespace app\admin\controller;
use think\Controller;
class Base extends Controller
{
    public function updateResult($res=false,$msg='',$url=''){
        if($res){
            if(empty($msg)){
                $msg='成功';
            }
            $this->success($msg,$url);
        }else{
            if(empty($msg)){
                $msg='失败';
            }
            $this->error($msg,$url);
        }
    }

    /*构建where*/
    protected function buildWhere($arr=[]){
        $where=array();
        $type='=';
        if(!empty($arr)){
            foreach($arr as $val){
                if(strpos($val,':')){
                    list($val, $type) = explode(':', $val);
                }
                $temp=$this->request->param($val);
                if(!is_null($temp) && $temp != ""){
                    switch($type){
                        case 'like';
                            $where[$val]=['like',"%$temp%"];
                            break;
                        default:
                            $where[$val]=[$type,$temp];
                            break;
                    }
                }
            }
        }
        return $where;
    }
}

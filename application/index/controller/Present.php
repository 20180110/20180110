<?php
namespace app\index\controller;
use think\Db;
class Present
{

    /*礼品领取记录前20条*/
    public function presentList(){
        $where['status']=1;
        $data=Db::name('present_record')->alias('r')->field('r.nickname,r.create_time,p.name,p.img_url')->join('present p','p.id=r.present_id')->limit(20)->order('create_time desc')->select();
        return updateResult($data);
    }

    /*礼品列表*/
    public function present(){
        $where['status']=1;
        $data=Db::name('present')->where($where)->select();
        return updateResult($data);
    }
    /*礼品提交*/
    public function sumbit($type='',$id=''){
        if(empty($type) || empty($id)){
            return updateResult(0,'参数错误1');
        }
        // $obj=new Auth();
        //$uid=$obj->is_login();
        $uid=1;
        $user_info=model('User')->userInfo($uid);
        $present=model('\\app\\admin\\model\\Present')->presentDetail($id);
        //所需积分
        $need_integral=$present[$type];
        if($user_info[$type]-$need_integral<0){
            return updateResult(0,'积分不足不能兑换');
        }
        Db::startTrans();
        try{
            Db::name('user')->where('id',$uid)->setDec($type,$need_integral);
            $data=['user_id'=>$uid,'nickname'=>$user_info['nickname'],'present_id'=>$id,'create_time'=>request()->time()];
            Db::name('present_record')->insert($data);
            //提交事务
            Db::commit();
            return updateResult(1);
        } catch (\Exception $e) {
            // 回滚事务
            Db::rollback();
            return updateResult(0);
        }
    }
}

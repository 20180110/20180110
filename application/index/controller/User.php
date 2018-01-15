<?php
namespace app\index\controller;
use think\Db;
class User extends Auth
{

    public function userInfo()
    {
        $data=model('User')->userInfo(UID);
        $msgCount=Db::name('sys_msg')->where(['is_read'=>0,'to_user'=>UID])->count();
        $data['unread_num']=$msgCount;
        return updateResult($data);
    }

    /*会员签到*/
    public function userSign(){
        $result=model('User')->userSign(UID);
        return updateResult($result,model('User')->getError());
    }

    /*加入联盟*/
    public function joinUnion(){
        $union_id=input('union_id');
        $union=Db::name('union')->find($union_id);
        if(empty($union)){
            return updateResult(0,'联盟不存在');
        }
        $data=['union_id'=>$union_id,'id'=>UID];
        $result=Db::name('user')->update($data);
        return updateResult($result);
    }

    /*我的主页 主页头部个人信息 修改（只修改提交的单个字段）*/
    public function editUser(){
        $data=input();
        $data['user_id']=UID;
        $result=model('User')->editUser($data);
        return updateResult($result);
    }
}
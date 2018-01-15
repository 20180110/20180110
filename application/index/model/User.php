<?php
namespace app\index\model;
use think\Model;
use think\Db;
class User extends Model{
    /*获取用户信息*/
    public function userInfo($id){
        $data=$this->get($id);
        return $data;
    }

    /*用户登陆*/
    public function login($username, $password,  $isRemember = false, $type = false)
    {
        $userInfo=$this->where('user_name',$username)->find();
        if(empty($userInfo)){
            $this->error='用户不存在';
            return false;
        }
        if($userInfo['password'] !=encrypt($password)){
            $this->error='密码错误';
            return false;
        }

        if ($isRemember || $type) {
            $secret['user_name'] = $username;
            $secret['password'] = $password;
            $secret['time'] = request()->time();
            $data['rememberKey'] = encrypt(json_encode($secret));
        }
        // 保存缓存
        $authKey = encrypt($userInfo['user_name'].$userInfo['password']);
        $info['userInfo'] = $userInfo->hidden(['password']);
        $info['sessionId'] = getGuid();

        $info['authKey'] = $authKey;
        cache('Auth_'.$authKey, null);
        $count=Db::name('user_sign')->where('user_id',$userInfo['id'])->whereTime('create_time', 'today')->count();
        $info['is_sign']=$count>0?1:0;
        cache('Auth_'.$authKey, $info, config('LOGIN_SESSION_VALID'));
        // 返回信息
        $data['authKey']		= $authKey;
        $data['sessionId']		= $info['sessionId'];
        $data['userInfo']		= $userInfo;

        return $data;
    }

    public function userSign($uid){
        $count=Db::name('user_sign')->where('user_id',$uid)->whereTime('create_time', 'today')->count();
        if($count>0){
            $this->error='今天已经签到过了';
            return false;
        }
        // 启动事务
        Db::startTrans();
        try{
            $data=['id'=>getGuid(),'user_id'=>$uid,'create_time'=>request()->time(),'integral'=>10];
            Db::name('user_sign')->insert($data);
            Db::name('user')->where('id',$uid)->setInc('integral_ask',10);
            // 提交事务
            Db::commit();
            return true;
        } catch (\Exception $e) {
            // 回滚事务
            Db::rollback();
            return false;
        }
    }

    /*扣减积分*/
    public function deduction($type,$integral,$uid){
        $result=$this->where('id',$uid)->setDec($type,$integral);
        return $result;
    }
}
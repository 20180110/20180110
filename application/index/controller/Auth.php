<?php
namespace app\index\controller;
use think\Controller;
class Auth extends Controller{
    public function _initialize()
    {
        parent::_initialize(); // TODO: Change the autogenerated stub
        // 获取当前用户ID
        defined("UID") || define('UID',$this->is_login());
    }

    public function is_login(){
        /*获取头部信息*/
        $header = request()->header();
        // 校验sessionid和authKey
        if (empty($header['sessionid'])||empty($header['authkey'])) {
            $this->error('参数错误');
        }
        $authKey = $header['authkey'];
        $cache = cache('Auth_'.$authKey);
        if (empty($cache) || $header['sessionid'] != $cache['sessionId']) {
            header('Content-Type:application/json; charset=utf-8');
            exit(json_encode(['code'=>1002, 'msg'=>'登录已失效']));
        }
        // 更新缓存
        cache('Auth_'.$authKey, $cache, config('LOGIN_SESSION_VALID'));
        request()->bind('authKey',$authKey);
        $user_id=$cache['userInfo']['user_id'];
        return $user_id;
    }
}
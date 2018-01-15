<?php
namespace app\index\controller;
class Init {
    public function __construct()
    {
        /*获取头部信息*/
        $header = request()->header();
        if (!empty($header['authkey'])) {
            $authKey = $header['authkey'];
            $cache = cache('Auth_'.$authKey);
            // 更新缓存
            cache('Auth_'.$authKey, $cache, config('LOGIN_SESSION_VALID'));
        }
    }
}
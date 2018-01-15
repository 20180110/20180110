<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
/*加密|解密*/
function encrypt($string, $action = "EN") {
    $secret_string =  '5*j,.^&;?.%#@!';
    if ($string == "")
        return "";
    if ($action == "EN")
        $md5code = substr(md5($string), 8, 10);
    else {
        $md5code = substr($string, - 10);
        $string = substr($string, 0, strlen($string) - 10);
    }
    $key = md5($md5code . $secret_string);
    $string = ($action == "EN" ? $string : base64_decode($string));
    $len = strlen($key);
    $code = "";
    for ($i = 0; $i < strlen($string); $i ++) {
        $k = $i % $len;
        $code .= $string [$i] ^ $key [$k];
    }
    $code = ($action == "DE" ? (substr(md5($code), 8, 10) == $md5code ? $code : NULL) : base64_encode($code) . "$md5code");
    return $code;
}

//成功返回
function success($data,$msg="成功"){
    $result = [
        'status' => 200,
        'msg'  => $msg?$msg:"成功",
        'time' => $_SERVER['REQUEST_TIME'],
        'data' => $data,
    ];
    return json($result);
}
//失败返回
function error($data,$msg="失败"){
    $result = [
        'status' => 500,
        'msg'  => $msg?$msg:'失败',
        'time' => $_SERVER['REQUEST_TIME'],
        'data' => $data,
    ];
    return json($result);
}
//更新返回
function updateResult($data,$msg=''){
    return $data?success($data,$msg):error($data,$msg);
}
/*获取后台用户名称*/
function adminUserInfo($id=''){
    if(empty($id)){
        return '';
    }
    $data=model('AdminUser')->cache('AdminUserData')->column('id,username');
    return isset($data[$id])?$data[$id]:'';
}

/*获取前台用户信息*/
function getMemberInfo($id){
    if(empty($id)){
        return '';
    }
    $data=model('User')->get($id);
    return !empty($data)?$data:'';
}
/*获取文章类别名称*/
function articleCatInfo($id=''){
    if(empty($id)){
        return '';
    }
    $data=model('ArticleCat')->cache('ArticleCatData')->column('id,name');
    return isset($data[$id])?$data[$id]:'';
}

/*获取举报类别名称*/
function reportCatInfo($id=''){
    if(empty($id)){
        return '';
    }
    $data=model('ReportCat')->cache('ReportCatData')->column('id,name');
    return isset($data[$id])?$data[$id]:'';
}

/*获取举报类别名称*/
function get_present_name($id=''){
    if(empty($id)){
        return '';
    }
    $data=model('Present')->cache('PresentData')->column('id,name');
    return isset($data[$id])?$data[$id]:'';
}

/*获取举报类别名称*/
function get_union_name($id=''){
    if(empty($id)){
        return '';
    }
    $data=model('Union')->cache('UnionData')->column('id,name');
    return isset($data[$id])?$data[$id]:'';
}

function getValue($data,$value){
    return isset($data[$value])?$data[$value]:'';
}

function getGuid() {
    $charid = strtoupper(md5(uniqid(mt_rand(), true)));
    $hyphen = '';// "-"
    $uuid = substr($charid, 0, 8).$hyphen
        .substr($charid, 8, 4).$hyphen
        .substr($charid,12, 4).$hyphen
        .substr($charid,16, 4).$hyphen
        .substr($charid,20,12);
    return $uuid;
}

/**
 * 检查手机号码格式
 * @param $mobile 手机号码
 */
function check_mobile($mobile){
    if(preg_match('/1[34578]\d{9}$/',$mobile))
        return true;
    return false;
}

function getCompanyName($id){
    $data=db('company')->cache('companyData')->column('name','Id');
    return getValue($data,$id);
}
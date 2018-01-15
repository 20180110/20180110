<?php
namespace app\index\controller;
use think\Db;
class Union extends Auth{
    /*门派评论*/
    public function unionComment($id=''){
        if(empty($id)){
            return updateResult(0,'参数错误');
        }
        $comment=Db::name('union_comment')->alias('u')->field('u.*,r.user_name,r.user_face_img')->join('user r','u.user_id=r.id')->where('u.union_id',$id)->select();
        return updateResult($comment);
    }
}
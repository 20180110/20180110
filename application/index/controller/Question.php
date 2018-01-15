<?php
namespace app\index\controller;
use think\Db;
class Question
{
    /*分类*/
    public function catList()
    {
        $where['status']=1;
        $data=Db::name('question_cat')->where($where)->select();
        return updateResult($data);
    }

    /*问答列表*/
    public function questionList(){
        $where['status']=1;
        $data=Db::name('question')->where($where)->select();
        return updateResult($data);
    }

    /*回答列表*/
    public function answerList($id=''){
        if(empty($id)){
            return updateResult(0,'参数错误');
        }
        $data=Db::name('answer')->alias('a')->field('a.*,u.nickname as answer_user_Invitation,n.name as union_name,n.union_img')
            ->join('user u','u.id=a.answer_user_id')->join('union n','n.id=u.union_id','left')
            ->where('question_id',$id)->select();
        return updateResult($data);
    }

    /*点赞*/
    public function like($id=''){
        if(!empty($id)){
            return updateResult(0,'参数错误');
        }
        $obj=new Auth();
        // 启动事务
        Db::startTrans();
        try{
            $where['answer_id']=$id;
            $where['user_id']=UID;
            $find=Db::name('answer_islike')->where($where)->find();
            if($find){
                return updateResult(0,'已经操作过不能再操作');
            }
            Db::name('answer')->where('id', UID)->setInc('like');
            $data=['user_id'=>UID,'answer_id'=>$id,'create_time'=>request()->time(),'is_like'=>1];
            Db::name('answer_islike')->insert($data);
            // 提交事务
            Db::commit();
            return updateResult(1);
        } catch (\Exception $e) {
            // 回滚事务
            Db::rollback();
            return updateResult(0);
        }

    }

    /*鄙视*/
    public function unlike($id=''){
        if(!empty($id)){
            return updateResult(0,'参数错误');
        }
        $obj=new Auth();
        // 启动事务
        Db::startTrans();
        try{
            $where['answer_id']=$id;
            $where['user_id']=UID;
            $find=Db::name('answer_islike')->where($where)->find();
            if($find){
                return updateResult(0,'已经操作过不能再操作');
            }
            Db::name('answer')->where('id', UID)->setInc('bishi');
            $data=['user_id'=>UID,'answer_id'=>$id,'create_time'=>request()->time(),'is_like'=>0];
            Db::name('answer_islike')->insert($data);
            // 提交事务
            Db::commit();
            return updateResult(1);
        } catch (\Exception $e) {
            // 回滚事务
            Db::rollback();
            return updateResult(0);
        }

    }

    /*提交问题*/
    public function tj_question(){
        $obj=new Auth();
        $data=input();
        $data['cat_id']=$data['cat'];
        $data['type']=$data['rewardType'];
        $data['integral']=$data['rewardVal'];
        $data['Invitation_id']=$data['invitation'];
        $data['text']=$data['content'];
        $data['create_time']=request()->time();
        $data['id']=getGuid();
        $data['user_id']=UID;
        $res=Db::name('question')->insert($data);
        return updateResult($res);
    }

    /*回答提交*/
    public function msg($id='',$answer=''){
        if(empty($id) || empty($answer)){
            return updateResult(0,'参数错误');
        }
        trace();
        $obj=new Auth();
        $data['question_id']=$id;
        $data['answer']=$answer;
        $data['create_time']=request()->time();
        $data['answer_user_id']=UID;
        $res=Db::name('answer')->insert($data);
        return updateResult($res);
    }
}

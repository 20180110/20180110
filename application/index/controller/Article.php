<?php
namespace app\index\controller;
class Article extends base
{
    /*添加文章分类*/
    public function catAdd()
    {
        $data=$this->buildParam(['name'=>'name']);
        $model=model('ArticleCat');
        $result=$model->catAdd($data);
        return updateResult($result,$model->getError());
    }
    /*文章分类详情*/
    public function catInfo($id=''){
        $model=model('ArticleCat');
        $result=$model->catInfo($id);
        return updateResult($result,$model->getError());
    }
    /*编辑文章分类*/
    public function catEdit(){
        $data=$this->buildParam(['id'=>'id','name'=>'name']);
        $model=model('ArticleCat');
        $result=$model->catEdit($data);
        return updateResult($result,$model->getError());
    }
    /*删除文章分类*/
    public function catDel($id=''){
        $model=model('ArticleCat');
        $result=$model->catDel($id);
        return updateResult($result,$model->getError());
    }
    /*文章分类列表*/
    public function catList(){
        $where=$this->buildWhere(['name']);
        $model=model('ArticleCat');
        $result=$model->catList($where);
        return updateResult($result,$model->getError());
    }

    /*启用禁用分类*/
    public function catStat(){
        $data=$this->buildParam(['id'=>'id','status'=>'status']);
        $model=model('ArticleCat');
        $result=$model->catStat($data);
        return updateResult($result,$model->getError());
    }

    /*新增文章*/
    public function articleAdd()
    {
        $data=$this->request->only(['title','cat','text','status']);
        $model=model('ArticleContent');
        $result=$model->articleAdd($data);
        return updateResult($result,$model->getError());
    }
    /*编辑文章*/
    public function articleEdit()
    {
        $data=$this->request->only(['id','title','cat','text','status','is_top']);
        $model=model('ArticleContent');
        $result=$model->articleEdit($data);
        return updateResult($result,$model->getError());
    }
    /*文章列表*/
    public function articleList()
    {
        $where=$this->buildWhere(['status','cat','title:like']);
        $model=model('ArticleContent');
        $data=$model->articleList($where);
        return json_encode($data);
    }
    /*文章排序*/
    public function articleSort(){
        $arr=input('arr/a');
        //$arr=['10'=>"1",'11'=>"2"];
        $model=model('ArticleContent');
        $result=$model->articleSort($arr);
        return updateResult($result,$model->getError());
    }
    /*文章删除*/
    public function articleDel(){
        $where=$this->request->only('ids');
        if(empty($where)){
            return updateResult(0,'参数错误');
        }
        $idArr=explode(',',$where['ids']);
        $model=model('ArticleContent');
        $result=$model->ArticleDel($idArr);
        return updateResult($result,$model->getError());
    }
    /*排序列表*/
    public function sortList(){
        $where=$this->buildWhere(['status|1','cat','name:like']);
        $model=model('ArticleContent');
        $data=$model->sortList($where);
        return updateResult($data);
    }
    /*文章详情*/
    public function articleDetail($id=''){
        $model=model('ArticleContent');
        $result=$model->articleDetail($id);
        return updateResult($result,$model->getError());
    }

    /*文章 置顶和取消*/
    public function articleTop(){
        $data=$this->buildParam(['id'=>'id','is_top'=>'is_top']);
        $model=model('ArticleContent');
        $result=$model->articleTop($data);
        return updateResult($result,$model->getError());
    }
}

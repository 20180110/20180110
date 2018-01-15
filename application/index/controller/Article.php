<?php
namespace app\index\controller;
use think\Db;
class Article extends Init
{

    public function articleList()
    {
        $where['status']=1;
        $data=Db::name('article_content')->limit(8)->where($where)->select();
        return updateResult($data);
    }
}

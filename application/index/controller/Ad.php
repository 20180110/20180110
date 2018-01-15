<?php
namespace app\index\controller;
use think\Db;
class Ad extends Init
{

    public function adList()
    {
        $where['status']=1;
        $data=Db::name('ad_content')->where($where)->select();
        return updateResult($data);
    }
}

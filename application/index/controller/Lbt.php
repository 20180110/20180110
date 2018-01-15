<?php
namespace app\index\controller;
use think\Controller;
class Lbt extends Init
{
    public function lbtList()
    {
        $data=model('LbtContent')->lbtList();
        return updateResult($data);
    }
}

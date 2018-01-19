<?php
namespace app\index\controller;
use think\Controller;
class Index extends Controller
{
	public function _initialize(){
		parent::_initialize();
		$is_login=cookie('loginData');
		if(!$is_login){
			$this->redirect('index/login/index');
		}
	}
    public function index()
    {
        return $this->fetch();
    }

    public function loginout(){
    	cookie('loginData',null);
    	$this->redirect('index/login/index');
    }
}

<?php
namespace app\cner\controller;
use app\cner\controller\Base;
use think\Session;

class Index extends Base{
	public function index(){
		$this->isLogin();
		$admin=Session::get('admin');
		return $this->fetch();
	}
	public function welcome(){
		return $this->fetch();
	}
}
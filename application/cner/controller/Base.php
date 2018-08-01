<?php

namespace app\cner\controller;
use think\Controller;
use think\Session;

class Base extends Controller{
	protected function isLogin(){
		 if(!Session::has('admin')){
            $this->error('用户未登录',url('admin/adminLogin'));
        }
	}
}
<?php
namespace app\mobile\controller;
use think\Controller;
class About extends controller{
    public function callme(){
    	$res=db('fdc_store')->select();
    	$this->assign('store',$res);
        return $this->fetch();
    }
}
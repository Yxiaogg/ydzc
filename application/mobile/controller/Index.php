<?php
namespace app\mobile\controller;
use think\Controller;
use think\Session;
class Index extends controller{
	public function index(){
		$sale=db('fdc_sale')->order('sale_creatime desc')->limit(4)->select();
		$rental=db('fdc_rental')->order('rental_creatime desc')->limit(4)->select();
		$data=[
           'sale'=>$sale,
           'rental'=>$rental,
		];
		$this->assign($data);
		return $this->fetch();
	}
	public function rand_str($len = 6, $type = '', $addChars = '') {	  
		$str =mt_rand(100000,999999);
	    return $str;

	}
	public function postform(){
		$data=input('post.');
		$validate=validate('Validates');
   		$post=[
           'name'=>$data['name'],
           'phone'=>$data['phone'],
           'address'=>$data['address'],
           'home_name'=>$data['home_name'],
           'des'=>$data['des'],
           'create_time'=>time(),
           'type'=>$data['type'],
   		];
        if($validate->scene('addpost')->check($data)){
        		$res=db('fdc_entrust')->insert($post);
            if($res){
              return show(1,'提交成功');
            }else{
              return show(0,'添加失败');
            }
        }else{
            return show(0,$validate->getError());
        }
	}
}
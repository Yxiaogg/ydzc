<?php

namespace app\cner\controller;

use app\cner\controller\Base;

use think\Session;



class Sugg extends Base{

	public function suggestList(){

		$count=db('fdc_sugg')->count();

		$res=db('fdc_sugg')->order('sugg_creatime desc')->paginate(10);





		$data=[

			'count'=>$count,

			'sugg'=>$res,

		];

		$this->assign($data);

		return $this->fetch();

	}



	//删除意见

	public function suggDel(){

		$sugg_id=$_GET['sugg_id'];

		if(db('fdc_sugg')->where('sugg_id',$sugg_id)->delete()){

			$this->success('删除成功');

		}else{

			$this->error('连接数据库失败');

		}

	}

	public function entrust(){
		$res=db('fdc_entrust')->paginate(10);
		$this->assign('en',$res);
		return $this->fetch();
	}

	public function entruscdel(){
		$id=input('get.id');
        $res=db('fdc_entrust')->where('id',$id)->delete();
        if($res){
            return true;
        }else{
            return show(0,'删除失败');
        }
	}

}


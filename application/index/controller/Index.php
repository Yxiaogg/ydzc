<?php
namespace app\index\controller;
use think\Controller;
use think\Session;
class Index extends controller
{
    public function index()
    {
    	$sale=db('fdc_rental')->order('rental_creatime desc')->limit(10)->select();
    	$news=db('fdc_article')->order('article_creatime desc')->limit(4)->select();
        $ader1=db('fdc_ader')->where('type',0)->find();
        $ader2=db('fdc_ader')->where('type',1)->find();
        $ader3=db('fdc_ader')->where('type',2)->find();
        $res=db('fdc_store')->select();
        $video=db('fdc_video')->find();
    
        for($i=0;$i<count($res);$i++){
            $data1[$i]['title']=$res[$i]['name'];
            $data1[$i]['tel']=$res[$i]['phone'];
            $data1[$i]['point']=$res[$i]['point'];
            $data1[$i]['address']=$res[$i]['address'];
        }
    	$data=[
    		'sale'=>$sale,
    		'news'=>$news,
            'ader1'=>$ader1,
            'ader2'=>$ader2,
            'ader3'=>$ader3,
            'point'=>json_encode($data1),
            'vi'=>$video,
    	];
        $ader=db('fdc_ader')->select();
    	$this->assign($data);
        return $this->fetch();
    }
    public function construct(){
        return $this->fetch();
    }
}

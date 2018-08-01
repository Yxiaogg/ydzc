<?php
namespace app\mobile\controller;
use think\Controller;
class Rental extends controller{
     public function index(){
     	$saprice=db('fdc_renprice')->select();
        $area=db('fdc_area')->select();
     	$sub=db('fdc_subway')->select();
     	$rental=db('fdc_rental')->order('rental_creatime desc')->select();
     	$data=[
     		'area'=>$area,
            'sub'=>$sub,
            'rental'=>$rental,
            'saprice'=>$saprice,
            'sb'=>'',
            'ar'=>'',
            'sap'=>'',
     	];
     	$this->assign($data);
     	return $this->fetch();
     }
     public function rentalby(){
     	$arr=input('get.');
     	$saprice=db('fdc_renprice')->select();
        $area=db('fdc_area')->select();
     	$sub=db('fdc_subway')->select();
        if(array_key_exists("sort",$arr)){
            $sort=$arr['sort'];
        }else{
            $sort='';
        }   
        if(array_key_exists("price",$arr)){
            $price=$arr['price'];
        }else{
            $price='';
        }    	
        if(array_key_exists("sp_id",$arr)){
     		$sp=$arr['sp_id'];
     	}else{
     		$sp='';
     	}
     	if(array_key_exists("sb",$arr)){
     		$sb=$arr['sb'];
     	}else{
     		$sb='';
     	}
     	if(array_key_exists("ar",$arr)){
     		$ar=$arr['ar'];
     	}else{
     		$ar='';
     	}
        if($sort='pd'){
            $rental=db('fdc_rental')->order('rental_price asc')->select();
        }elseif($sort='pa'){
            $rental=db('fdc_rental')->order('rental_price desc')->select();
        }
        if($price='ad'){
            $rental=db('fdc_rental')->order('rental_area asc')->select();
        }elseif($price='aa') {
            $rental=db('fdc_rental')->order('rental_area desc')->select();
        }
     	if($sb==0&&$sp==0&&$ar==0){
     		$rental=db('fdc_rental')->order('rental_creatime desc')->select();
     	}elseif($sb==0&&$sp==0){
     		$sql=[
     		'rental_area'=>['<=',$ar],
     	    ];	
     	    $rental=db('fdc_rental')->where($sql)->order('rental_creatime desc')->select();
     	}elseif($ar==0&&$sp==0){
     		$sql=[
     		'rental_subway'=>$sb,
     	    ];
     	    $rental=db('fdc_rental')->where($sql)->order('rental_creatime desc')->select();
     	}elseif ($ar==0&&$sb==0) {
     		$sql=[
     		'rental_price'=>['<=',$sp],
     	    ];
     	    $rental=db('fdc_rental')->where($sql)->order('rental_creatime desc')->select();
     	}elseif ($ar==0) {
     		$sql=[
     		'rental_subway'=>$sb,
     		'rental_price'=>['<=',$sp],
     	     ];
     	     $rental=db('fdc_rental')->where($sql)->order('rental_creatime desc')->select();
     	}elseif ($sb==0) {
     		$sql=[
     		'rental_area'=>['<=',$ar],
     		'rental_price'=>['<=',$sp],
     	    ];
     	    $rental=db('fdc_rental')->where($sql)->order('rental_creatime desc')->select();
     	}
     	elseif ($sp==0) {
     		$sql=[
            'rental_subway'=>$sb,
            'rental_area'=>['<=',$ar],
     	    ];
     	    $rental=db('fdc_rental')->where($sql)->order('rental_creatime desc')->select();
     	}
     	else{
            $sql=[
            'rental_subway'=>$sb,
            'rental_area'=>['<=',$ar],
            'rental_price'=>['<=',$sp],
            ];
            $rental=db('fdc_rental')->where($sql)->order('rental_creatime desc')->select();
     	}    	
     	$data=[
            'sap'=>$sp,
            'sb'=>$sb,
            'ar'=>$ar,
            'area'=>$area,
            'sub'=>$sub,
            'rental'=>$rental,
            'saprice'=>$saprice,
     	];
     	$this->assign($data);
     	return $this->fetch();
     }
     public function rentaldet(){
        $rid=input('param.rid');
        $res=db('fdc_rental')->where('rental_id',$rid)->find();
        $renclass=$res['rental_class'];
        $sub=$res['rental_subway'];
        $tres=db('fdc_rental')->where('rental_class',$renclass)->whereOr('rental_subway',$sub)->limit(4)->select();
        $data=[
            'rdet'=>$res,
            'tres'=>$tres,
        ];
        $this->assign($data);
        return $this->fetch();
     }
}
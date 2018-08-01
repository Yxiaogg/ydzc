<?php
namespace app\mobile\controller;
use think\Controller;
class Sale extends controller{
    public function index(){
     	$saprice=db('fdc_saprice')->select();
        $area=db('fdc_area')->select();
     	$sub=db('fdc_subway')->select();
     	$sale=db('fdc_sale')->order('sale_creatime desc')->select();
     	$data=[
     		'area'=>$area,
            'sub'=>$sub,
            'sale'=>$sale,
            'saprice'=>$saprice,
            'sb'=>'',
            'ar'=>'',
            'sap'=>'',
     	];
     	$this->assign($data);
     	return $this->fetch();
    }
    public function salesp(){
     	$arr=input('get.');
     	$saprice=db('fdc_saprice')->select();
        $area=db('fdc_area')->select();
     	$sub=db('fdc_subway')->select();
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
     	if($sb==0&&$sp==0&&$ar==0){
     		$sale=db('fdc_sale')->order('sale_creatime desc')->select();
     	}elseif($sb==0&&$sp==0){
     		$sql=[
     		'sale_area'=>['<=',$ar],
     	    ];	
     	    $sale=db('fdc_sale')->where($sql)->order('sale_creatime desc')->select();
     	}elseif($ar==0&&$sp==0){
     		$sql=[
     		'sale_subway'=>$sb,
     	    ];
     	    $sale=db('fdc_sale')->where($sql)->order('sale_creatime desc')->select();
     	}elseif ($ar==0&&$sb==0) {
     		$sql=[
     		'sale_price'=>['<=',$sp],
     	    ];
     	    $sale=db('fdc_sale')->where($sql)->order('sale_creatime desc')->select();
     	}elseif ($ar==0) {
     		$sql=[
     		'sale_subway'=>$sb,
     		'sale_price'=>['<=',$sp],
     	     ];
     	     $sale=db('fdc_sale')->where($sql)->order('sale_creatime desc')->select();
     	}elseif ($sb==0) {
     		$sql=[
     		'sale_area'=>['<=',$ar],
     		'sale_price'=>['<=',$sp],
     	    ];
     	    $sale=db('fdc_sale')->where($sql)->order('sale_creatime desc')->select();
     	}
     	elseif ($sp==0) {
     		$sql=[
            'sale_subway'=>$sb,
            'sale_area'=>['<=',$ar],
     	    ];
     	    $sale=db('fdc_sale')->where($sql)->order('sale_creatime desc')->select();
     	}
     	else{
            $sql=[
            'sale_subway'=>$sb,
            'sale_area'=>['<=',$ar],
            'sale_price'=>['<=',$sp],
            ];
            $sale=db('fdc_sale')->where($sql)->order('sale_creatime desc')->select();
     	}    	
     	$data=[
            'sap'=>$sp,
            'sb'=>$sb,
            'ar'=>$ar,
            'area'=>$area,
            'sub'=>$sub,
            'sale'=>$sale,
            'saprice'=>$saprice,
     	];
     	$this->assign($data);
     	return $this->fetch();
    }
    public function saledet(){
        $sid=input('param.sid');
        $res=db('fdc_sale')->where('sale_id',$sid)->find();
        $renclass=$res['sale_class'];
        $sub=$res['sale_subway'];
        $tres=db('fdc_sale')->where('sale_class',$renclass)->whereOr('sale_subway',$sub)->limit(4)->select();
        $data=[
            'rdet'=>$res,
            'tres'=>$tres,
        ];
        $this->assign($data);
        return $this->fetch();
    }
}
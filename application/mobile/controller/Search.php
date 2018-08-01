<?php
namespace app\mobile\controller;
use think\Controller;
class Search extends controller{
	public function index(){
		$renprice=db('fdc_renprice')->select();
		$saprice=db('fdc_saprice')->select();
        $area=db('fdc_area')->select();
     	$sub=db('fdc_subway')->select();
     	$data=[
     		'area'=>$area,
            'sub'=>$sub,
            'sp'=>$saprice,
            'renprice'=>$renprice,
     	];
     	$this->assign($data);
        return $this->fetch();
	} 
	public function search(){
		$input=input('get.');
		$type=$input['district'];
		$sub=$input['subway'];
		$area=$input['rentablearea'];
		$rprice=$input['price'];
		$sprice=$input['tprice'];
		$key=$input['keyboard'];
		if($type=='出售'){
			$data=[];
			if($sub!=0&&$area!=0&&$sprice!=0&&$key!=''){
				$num=strpos($sub,'号');
				$sub=substr($sub,0,$num);
				$data=[
					"sale_subway"=>$sub,
					"sale_area"=>['<=',$area],
					'sale_price'=>['<=',$sprice],
					'sale_name'=>$key,
				];
				$saprice=db('fdc_saprice')->select();
                $area=db('fdc_area')->select();
     	        $sub=db('fdc_subway')->select();
				$sale=db('fdc_sale')->where($data)->select();
				$ad=[
                    'saprice'=>$saprice,
                    'area'=>$area,
                    'sub'=>$sub,
                    'sale'=>$sale,
                    'sb'=>'',
                    'ar'=>'',
                    'sap'=>'',
				];
                $this->assign($ad);
                return $this->fetch('sale/index');
				exit;
			}
			if($sub!=0&&$area!=0&&$sprice!=0){
				$num=strpos($sub,'号');
				$sub=substr($sub,0,$num);
				$data=[
					"sale_subway"=>$sub,
					"sale_area"=>['<=',$area],
					'sale_price'=>['<=',$sprice],
				];
				$saprice=db('fdc_saprice')->select();
                $area=db('fdc_area')->select();
     	        $sub=db('fdc_subway')->select();
				$sale=db('fdc_sale')->where($data)->select();
                $ad=[
                    'saprice'=>$saprice,
                    'area'=>$area,
                    'sub'=>$sub,
                    'sale'=>$sale,
                    'sb'=>'',
                    'ar'=>'',
                    'sap'=>'',
				];
                $this->assign($ad);
                return $this->fetch('sale/index');
				exit;
			}
			if($sub!=0&&$area!=0&&$key!=''){
				$num=strpos($sub,'号');
				$sub=substr($sub,0,$num);
				$data=[
					"sale_subway"=>$sub,
					"sale_area"=>['<=',$area],
					'sale_name'=>$key,
				];
				$saprice=db('fdc_saprice')->select();
                $area=db('fdc_area')->select();
     	        $sub=db('fdc_subway')->select();
				$sale=db('fdc_sale')->where($data)->select();
                $ad=[
                    'saprice'=>$saprice,
                    'area'=>$area,
                    'sub'=>$sub,
                    'sale'=>$sale,
                    'sb'=>'',
                    'ar'=>'',
                    'sap'=>'',
				];
                $this->assign($ad);
                return $this->fetch('sale/index');
				exit;
			}
			if($sub!=0&&$sprice!=0&&$key!=''){
				$num=strpos($sub,'号');
				$sub=substr($sub,0,$num);
				$data=[
					"sale_subway"=>$sub,
					'sale_price'=>['<=',$sprice],
					'sale_name'=>$key,
				];
				$saprice=db('fdc_saprice')->select();
                $area=db('fdc_area')->select();
     	        $sub=db('fdc_subway')->select();
				$sale=db('fdc_sale')->where($data)->select();
                $ad=[
                    'saprice'=>$saprice,
                    'area'=>$area,
                    'sub'=>$sub,
                    'sale'=>$sale,
                    'sb'=>'',
                    'ar'=>'',
                    'sap'=>'',
				];
                $this->assign($ad);
                return $this->fetch('sale/index');
				exit;
			}
			if($area!=0&&$sprice!=0&&$key!=''){
				$data=[
					"sale_area"=>['<=',$area],
					'sale_price'=>['<=',$sprice],
					'sale_name'=>$key,
				];
				$saprice=db('fdc_saprice')->select();
                $area=db('fdc_area')->select();
     	        $sub=db('fdc_subway')->select();
				$sale=db('fdc_sale')->where($data)->select();
                $ad=[
                    'saprice'=>$saprice,
                    'area'=>$area,
                    'sub'=>$sub,
                    'sale'=>$sale,
                    'sb'=>'',
                    'ar'=>'',
                    'sap'=>'',
				];
                $this->assign($ad);
                return $this->fetch('sale/index');
				exit;
			}
			if($sub!=0&&$area!=0){
				$num=strpos($sub,'号');
				$sub=substr($sub,0,$num);
				$data=[
					"sale_subway"=>$sub,
					"sale_area"=>['<=',$area],
				];
				$saprice=db('fdc_saprice')->select();
                $area=db('fdc_area')->select();
     	        $sub=db('fdc_subway')->select();
				$sale=db('fdc_sale')->where($data)->select();
                $ad=[
                    'saprice'=>$saprice,
                    'area'=>$area,
                    'sub'=>$sub,
                    'sale'=>$sale,
                    'sb'=>'',
                    'ar'=>'',
                    'sap'=>'',
				];
                $this->assign($ad);
                return $this->fetch('sale/index');
				exit;
			}
			if($sub!=0&&$sprice!=0){
				$num=strpos($sub,'号');
				$sub=substr($sub,0,$num);
				$data=[
					"sale_subway"=>$sub,
					'sale_price'=>['<=',$sprice],
				];
				$saprice=db('fdc_saprice')->select();
                $area=db('fdc_area')->select();
     	        $sub=db('fdc_subway')->select();
				$sale=db('fdc_sale')->where($data)->select();
                $ad=[
                    'saprice'=>$saprice,
                    'area'=>$area,
                    'sub'=>$sub,
                    'sale'=>$sale,
                    'sb'=>'',
                    'ar'=>'',
                    'sap'=>'',
				];
                $this->assign($ad);
                return $this->fetch('sale/index');
				exit;
			}
			if($sub!=0&&$key!=''){
				$num=strpos($sub,'号');
				$sub=substr($sub,0,$num);
				$data=[
					"sale_subway"=>$sub,
					'sale_name'=>$key,
				];
				$saprice=db('fdc_saprice')->select();
                $area=db('fdc_area')->select();
     	        $sub=db('fdc_subway')->select();
				$sale=db('fdc_sale')->where($data)->select();
                $ad=[
                    'saprice'=>$saprice,
                    'area'=>$area,
                    'sub'=>$sub,
                    'sale'=>$sale,
                    'sb'=>'',
                    'ar'=>'',
                    'sap'=>'',
				];
                $this->assign($ad);
                return $this->fetch('sale/index');
				exit;
			}
			if($area!=0&&$sprice!=0){
				$data=[
					"sale_area"=>['<=',$area],
					'sale_price'=>['<=',$sprice],
				];
				$saprice=db('fdc_saprice')->select();
                $area=db('fdc_area')->select();
     	        $sub=db('fdc_subway')->select();
				$sale=db('fdc_sale')->where($data)->select();
                $ad=[
                    'saprice'=>$saprice,
                    'area'=>$area,
                    'sub'=>$sub,
                    'sale'=>$sale,
                    'sb'=>'',
                    'ar'=>'',
                    'sap'=>'',
				];
                $this->assign($ad);
                return $this->fetch('sale/index');
				exit;
			}
			if($area!=0&&$key!=''){
				$data=[
					"sale_area"=>['<=',$area],
					'sale_name'=>$key,
				];
				$saprice=db('fdc_saprice')->select();
                $area=db('fdc_area')->select();
     	        $sub=db('fdc_subway')->select();
				$sale=db('fdc_sale')->where($data)->select();
                $ad=[
                    'saprice'=>$saprice,
                    'area'=>$area,
                    'sub'=>$sub,
                    'sale'=>$sale,
                    'sb'=>'',
                    'ar'=>'',
                    'sap'=>'',
				];
                $this->assign($ad);
                return $this->fetch('sale/index');
				exit;
			}
			if($sprice!=0&&$key!=''){
				$data=[
					'sale_price'=>['<=',$sprice],
					'sale_name'=>$key,
				];
				$saprice=db('fdc_saprice')->select();
                $area=db('fdc_area')->select();
     	        $sub=db('fdc_subway')->select();
				$sale=db('fdc_sale')->where($data)->select();
                $ad=[
                    'saprice'=>$saprice,
                    'area'=>$area,
                    'sub'=>$sub,
                    'sale'=>$sale,
                    'sb'=>'',
                    'ar'=>'',
                    'sap'=>'',
				];
                $this->assign($ad);
                return $this->fetch('sale/index');
				exit;
			}
			if($sub!=0){
				$num=strpos($sub,'号');
				$sub=substr($sub,0,$num);
				$data=[
					"sale_subway"=>$sub,
				];
				$saprice=db('fdc_saprice')->select();
                $area=db('fdc_area')->select();
     	        $sub=db('fdc_subway')->select();
				$sale=db('fdc_sale')->where($data)->select();
                $ad=[
                    'saprice'=>$saprice,
                    'area'=>$area,
                    'sub'=>$sub,
                    'sale'=>$sale,
                    'sb'=>'',
                    'ar'=>'',
                    'sap'=>'',
				];
                $this->assign($ad);
                return $this->fetch('sale/index');
				exit;
			}
			if($area!=0){
				$data=[
					"sale_area"=>['<=',$area],
				];
				$saprice=db('fdc_saprice')->select();
                $area=db('fdc_area')->select();
     	        $sub=db('fdc_subway')->select();
				$sale=db('fdc_sale')->where($data)->select();
                $ad=[
                    'saprice'=>$saprice,
                    'area'=>$area,
                    'sub'=>$sub,
                    'sale'=>$sale,
                    'sb'=>'',
                    'ar'=>'',
                    'sap'=>'',
				];
                $this->assign($ad);
                return $this->fetch('sale/index');
				exit;
			}
			if($sprice!=0){
				$data=[
					'sale_price'=>['<=',$sprice],
				];
				$saprice=db('fdc_saprice')->select();
                $area=db('fdc_area')->select();
     	        $sub=db('fdc_subway')->select();
				$sale=db('fdc_sale')->where($data)->select();
                $ad=[
                    'saprice'=>$saprice,
                    'area'=>$area,
                    'sub'=>$sub,
                    'sale'=>$sale,
                    'sb'=>'',
                    'ar'=>'',
                    'sap'=>'',
				];
                $this->assign($ad);
                return $this->fetch('sale/index');
				exit;
			}if($key!=''){
				$data=[
					'sale_name'=>$key,
				];
				$saprice=db('fdc_saprice')->select();
                $area=db('fdc_area')->select();
     	        $sub=db('fdc_subway')->select();
                $sale=db('fdc_sale')->where($data)->select();
                $ad=[
                    'saprice'=>$saprice,
                    'area'=>$area,
                    'sub'=>$sub,
                    'sale'=>$sale,
                    'sb'=>'',
                    'ar'=>'',
                    'sap'=>'',
				];
                $this->assign($ad);
                return $this->fetch('sale/index');
				exit;
			}
            if($sub==0&&$area==0&&$sprice==0&&$key==''){
            	$saprice=db('fdc_saprice')->select();
                $area=db('fdc_area')->select();
     	        $sub=db('fdc_subway')->select();
                $sale=array();
                $ad=[
                    'saprice'=>$saprice,
                    'area'=>$area,
                    'sub'=>$sub,
                    'sale'=>$sale,
                    'sb'=>'',
                    'ar'=>'',
                    'sap'=>'',
				];
                $this->assign($ad);
                return $this->fetch('sale/index');
				exit;
            }
		}else{
			$data=[];
			if($sub!=0&&$area!=0&&$rprice!=0&&$key!=''){
				$num=strpos($sub,'号');
				$sub=substr($sub,0,$num);
				$data=[
					"rental_subway"=>$sub,
					"rental_area"=>['<=',$area],
					'rental_price'=>['<=',$rprice],
					'rental_name'=>$key,
				];
				$saprice=db('fdc_renprice')->select();
                $area=db('fdc_area')->select();
     	        $sub=db('fdc_subway')->select();
				$rental=db('fdc_rental')->where($data)->select();
				$ad=[
                    'saprice'=>$saprice,
                    'area'=>$area,
                    'sub'=>$sub,
                    'rental'=>$rental,
                    'sb'=>'',
                    'ar'=>'',
                    'sap'=>'',
				];
                $this->assign($ad);
                return $this->fetch('rental/index');
				exit;
			}
			if($sub!=0&&$area!=0&&$rprice!=0){
				$num=strpos($sub,'号');
				$sub=substr($sub,0,$num);
				$data=[
					"rental_subway"=>$sub,
					"rental_area"=>['<=',$area],
					'rental_price'=>['<=',$rprice],
				];
				$saprice=db('fdc_renprice')->select();
                $area=db('fdc_area')->select();
     	        $sub=db('fdc_subway')->select();
				$rental=db('fdc_rental')->where($data)->select();
                $ad=[
                    'saprice'=>$saprice,
                    'area'=>$area,
                    'sub'=>$sub,
                    'rental'=>$rental,
                    'sb'=>'',
                    'ar'=>'',
                    'sap'=>'',
				];
                $this->assign($ad);
                return $this->fetch('rental/index');
				exit;
			}
			if($sub!=0&&$area!=0&&$key!=''){
				$num=strpos($sub,'号');
				$sub=substr($sub,0,$num);
				$data=[
					"rental_subway"=>$sub,
					"rental_area"=>['<=',$area],
					'rental_name'=>$key,
				];
				$saprice=db('fdc_renprice')->select();
                $area=db('fdc_area')->select();
     	        $sub=db('fdc_subway')->select();
				$rental=db('fdc_rental')->where($data)->select();
                $ad=[
                    'saprice'=>$saprice,
                    'area'=>$area,
                    'sub'=>$sub,
                    'rental'=>$rental,
                    'sb'=>'',
                    'ar'=>'',
                    'sap'=>'',
				];
                $this->assign($ad);
                return $this->fetch('rental/index');
				exit;
			}
			if($sub!=0&&$rprice!=0&&$key!=''){
				$num=strpos($sub,'号');
				$sub=substr($sub,0,$num);
				$data=[
					"rental_subway"=>$sub,
					'rental_price'=>['<=',$rprice],
					'rental_name'=>$key,
				];
				$saprice=db('fdc_renprice')->select();
                $area=db('fdc_area')->select();
     	        $sub=db('fdc_subway')->select();
				$rental=db('fdc_rental')->where($data)->select();
                $ad=[
                    'saprice'=>$saprice,
                    'area'=>$area,
                    'sub'=>$sub,
                    'rental'=>$rental,
                    'sb'=>'',
                    'ar'=>'',
                    'sap'=>'',
				];
                $this->assign($ad);
                return $this->fetch('rental/index');
				exit;
			}
			if($area!=0&&$rprice!=0&&$key!=''){
				$data=[
					"rental_area"=>['<=',$area],
					'rental_price'=>['<=',$rprice],
					'rental_name'=>$key,
				];
				$saprice=db('fdc_renprice')->select();
                $area=db('fdc_area')->select();
     	        $sub=db('fdc_subway')->select();
				$rental=db('fdc_rental')->where($data)->select();
                $ad=[
                    'saprice'=>$saprice,
                    'area'=>$area,
                    'sub'=>$sub,
                    'rental'=>$rental,
                    'sb'=>'',
                    'ar'=>'',
                    'sap'=>'',
				];
                $this->assign($ad);
                return $this->fetch('rental/index');
				exit;
			}
			if($sub!=0&&$area!=0){
				$num=strpos($sub,'号');
				$sub=substr($sub,0,$num);
				$data=[
					"rental_subway"=>$sub,
					"rental_area"=>['<=',$area],
				];
				$saprice=db('fdc_renprice')->select();
                $area=db('fdc_area')->select();
     	        $sub=db('fdc_subway')->select();
				$rental=db('fdc_rental')->where($data)->select();
                $ad=[
                    'saprice'=>$saprice,
                    'area'=>$area,
                    'sub'=>$sub,
                    'rental'=>$rental,
                    'sb'=>'',
                    'ar'=>'',
                    'sap'=>'',
				];
                $this->assign($ad);
                return $this->fetch('rental/index');
				exit;
			}
			if($sub!=0&&$rprice!=0){
				$num=strpos($sub,'号');
				$sub=substr($sub,0,$num);
				$data=[
					"rental_subway"=>$sub,
					'rental_price'=>['<=',$rprice],
				];
				$saprice=db('fdc_renprice')->select();
                $area=db('fdc_area')->select();
     	        $sub=db('fdc_subway')->select();
				$rental=db('fdc_rental')->where($data)->select();
                $ad=[
                    'saprice'=>$saprice,
                    'area'=>$area,
                    'sub'=>$sub,
                    'rental'=>$rental,
                    'sb'=>'',
                    'ar'=>'',
                    'sap'=>'',
				];
                $this->assign($ad);
                return $this->fetch('rental/index');
				exit;
			}
			if($sub!=0&&$key!=''){
				$num=strpos($sub,'号');
				$sub=substr($sub,0,$num);
				$data=[
					"rental_subway"=>$sub,
					'rental_name'=>$key,
				];
				$saprice=db('fdc_renprice')->select();
                $area=db('fdc_area')->select();
     	        $sub=db('fdc_subway')->select();
				$rental=db('fdc_rental')->where($data)->select();
                $ad=[
                    'saprice'=>$saprice,
                    'area'=>$area,
                    'sub'=>$sub,
                    'rental'=>$rental,
                    'sb'=>'',
                    'ar'=>'',
                    'sap'=>'',
				];
                $this->assign($ad);
                return $this->fetch('rental/index');
				exit;
			}
			if($area!=0&&$rprice!=0){
				$data=[
					"rental_area"=>['<=',$area],
					'rental_price'=>['<=',$rprice],
				];
				$saprice=db('fdc_renprice')->select();
                $area=db('fdc_area')->select();
     	        $sub=db('fdc_subway')->select();
				$rental=db('fdc_rental')->where($data)->select();
                $ad=[
                    'saprice'=>$saprice,
                    'area'=>$area,
                    'sub'=>$sub,
                    'rental'=>$rental,
                    'sb'=>'',
                    'ar'=>'',
                    'sap'=>'',
				];
                $this->assign($ad);
                return $this->fetch('rental/index');
				exit;
			}
			if($area!=0&&$key!=''){
				$data=[
					"rental_area"=>['<=',$area],
					'rental_name'=>$key,
				];
				$saprice=db('fdc_renprice')->select();
                $area=db('fdc_area')->select();
     	        $sub=db('fdc_subway')->select();
				$rental=db('fdc_rental')->where($data)->select();
                $ad=[
                    'saprice'=>$saprice,
                    'area'=>$area,
                    'sub'=>$sub,
                    'rental'=>$rental,
                    'sb'=>'',
                    'ar'=>'',
                    'sap'=>'',
				];
                $this->assign($ad);
                return $this->fetch('rental/index');
				exit;
			}
			if($rprice!=0&&$key!=''){
				$data=[
					'rental_price'=>['<=',$rprice],
					'rental_name'=>$key,
				];
				$saprice=db('fdc_tensaprice')->select();
                $area=db('fdc_area')->select();
     	        $sub=db('fdc_subway')->select();
				$rental=db('fdc_rental')->where($data)->select();
                $ad=[
                    'saprice'=>$saprice,
                    'area'=>$area,
                    'sub'=>$sub,
                    'rental'=>$rental,
                    'sb'=>'',
                    'ar'=>'',
                    'sap'=>'',
				];
                $this->assign($ad);
                return $this->fetch('rental/index');
				exit;
			}
			if($sub!=0){
				$num=strpos($sub,'号');
				$sub=substr($sub,0,$num);
				$data=[
					"rental_subway"=>$sub,
				];
				$saprice=db('fdc_renprice')->select();
                $area=db('fdc_area')->select();
     	        $sub=db('fdc_subway')->select();
				$rental=db('fdc_rental')->where($data)->select();
                $ad=[
                    'saprice'=>$saprice,
                    'area'=>$area,
                    'sub'=>$sub,
                    'rental'=>$rental,
                    'sb'=>'',
                    'ar'=>'',
                    'sap'=>'',
				];
                $this->assign($ad);
                return $this->fetch('rental/index');
				exit;
			}
			if($area!=0){
				$data=[
					"rental_area"=>['<=',$area],
				];
				$saprice=db('fdc_renprice')->select();
                $area=db('fdc_area')->select();
     	        $sub=db('fdc_subway')->select();
				$rental=db('fdc_rental')->where($data)->select();
                $ad=[
                    'saprice'=>$saprice,
                    'area'=>$area,
                    'sub'=>$sub,
                    'rental'=>$rental,
                    'sb'=>'',
                    'ar'=>'',
                    'sap'=>'',
				];
                $this->assign($ad);
                return $this->fetch('rental/index');
				exit;
			}
			if($rprice!=0){
				$data=[
					'rental_price'=>['<=',$sprice],
				];
				$saprice=db('fdc_renprice')->select();
                $area=db('fdc_area')->select();
     	        $sub=db('fdc_subway')->select();
				$rental=db('fdc_rental')->where($data)->select();
                $ad=[
                    'saprice'=>$saprice,
                    'area'=>$area,
                    'sub'=>$sub,
                    'rental'=>$rental,
                    'sb'=>'',
                    'ar'=>'',
                    'sap'=>'',
				];
                $this->assign($ad);
                return $this->fetch('rental/index');
				exit;
			}
			if($key!=''){
				$data=[
					'rental_name'=>$key,
				];
				$saprice=db('fdc_renprice')->select();
                $area=db('fdc_area')->select();
     	        $sub=db('fdc_subway')->select();
                $rental=db('fdc_rental')->where($data)->select();
                $ad=[
                    'saprice'=>$saprice,
                    'area'=>$area,
                    'sub'=>$sub,
                    'rental'=>$rental,
                    'sb'=>'',
                    'ar'=>'',
                    'sap'=>'',
				];
                $this->assign($ad);
                return $this->fetch('rental/index');
				exit;
			}
			if($sub==0&&$area==0&&$rprice==0&&$key==''){
            	$saprice=db('fdc_saprice')->select();
                $area=db('fdc_area')->select();
     	        $sub=db('fdc_subway')->select();
                $sale=array();
                $ad=[
                    'saprice'=>$saprice,
                    'area'=>$area,
                    'sub'=>$sub,
                    'sale'=>$sale,
                    'sb'=>'',
                    'ar'=>'',
                    'sap'=>'',
				];
                $this->assign($ad);
                return $this->fetch('sale/index');
				exit;
            }
		}

	}
}
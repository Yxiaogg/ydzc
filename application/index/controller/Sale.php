<?php

namespace app\index\controller;

use think\Controller;

use think\Session;

class Sale extends controller

{



	//售卖

    public function sale()

    {

        if(!empty($_GET['key'])){

           $key=$_GET['key'];

        }else{

            $key=0;

        }
       
        if(!empty($_GET['subway'])){

            $subway=$_GET['subway'];

        }else{

            $subway=0;

        }

        if(!empty($_GET['ring'])){

            $ring=$_GET['ring'];

        }else{

            $ring=0;

        }

        if(!empty($_GET['district'])){

            $district=$_GET['district'];

        }else{

            $district=0;

        }

        if(!empty($_GET['region'])){

            $region=$_GET['region'];

        }else{

            $region=0;

        }

        if(!empty($_GET['area'])){

            $area=$_GET['area'];

        }else{

            $area=0;

        }

        if(!empty($_GET['price'])){

            $price=$_GET['price'];

        }else{

            $price=0;

        }



        if(!empty($_GET['List'])){

            $List=$_GET['List'];

        }else{

            $List=0;

        }

        

        

        $res=db('fdc_sale');

        if($subway!=0){

            $res->where('sale_subway',$subway);

            // $where.=' AND rental_subway='.$subway;

        }

        if($key!==0){

            $res->where('sale_name','like','%'.$key.'%');
        }

        if($area!=0){

            $res->where('sale_area','<=',$area);

             // $where.=' AND rental_area<='.$area;

        }

        if($ring!=0){
            $res->where('sale_ring',$ring);
        }

        if($price!=0){

            $res->where('sale_price','<=',$price);

        }

         if($district!=0){
            $res->where('sale_district',$district);
        }

        if($region!=0){
            $res->where('sale_region',$region);
        }


        if($List!=0){

            if($List==1){

                $res->order('sale_creatime desc');

            }

            if($List==2){

                 $res->order('sale_price desc');

            }

        }
        

        $res1=$res->paginate(5,false,['query' => request()->param()]);

        



       

        $count=count($res1);

        if($count==0){

            $text='抱歉,没有符合条件的结果';

        }else{

            $text='';

        }

        $saleRole=db('fdc_sale')->order('sale_role desc')->limit(3)->select();

        $s=db('fdc_subway')->order('subway_num asc')->select();

        $a=db('fdc_area')->order('area_num asc')->select();

        $p=db('fdc_saprice')->order('saprice_num asc')->select();

        $r=db('fdc_ring')->order('ring_num asc')->select();

        $d=db('fdc_district')->order('id asc')->select();

        $reg=db('fdc_region')->where('pid',$district)->select();


    	$data=[

    		

    		'saleInfo'=>$res1,

            'saleRole'=>$saleRole,

            'text'=>$text,

            'subway'=>$s,

            'area'=>$a,

            'saprice'=>$p,

            'ring'=>$r,

            'dis'=>$d,

            'renprice'=>$p,

            'ri'=>$ring,

            'd'=>$district,

            'reg'=>$reg,

            'r'=>$region,

            'sub'=>$subway,

            'ar'=>$area,

            'pr'=>$price,


    	];

    	$this->assign($data);

        return $this->fetch();

    }







     public function saleDetail(){

        $sale_id=$_GET['sale_id'];

        $res=db('fdc_sale')->where('sale_id',$sale_id)->find();

        $data=[

            'saleInfo'=>$res,

        ];

        $this->assign($data);

        return $this->fetch();

    }





}


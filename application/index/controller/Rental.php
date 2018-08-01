<?php

namespace app\index\controller;

use think\Controller;

use think\Session;

class Rental extends controller

{



	//出租

    public function rental()

    {



        // foreach ($_GET as $key => $value) {

        //     if(!empty($_GET[$key])){

        //         $data[$key]=$value;

        //     }

        // }

        // if(!empty($data)) $c=count($data);

        // else $c =0;

        

        // print_r($c.'<br/>');

        // if(!empty($data)) print_r($data);

       



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

        

       

        // $data=[

        //     'subway'=>$subway,

        //     'area'=>$area,

        //     'price'=>$price,

        //     'List'=>$List,

        // ];

        // print_r($data);

        $res=db('fdc_rental');

        if($subway!=0){

            $res->where('rental_subway',$subway);

            // $where.=' AND rental_subway='.$subway;

        }
        
        if($ring!=0){
            $res->where('rental_ring',$ring);
        }

        if($area!=0){

            $res->where('rental_area','<=',$area);

             // $where.=' AND rental_area<='.$area;

        }


         if($district!=0){
            $res->where('rental_district',$district);
        }

        if($region!=0){
            $res->where('rental_region',$region);
        }

        if($price!=0){

            $res->where('rental_price','<=',$price);

        }



        if($List!=0){

            if($List==1){

                $res->order('rental_creatime desc');

            }

            if($List==2){

                 $res->order('rental_price desc');

            }

        }

// paginate(5,false,['query' => request()->param()])

        $res1=$res->paginate(5,false,['query' => request()->param()]);

        



        $count=count($res1);

        if($count==0){

            $text='抱歉,没有符合条件的结果';

        }else{

            $text='';

        }



        //热门排行查询

        $rentalRole=db('fdc_rental')->order('rental_role desc')->limit(3)->select();



        $s=db('fdc_subway')->order('subway_num asc')->select();

        $a=db('fdc_area')->order('area_num asc')->select();

        $p=db('fdc_renprice')->order('renprice_num asc')->select();

        $r=db('fdc_ring')->order('ring_num asc')->select();

        $d=db('fdc_district')->order('id asc')->select();

        $reg=db('fdc_region')->where('pid',$district)->select();

    	$data=[

    		'count'=>$count,

    		'rentalInfo'=>$res1,

            'rentalRole'=>$rentalRole,

            'text'=>$text,

            'subway'=>$s,

            'area'=>$a,

            'ring'=>$r,

            'dis'=>$d,

            'renprice'=>$p,

            'sub'=>$subway,

            'ar'=>$area,

            'pr'=>$price,

            'ri'=>$ring,

            'd'=>$district,

            'reg'=>$reg,

            'r'=>$region,



    	];

    	$this->assign($data);

        return $this->fetch();

    }



    



   



    public function rentalDetail(){

        $rental_id=$_GET['rental_id'];

        $res=db('fdc_rental')->where('rental_id',$rental_id)->find();

        $data=[

            'rentalInfo'=>$res,

        ];

        $this->assign($data);

        return $this->fetch();

    }

}


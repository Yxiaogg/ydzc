<?php

// +----------------------------------------------------------------------

// | ThinkPHP [ WE CAN DO IT JUST THINK ]

// +----------------------------------------------------------------------

// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.

// +----------------------------------------------------------------------

// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )

// +----------------------------------------------------------------------

// | Author: 流年 <liu21st@gmail.com>

// +----------------------------------------------------------------------



// 应用公共文件



function getUserStatus($status){

	if($status==1){

		echo '已经启用';

	}else{

		echo '已被禁用';

	}

}



function getAdminStatus($status){

	if($status==1){

		echo '已经启用';

	}else{

		echo '已被禁用';

	}

}



function getAdminRole($role){

	if($role==1){

		echo '超级管理员';

	}else{

		echo '员工';

	}

}





function getRentalArea($area){

	echo $area."平米";

}



function getRentalPrice($price){

	echo $price."万元";

}



function getRentalSubway($i){

	if($i==0){

		echo '无';

	}else{

		echo $i."号线";

	}

	

}





function getRole($i){

	if($i==0){

		echo '未置顶';

	}elseif($i==1){

		echo '热门新闻';

	}elseif ($i==2) {

		echo '视频新闻';

	}elseif ($i==3) {

		echo '图片新闻';

	}else{

		echo '导航新闻';

	}

}

function show($status,$message){

    $result=[

        'status'=>$status,

        'message'=>$message,

    ];

    exit(json_encode($result));

}

function getTree($cate,$pid=0,$level=0,$html='----'){

    $arr=array();

    foreach ($cate as $v){

        if($v['pid']==$pid){

            $v['level']=$level+1;

            $v['html']=str_repeat($html,$level);

            $arr[]=$v;

            $arr=array_merge($arr,getTree($cate,$v['cid'],$level+1,$html));

        }

    }

    return $arr;

}

function getlecturer($res){

	if($res==0){

		echo '特约导师';

	}else{

		echo '高级导师';

	}

}

function getroles($res){

	if($res==0){

		echo '否';

	}else{

		echo '是';

	}

}

function getentype($res){

	if($res==0){

		echo '出租';

	}elseif ($res==1) {

		echo '出售';

	}elseif ($res==2) {

		echo '求租';

	}elseif ($res==3) {

		echo '求售';

	}elseif ($res==4) {

		echo '报事';

	}elseif ($res==5) {

		echo '报修';

	}elseif ($res==6) {

		echo '建议';

	}elseif ($res==7){

		echo '投诉';

	}elseif ($res==8) {

		echo '租赁业务';

	}elseif ($res==9){

		echo '买卖业务';

	}

}


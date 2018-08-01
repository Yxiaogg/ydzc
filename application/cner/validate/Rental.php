<?php

namespace app\cner\validate;

use think\Validate;

use app\cner\Rental as Model;

class Rental extends Validate{

	

	protected $rule=[

		//租房信息上传

		['rental_name','require','租房名字不能为空'],

		['rental_subway','require','如果附近没有地铁请填写0'],

		['rental_address','require','地址不能为空'],

		['rental_area','require','面积不能为空'],

		['rental_price','require','租金不能为空'],

		['rental_class','require','类别不能为空'],

		['rental_des','require','简介不能为空'],

		 
        ['identifier','number','编号参数不正确'],


	];





	protected $scene=[

		'rentalAdd'=>['rental_name','rental_subway','rental_address','rental_area','rental_price','rental_class','rental_des'],

		

	];

}
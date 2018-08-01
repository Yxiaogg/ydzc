<?php

namespace app\cner\validate;

use think\Validate;

use app\cner\Sale as Model;

class Sale extends Validate{

	

	protected $rule=[

		//卖信息上传

		['sale_name','require','卖房名字不能为空'],

		['sale_subway','require','如果附近没有地铁请填写0'],

		['sale_address','require','地址不能为空'],

		['sale_area','require','面积不能为空'],

		['sale_price','require','卖金不能为空'],

		['sale_class','require','类别不能为空'],

		['sale_des','require','简介不能为空'],

		['identifier','number','编号参数错误'],



	];





	protected $scene=[

		'saleAdd'=>['sale_name','sale_subway','sale_address','sale_area','sale_price','sale_class','sale_des','identifier'],

		

	];

}
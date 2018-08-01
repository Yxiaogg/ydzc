<?php

namespace app\index\validate;

use think\Validate;

use app\index\Entrust as Model;

class Entrust extends Validate{



	protected $rule=[

		['phone','require|number','请填写联系方式|联系方式格式不正确'],
		

	];





	protected $scene=[

		'enrental'=>['phone'],

	];

}
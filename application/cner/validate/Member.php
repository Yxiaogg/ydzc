<?php

namespace app\cner\validate;

use think\Validate;

use app\cner\Member as Model;

class Member extends Validate{



	protected $rule=[
		//应聘
		['employ_title','require','职位名称不能为空'],

		['employ_address','require','工作地址不能为空'],

		['employ_num','require','招聘人数不能为空'],

		['employ_store','require','工作分店不能为空'],

		['employ_des','require','工作描述不能为空'],


		//团队管理

		['title','require','菜单名称不能为空'],

		['content','require','内容不能为空'],

		//组织文化

		['planning_title','require','菜单名称不能为空'],

		['planning_content','require','内容不能为空'],







	];





	protected $scene=[

		'employAdd'=>['employ_title','employ_address','employ_num','employ_store','employ_des'],

		'welfareAdd'=>['title','content'],

		'planningAdd'=>['planning_title','planning_content'],



	];

}
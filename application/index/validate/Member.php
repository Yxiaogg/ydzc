<?php
namespace app\index\validate;
use think\Validate;
use app\index\Member as Model;

class Member extends Validate{
	//用户注册
    protected  $rule=[
       
         
        
        //意见
        ['sugg_title','require','题目不能为空'],
        ['sugg_des','require','内容不能为空'],
        ['sugg_tel','require|length:11','手机号不能为空|手机号长度错误']
    ];
    
    
    protected $scene=[
     

        //意见
        'suggestion'=>['sugg_title','sugg_des','sugg_tel'],

    ];
    
}
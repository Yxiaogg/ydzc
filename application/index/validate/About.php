<?php

namespace app\index\validate;

use think\Validate;

use app\index\About as Model;



class About extends Validate{

	//用户注册

    protected  $rule=[

        //应聘信息

        ['resume_name','require','名字不能为空'],

        ['resume_sex','require','性别不能不选'],

        ['resume_age','require|number','年龄不能为空|必须是数字'],

        ['resume_tel','require|length:11|unique:fdc_resume','手机不能为空|手机长度不正确|手机已经使用'],

        ['resume_email','require|email|unique:fdc_resume','邮箱不能为空|邮箱格式不正确|邮箱已经使用'],

        ['resume_address','require','住址不能为空'],

        ['resume_study','require','学习经历不能为空'],

        ['resume_des','require','个人简介不能为空'],

       

    ];

    

    

    protected $scene=[

       'resume'=>['resume_tel'],



    ];

    

}
<?php
namespace app\mobile\validate;
use think\Validate;
class Validates extends Validate
{
    protected $rule = [
        ['name','require','联系人不能为空'],
        ['phone','require','手机号不能为空'],
        ['code','require','验证码不能为空'],
        ['area','require|integer','面积不能为空|面积参数不正确'],
        ['price','require|integer','价格不能为空|价格参数不正确'],
        ['address','require','地址不能为空'],
    ];
    protected $scene=[
        'addpost'=>['phone'],
    ];
}
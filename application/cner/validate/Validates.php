<?php
namespace app\cner\validate;
use think\Validate;
class Validates extends Validate
{
    protected $rule = [
        ['img','require','图片不能为空'],
        ['name','require','名称不能为空'],
        ['address','require','地址不能为空'],
        ['point','require','坐标不能为空'],
        ['phone','require','图片不能为空'],
        ['title','require','标题不能为空'],
        ['content','require','内容不能为空'],
        ['video','require','视频内容不能为空，重新选择'],
        ['rental_name','require','租房名字不能为空'],

        ['rental_subway','require','如果附近没有地铁请填写0'],

        ['rental_address','require','地址不能为空'],

        ['rental_area','require','面积不能为空'],

        ['rental_price','require','租金不能为空'],

        ['rental_class','require','类别不能为空'],

        ['rental_des','require','简介不能为空'],

        ['rental_ring','require','环线不能为空'],

        ['rental_district','require','区县不能为空'],

        ['rental_region','require','下属区域不能为空'],

        ['sale_name','require','卖房名字不能为空'],

        ['sale_subway','require','如果附近没有地铁请填写0'],

        ['sale_address','require','地址不能为空'],

        ['sale_area','require','面积不能为空'],

        ['sale_price','require','卖金不能为空'],

        ['sale_class','require','类别不能为空'],

        ['sale_des','require','简介不能为空'],

        ['identifier','number','编号参数错误'],

        ['ring_num','require|number','线路不能为空|路线必须为数字'],

        ['ring_name','require','显示不能为空'],
        
        ['desc','require','刊首语不能为空'],

        ['scr','require','内刊图片不能为空'],

    ];
    protected $scene=[
        'ader'=>['img'],
        'addstore'=>['img','name','address','point','phone'],
        'addcate'=>['name'],
        'addart'=>['title','img','content'],
        'addvideo'=>['video'],
        'rentalAdd'=>['rental_name','rental_subway','rental_address','rental_area','rental_price','rental_class','rental_des','rental_ring'],
        'saleAdd'=>['sale_name','sale_subway','sale_address','sale_area','sale_price','sale_class','sale_des','identifier'],
        'addplan'=>['content'],
        'addlecturer'=>['content','name','img'],
        'addstudent'=>['img'],
        'addring'=>['ring_num','ring_name'],
        'adddis'=>['name'],
        'addreg'=>['name'],
        'addbook'=>['title','desc','scr'],
        'addbookimg'=>['img'],
    ];
}
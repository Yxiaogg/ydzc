<?php
namespace app\index\controller;
use think\Controller;
use think\Session;
use app\index\model\Member as MemberModel;
use think\Validate;
class Member extends controller
{

	


    //意见反馈
    public function suggestion(){
       
            
            if(request()->isAjax()){
                $data=input('post.');
                $validate=validate('Member');
                if(!($validate->scene('suggestion')->check($data))){
                    $status=0;
                    $msg=$validate->getError();
                }else{
                    $time=time();
                    $user=Session::get('user');
                    $upd=[
                        'sugg_title'=>$data['sugg_title'],
                        'sugg_des'=>$data['sugg_des'],
                        'sugg_creatime'=>$time, 
                        'sugg_tel'=>$data['sugg_tel'],
                    ];
                    if(db('fdc_sugg')->insert($upd)){
                        $status=1;
                        $msg='感谢您的意见';
                    }else{
                        $status=0;
                        $msg='数据库连接失败';
                    }
                }


                return [
                    'status'=>$status,
                    'msg'=>$msg,
                ];
            }

            return $this->fetch();
       
    }



}

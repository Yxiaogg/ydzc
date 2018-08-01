<?php
namespace app\cner\controller;
class Video extends Base{
	public function index(){
		if(request()->isAjax()){
            $input=input('post.');
            $id=input('get.id');
            $validate=validate('Validates');
            if($validate->scene('addvideo')->check($input)){
                $res=db('fdc_video')->where('id',$id)->update($input);
                if($res){
                    return show(1,'上传成功');
                }else{
                    return show(0,'上传失败');
                }
            }else{
                return show(0,$validate->getError());
            }
        }else{
        	$res=db('fdc_video')->find();
        	$this->assign('vi',$res);
            return $this->fetch();
        }
	}
}
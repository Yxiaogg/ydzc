<?php
namespace app\cner\controller;
class Ader extends Base{
	public function index(){
		$res=db('fdc_ader')->select();
		$this->assign('ader',$res);
		return $this->fetch();
	}
	public function upload(){
		$file=request()->file('file');
		$url='uploads/ader';
		$info=$file->move(ROOT_PATH . 'public/static' . DS . $url);
		$filePath='uploads/ader/'.$info->getSaveName();
		if($info){
			return show(1,$filePath);
        }else{
            return show(0,$file->getError());
		}
	}
	public function edit(){
		if(request()->isAjax()){
			$id=input('get.id');
            $input=input('post.');
            $validate=validate('Validates');
            if($validate->scene('ader')->check($input)){
                $res=db('fdc_ader')->where('id',$id)->update($input);
                if($res){
                    return show(1,'修改成功');
                }else{
                    return show(0,'修改失败');
                }
            }else{
                return show(0,$validate->getError());
            }
        }else{
        	$aid=input('get.id');
        	$res=db('fdc_ader')->where('id',$aid)->find();
        	$this->assign('ader',$res);
            return $this->fetch();
        }
	}
}
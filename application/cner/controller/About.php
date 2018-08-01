<?php
namespace app\cner\controller;
class About extends Base{
    public function callmelist(){
    	$res=db('fdc_store')->select();
    	$this->assign('store',$res);
    	return $this->fetch();
    }
    public function callmeadd(){
    	if(request()->isAjax()){
            $input=input('post.');
            $validate=validate('Validates');
            if($validate->scene('addstore')->check($input)){
                $res=db('fdc_store')->insert($input);
                if($res){
                    return show(1,'提交成功');
                }else{
                    return show(0,'添加失败');
                }
            }else{
                return show(0,$validate->getError());
            }
        }else{
            return $this->fetch();
        }
    }
    public function callmedit(){
        if(request()->isAjax()){
            $input=input('post.');
            $id=input('get.id');
            $validate=validate('Validates');
            if($validate->scene('addstore')->check($input)){
                $res=db('fdc_store')->where('id',$id)->update($input);
                if($res){
                    return show(1,'修改成功');
                }else{
                    return show(0,'修改失败');
                }
            }else{
                return show(0,$validate->getError());
            }
        }else{
        	$id=input('get.id');
        	$res=db('fdc_store')->where('id',$id)->find();
        	$this->assign('st',$res);
            return $this->fetch();
        }
    }
    public function callmedelete(){
        $id=input('get.id');
        $res=db('fdc_store')->where('id',$id)->delete();
        if($res){
            return true;
        }else{
            return show(0,'删除失败');
        }
    }
}
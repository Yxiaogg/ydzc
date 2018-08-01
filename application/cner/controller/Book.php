<?php
namespace app\cner\controller;
class Book extends Base{
	public function index(){
		$res=db('fdc_book')->select();
	    $this->assign('book',$res);
        return $this->fetch();
	}
	public function bookadd(){
		if(request()->isAjax()){
            $input=input('post.');
            $time=time();
            $input['create_time']=$time;
            $validate=validate('Validates');
            if($validate->scene('addbook')->check($input)){
                $res=db('fdc_book')->insert($input);
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
	public function addimg(){
		if(request()->isAjax()){
            $input=input('post.');
            $data['img']=$input['img'];
            $id=$input['mid'];
            $validate=validate('Validates');
            if($validate->scene('addbookimg')->check($data)){
                $res=db('fdc_book')->where('id',$id)->update($data);
                if($res){
                    return show(1,'提交成功');
                }else{
                    return show(0,'添加失败');
                }
            }else{
                return show(0,$validate->getError());
            }
        }else{
		    $id=input('get.id');
		    $this->assign('id',$id);
		    return $this->fetch();
		}
	}
    public function bookdelete(){
        $id=input('get.id');
        $res=db('fdc_book')->where('id',$id)->delete();
        if($res){
            return true;
        }else{
            return show(0,'删除失败');
        }
    }
}
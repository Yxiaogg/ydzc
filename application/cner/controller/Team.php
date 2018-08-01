<?php
namespace app\cner\controller;
class Team extends Base{
	public function catelist(){
		$cate=db('fdc_teamcate')->select();
		$this->assign('cate',$cate);
        return $this->fetch();
	}
	public function cateadd(){
		if(request()->isAjax()){
            $input=input('post.');
            $validate=validate('Validates');
            if($validate->scene('addcate')->check($input)){
                $res=db('fdc_teamcate')->insert($input);
                if($res){
                    return show(1,'提交成功');
                }else{
                    return show(0,'添加失败');
                }
            }else{
                return show(0,$validate->getError());
            }
        }else{
        	$res=db('fdc_teamcate')->where('pid',0)->select();
		    $this->assign('cate',$res);
            return $this->fetch();
        }
	}
	public function catedit(){
		if(request()->isAjax()){
            $input=input('post.');
            $id=input('get.id');
            $validate=validate('Validates');
            if($validate->scene('addcate')->check($input)) {
                $res = db('fdc_teamcate')->where('cid', $id)->update($input);
                if ($res) {
                    return show(1, '修改成功');
                }else{
                    return show(0,'修改失败');
                }
            }else{
                return show(0,$validate->getError());
            }
        }else{
            $id=input('get.id');
            $res=db('fdc_teamcate')->where('cid',$id)->find();
            $cate=db('fdc_teamcate')->where('pid',0)->select();
            $this->assign('res',$res);
            $this->assign('cate',$cate);
            return $this->fetch();
        }
	}
	public function catedelete(){
		$id=input('get.id');
        $data=db('fdc_teamcate')->where('pid',$id)->select();
        if(isset($data)){
            db('fdc_teamcate')->where('pid',$id)->delete();
        }
        $res=db('fdc_teamcate')->where('cid',$id)->delete();
        if($res){
            return show(1,'删除成功');
        }else{
            return show(0,'删除失败');
        }
	}
	public function artlist(){
		$res=db('fdc_teamarticle')->select();
		$this->assign('art',$res);
        return $this->fetch();
	}
	public function artadd(){
		if(request()->isAjax()){
            $input=input('post.');
            $validate=validate('Validates');
            if($validate->scene('addart')->check($input)){
                $res=db('fdc_teamarticle')->insert($input);
                if($res){
                    return show(1,'提交成功');
                }else{
                    return show(0,'添加失败');
                }
            }else{
                return show(0,$validate->getError());
            }
        }else{
		    $res=db('fdc_teamcate')->select();
		    $cate=getTree($res);
		    $this->assign('cates',$cate);
		    return $this->fetch();
	    }
	}
	public function artedit(){
		if(request()->isAjax()){
            $input=input('post.');
            $id=input('get.id');
            $validate=validate('Validates');
            if($validate->scene('addart')->check($input)) {
                $res = db('fdc_teamarticle')->where('id', $id)->update($input);
                if ($res) {
                    return show(1, '修改成功');
                }else{
                    return show(0,'修改失败');
                }
            }else{
                return show(0,$validate->getError());
            }
        }else{
            $id=input('get.id');
            $res=db('fdc_teamarticle')->where('id',$id)->find();
            $cate=db('fdc_teamcate')->select();
            $cates=getTree($cate);
            $this->assign('res',$res);
            $this->assign('cates',$cates);
            return $this->fetch();
        }
	}
    public function artdelete(){
        $id=input('get.id');
        $res=db('fdc_teamarticle')->where('id',$id)->delete();
        if($res){
            return true;
        }else{
            return show(0,'删除失败');
        }
    }
}
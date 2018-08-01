<?php
namespace app\cner\controller;
use think\Request;
class Image extends Base{
     public function upload(){
     	$filename=input('get.filename');
		$file=request()->file('file');
		$url='uploads/'.$filename;
		$info=$file->rule('uniqid')->move(ROOT_PATH . 'public/static' . DS . $url);
		$filePath='uploads/'.$filename.'/'.$info->getSaveName();
		if($info){
			return show(1,$filePath);
        }else{
            return show(0,$file->getError());
		}
	}
	public function uploadthumb(){
		$filename=input('get.filename');
		$file=request()->file('file');
		$url='uploads/'.$filename;
		$info=$file->rule('uniqid')->move(ROOT_PATH . 'public/static' . DS . $url);
		$filePath1='uploads/'.$filename.'/'.$info->getSaveName();
		$image = \think\Image::open(ROOT_PATH . 'public/static' . DS . $filePath1);
		$filePath='uploads/'.$filename.'/'.'thumb-'.$info->getSaveName();
		$image->thumb(400,400)->save(ROOT_PATH . 'public/static' . DS . $filePath);
		if($info){
			return show(1,$filePath);
        }else{
            return show(0,$file->getError());
		}
	}
	public function uploadstudent(){
		$filename=input('get.filename');
		$file=request()->file('file');
		$url='uploads/'.$filename;
		$info=$file->rule('uniqid')->move(ROOT_PATH . 'public/static' . DS . $url);
		$filePath1='uploads/'.$filename.'/'.$info->getSaveName();
		$image = \think\Image::open(ROOT_PATH . 'public/static' . DS . $filePath1);
		$filePath='uploads/'.$filename.'/'.'thumb-'.$info->getSaveName();
		$filePath_s='uploads/'.$filename.'/'.'small-'.$info->getSaveName();
		$image->thumb(630,400,6)->save(ROOT_PATH . 'public/static' . DS . $filePath);
		$image->thumb(110,66,6)->save(ROOT_PATH . 'public/static' . DS . $filePath_s);
		$data=[
           'img'=>$filePath,
           's_img'=>$filePath_s,
		];
		if($info){
			return show(1,$data);
        }else{
            return show(0,$file->getError());
		}
	}
	public function uploadarticle(){
		$filename=input('get.filename');
		$file=request()->file('file');
		$url='uploads/'.$filename;
		$info=$file->rule('uniqid')->move(ROOT_PATH . 'public/static' . DS . $url);
		$filePath1='uploads/'.$filename.'/'.$info->getSaveName();
		$image = \think\Image::open(ROOT_PATH . 'public/static' . DS . $filePath1);
		$filePath='uploads/'.$filename.'/'.'thumb-'.$info->getSaveName();
		$image->thumb(190,147,6)->save(ROOT_PATH . 'public/static' . DS . $filePath);
		if($info){
			return show(1,$filePath);
        }else{
            return show(0,$file->getError());
		}
	}
	public function uploadfigurearticle(){
		$filename=input('get.filename');
		$file=request()->file('file');
		$url='uploads/'.$filename;
		$info=$file->rule('uniqid')->move(ROOT_PATH . 'public/static' . DS . $url);
		$filePath1='uploads/'.$filename.'/'.$info->getSaveName();
		$image = \think\Image::open(ROOT_PATH . 'public/static' . DS . $filePath1);
		$filePath='uploads/'.$filename.'/'.'thumb-'.$info->getSaveName();
		$image->thumb(400,300,6)->save(ROOT_PATH . 'public/static' . DS . $filePath);
		if($info){
			return show(1,$filePath);
        }else{
            return show(0,$file->getError());
		}
	}
	 public function uploadbook(){
	 	$request = Request::instance();
        $http=$request->domain();
	 	$filename=input('post.filename');
		$file=request()->file('file');
		$url='uploads/book/'.$filename;
		$info=$file->move(ROOT_PATH. '/public/static' . DS . $url,'');
		$filePath1=$url.'/'.$info->getSaveName();
		$image = \think\Image::open(ROOT_PATH . 'public/static' . DS . $filePath1);
		$image->thumb(518,686,6)->save(ROOT_PATH . 'public/static' . DS . $filePath1);
		$str= substr($info->getSaveName(),0,strrpos($info->getSaveName(),'.'));
		$strr=$str.'-large.jpg';
		$filePath2=$url.'/'.$strr;
		$image->thumb(1115,1477,6)->save(ROOT_PATH . 'public/static' . DS . $filePath2);
		$filePath=$http. '/public/static' . DS . $url;
		if($info){
			return show(1,$filePath);
        }else{
            return show(0,$file->getError());
		}
	}
}
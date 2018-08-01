<?php
namespace app\index\controller;
use think\Controller;
use think\Session;
class About extends controller
{
	//走进英地
    public function about()
    {
        $res=db('fdc_video')->find();
        $this->assign('vi',$res);
        return $this->fetch();
    }
    //新闻资讯
    public function news(){
        $res=db('fdc_article')->order('article_creatime desc')->paginate(6);
        $hot=db('fdc_article')->where('article_role',1)->limit(3)->select();
        $banner=db('fdc_article')->where('article_role',4)->order('article_creatime desc')->limit(5)->select();
        $vnews=db('fdc_article')->where('article_role',2)->order('article_creatime desc')->limit(4)->select();
        $inews=db('fdc_article')->where('article_role',3)->order('article_creatime desc')->limit(4)->select();
        $data=[
            'article'=>$res,
            'hot'=>$hot,
            'banner'=>$banner,
            'vnews'=>$vnews,
            'inews'=>$inews,
        ];
        $this->assign($data);
    	return $this->fetch();
    }
    //详细新闻
    public function newsDetail(){
        $article_id=$_GET['article_id'];
        $res=db('fdc_article')->where('article_id',$article_id)->find();
        $data=[
            'article'=>$res,
        ];
        $this->assign($data);
        return $this->fetch();
    }
    //招聘
    public function employ(){
        $res=db('fdc_employ')->where('is_left',0)->select();
        $info=db('fdc_employ')->where('is_left',1)->select();
        $data=[
             'employ_l'=>$info,
            'employ'=>$res,
        ];
        $this->assign($data);
    	return $this->fetch();
    }
    //招聘信息细节
    public function employDetail(){
        $employ_id=$_GET['employ_id'];
        $res=db('fdc_employ')->where('employ_id',$employ_id)->find();
        $data=[
            'employ'=>$res,
        ];
        $this->assign($data);
        return $this->fetch();
    }
    //职业规划
    public function planning(){
        $where = isset($_GET['id']) ? 'planning_id='.$_GET['id'] : '';
        $res=db('fdc_planning')->where($where)->find();
        $planning_l=db('fdc_planning')->select();
        $this->assign('pl',$res);
        $this->assign('planning_l',$planning_l);
        return $this->fetch();
    }
    //管理团队
    public function welfare(){
        $where = isset($_GET['id']) ? 'id='.$_GET['id'] : '';
        $res=db('fdc_welfare')->where($where)->find();
        $welfare_l=db('fdc_welfare')->select();
        $this->assign('pl',$res);
        $this->assign('welfare_l',$welfare_l);
        return $this->fetch();
    }
    //学习中心
    public function course(){
        $res=db('fdc_course')->find();
        $this->assign('c',$res);
        return $this->fetch();
    }
    //导师风采
    public function lecturer(){
        $res=db('fdc_lecturer')->where('type',0)->select();
        $gj=db('fdc_lecturer')->where('type',1)->select();
        $data=[
            'ty'=>$res,
            'gj'=>$gj,
        ];
        $this->assign($data);
        return $this->fetch();
    }
    //讲师详情
    public function lecturerlist(){
        $id=input('get.id');
        $res=db('fdc_lecturer')->where('id',$id)->find();
        $this->assign('le',$res);
        return $this->fetch();
    }
    //学员
    public function students(){
        $res=db('fdc_students')->select();
        $this->assign('st',$res);
        return $this->fetch();
    }
    //应聘
    public function resume(){
        if(request()->isAjax()){
            $employ_id=$_GET['employ_id'];
            $employ_title=$_GET['employ_title'];
            $res=db('fdc_employ')->where('employ_id',$employ_id)->find();
            $data=input('post.');
            $validate=validate('About');
            if(!($validate->scene('resume')->check($data))){
                $status=0;
                $msg=$validate->getError();
            }else{
                $upd=[
                    'resume_name'=>$data['resume_name'],
                    'resume_sex'=>$data['resume_sex'],
                    'resume_age'=>$data['resume_age'],
                    'resume_tel'=>$data['resume_tel'],
                    'resume_email'=>$data['resume_email'],
                    'resume_address'=>$data['resume_address'],
                    'resume_title'=>$employ_title,
                    'resume_study'=>$data['resume_study'],
                    'resume_des'=>$data['resume_des'],
                ];
                if(db('fdc_resume')->insert($upd)){
                    $status=1;
                    $msg='应聘消息已发往公司，请耐心等待';
                }else{
                    $status=0;
                    $msg='连接数据库失败';
                }
            }
            return [
                'status'=>$status,
                'msg'=>$msg,
            ];
        }
        $employ_id=$_GET['employ_id'];
        $res=db('fdc_employ')->where('employ_id',$employ_id)->find();
        $data=[
            'employ'=>$res,
        ];
        $this->assign($data);
        return $this->fetch();
    }
    //联络我们
    public function contract(){
        $res=db('fdc_store')->select();
        for($i=0;$i<count($res);$i++){
            $data[$i]['title']=$res[$i]['name'];
            $data[$i]['tel']=$res[$i]['phone'];
            $data[$i]['point']=$res[$i]['point'];
            $data[$i]['address']=$res[$i]['address'];
        }
        $this->assign('point',json_encode($data));
        return $this->fetch();
    }
    //产品中心
    public function team(){
        if(!array_key_exists('cid',input('get.'))){
           $res=db('fdc_teamcate')->find();
           $cid=$res['cid'];
        }else{
             $cid=input('get.cid');
        }
        $cate=db('fdc_teamcate')->where('pid',0)->select();
        $art=db('fdc_teamarticle')->where('cid',$cid)->find();
        $data=[
           'cate'=>$cate,
           'art'=>$art,
           'cid'=>$cid,
        ];
        $this->assign($data);
        return $this->fetch();
    }
    //团队建设
    public function figure(){
        if(!array_key_exists('cid',input('get.'))){
           $c=db('fdc_figurecate')->find();
           $cid=$c['cid'];
        }else{
             $cid=input('get.cid');
        }
        $cate=db('fdc_figurecate')->where('pid',0)->select();
        $scate=db('fdc_figurecate')->where('pid',$cid)->select();
        if(!$scate){
           $scate ='暂无数据';
           $data=0;
        }
        $nscate=db('fdc_figurecate')->where('pid',$cid)->order('cid desc')->limit(3)->select();
        for ($i=0; $i < count($nscate); $i++) {
            $data[]=$nscate[$i]['cid'];
        }
        $article=db('fdc_figurearticle')->where('cid','in',$data)->select();
        if(request()->isAjax()){
           $cid=input('post.cid');
           $nscate=db('fdc_figurecate')->where('cid',$cid)->find();
           $article=db('fdc_figurearticle')->where('cid',$cid)->find();
           $data=[
              'cate'=>"<li class='cur'>".$nscate['name']."</li>",
              'artcont'=>"<div class='tab-cont' style='display:block;'><ul class='sec-th clearfix'><li style='display:block'><img src='/public/static/".$article['img']."'><p>".$article['title']."</p></li></ul><div class='sec-tc'><div class='tc-para' style='display:block;'><p>".$article['content']."</p></div></div></div>"
           ];
           $info=$data;
           return show(1,$info);
        }
        $res=[
           'cate'=>$cate,
           'sc'=>$scate,
           'nsc'=>$nscate,
           'cid'=>$cid,
           'art'=>$article,
        ];
        $this->assign($res);
        return $this->fetch();
    }
    //内刊
    public function book(){
        $res=db('fdc_book')->select();
        $this->assign('book',$res);
        return $this->fetch();
    }
    //内刊详情
    public function booklist(){
        if(request()->isAjax()){
            $id=input('get.id');
            $res=db('fdc_book')->field('scr')->where('id',$id)->find();
            return show(1,$res['scr'].'/');
        }
        $id=input('get.id');
        $res=db('fdc_book')->field('page')->where('id',$id)->find();
        $page=$res['page'];
        $this->assign('page',$page);
        return $this->fetch();
    }
}

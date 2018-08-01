<?php



namespace app\cner\controller;



use app\cner\controller\Base;



use think\Session;



class Member extends Base{







	//招聘



	public function memberEmploy(){



		$count=db('fdc_employ')->count();



		$res=db('fdc_employ')->order('employ_creatime desc')->paginate(10);



		$data=[



			'count'=>$count,



			'employ'=>$res,



		];



		$this->assign($data);



		return $this->fetch();



	}







	//添加招聘信息



	public function employAdd(){



		if(request()->isAjax()){



			$data=input('post.');



			$validate=validate('Member');



			if(!($validate->scene('employAdd')->check($data))){



				$status=0;



				$msg=$validate->getError();



			}else{



				$time=time();







				$upd=[



					'employ_title'=>$data['employ_title'],



					'employ_address'=>$data['employ_address'],



					'employ_num'=>$data['employ_num'],



					'employ_store'=>$data['employ_store'],



					'employ_des'=>$data['employ_des'],



					'employ_creatime'=>$time,



					'identifier'=>$data['identifier'],



					'is_left'=>$data['is_left'],



				];



				if(db('fdc_employ')->insert($upd)){



					$status=1;



					$msg='插入成功';



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







	//删除招聘信息



	public function employDel(){



		$employ_id=$_GET['employ_id'];



		if(db('fdc_employ')->where('employ_id',$employ_id)->delete()){



			$this->success('删除成功');



		}else{



			$this->error('连接数据库失败');



		}



	}







	//修改招聘信息



	public function employEdit(){



		if(request()->isAjax()){



			$employ_id=$_GET['employ_id'];



			$data=input('post.');



			$validate=validate('Member');



			if(!($validate->scene('employAdd')->check($data))){



				$status=0;



				$msg=$validate->getError();



			}else{







				$upd=[



					'employ_title'=>$data['employ_title'],



					'employ_address'=>$data['employ_address'],



					'employ_num'=>$data['employ_num'],



					'employ_store'=>$data['employ_store'],



					'employ_des'=>$data['employ_des'],



					'identifier'=>$data['identifier'],



					'is_left'=>$data['is_left'],



				];



				if(db('fdc_employ')->where('employ_id',$employ_id)->setField($upd)){



					$status=1;



					$msg='插入成功';



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







		$employ_id=$_GET['employ_id'];



		$res=db('fdc_employ')->where('employ_id',$employ_id)->find();



		$data=[



			'employ'=>$res,



		];







		$this->assign($data);



		return $this->fetch();



	}











	//应聘信息



	public function employResume(){



		$count=db('fdc_resume')->count();



		$res=db('fdc_resume')->paginate(10);



		$data=[



			'count'=>$count,



			'resume'=>$res,



		];



		$this->assign($data);



		return $this->fetch();



	}



    //应聘信息详情

    public function resumelist(){

        $id=input('get.id');

        $res=db('fdc_resume')->where('resume_id',$id)->find();

        $this->assign('res',$res);

        return $this->fetch();

    }







	//删除应聘信息



	public function resumeDel(){



		$resume_id=$_GET['resume_id'];



		if(db('fdc_resume')->where('resume_id',$resume_id)->delete()){



			$this->success('删除成功');



		}else{



			$this->error('连接数据库失败');



		}



	}







	//应聘者详细信息



	public function resumeDetail(){



		$resume_id=$_GET['resume_id'];



		$res=db('fdc_resume')->where('resume_id',$resume_id)->find();



		$data=['resume'=>$res];



		$this->assign($data);











		return $this->fetch();



	}



    //组织文化列表

    public function planning(){

        $count=db('fdc_planning')->count();



        $res=db('fdc_planning')->order('planning_id desc')->paginate(10);



        $data=[



            'count'=>$count,



            'planning'=>$res,



        ];



        $this->assign($data);



        return $this->fetch();

    }

//添加招聘信息



    public function planningAdd(){



        if(request()->isAjax()){

            $data=input('post.');



            $validate=validate('Member');



            if(!($validate->scene('planningAdd')->check($data))){



                $status=0;



                $msg=$validate->getError();



            }else{



                $time=time();




                $upd=[



                    'planning_title'=>$data['planning_title'],



                    'planning_content'=>$data['planning_content'],



                ];



                if(db('fdc_planning')->insert($upd)){



                    $status=1;



                    $msg='插入成功';



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
    //修改团队管理



    public function planningEdit(){

        if(request()->isAjax()){

            $planning_id=$_GET['planning_id'];

            $data=input('post.');

            $validate=validate('Member');

            if(!($validate->scene('planningAdd')->check($data))){

                $status=0;

                $msg=$validate->getError();


            }else{

                $upd=[

                    'planning_title'=>$data['planning_title'],

                    'planning_content'=>$data['planning_content'],

                ];


                if(db('fdc_planning')->where('planning_id',$planning_id)->setField($upd)){

                    $status=1;

                    $msg='修改成功';

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

        $planning_id=$_GET['planning_id'];

        $res=db('fdc_planning')->where('planning_id',$planning_id)->find();

        $data=[

            'planning'=>$res,

        ];

        $this->assign($data);

        return $this->fetch();


    }

    //删除团队管理



    public function planningDel(){

        $planning_id=$_GET['planning_id'];

        if(db('fdc_planning')->where('planning_id',$planning_id)->delete()){

            $this->success('删除成功');

        }else{

            $this->error('连接数据库失败');

        }

    }




//管理团队列表
    public function welfare(){

        $count=db('fdc_welfare')->count();



        $res=db('fdc_welfare')->order('id desc')->paginate(10);



        $data=[



            'count'=>$count,



            'welfare'=>$res,



        ];



        $this->assign($data);



        return $this->fetch();

    }

//添加招聘信息



    public function welfareAdd(){



        if(request()->isAjax()){

            $data=input('post.');



            $validate=validate('Member');



            if(!($validate->scene('welfareAdd')->check($data))){



                $status=0;



                $msg=$validate->getError();



            }else{



                $time=time();




                $upd=[



                    'title'=>$data['title'],



                    'content'=>$data['content'],



                ];



                if(db('fdc_welfare')->insert($upd)){



                    $status=1;



                    $msg='插入成功';



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
    //修改团队管理



    public function welfareEdit(){

        if(request()->isAjax()){

            $welfare_id=$_GET['welfare_id'];

            $data=input('post.');

            $validate=validate('Member');

            if(!($validate->scene('welfareAdd')->check($data))){

                $status=0;

                $msg=$validate->getError();


            }else{

                $upd=[

                    'title'=>$data['title'],

                    'content'=>$data['content'],

                ];


                if(db('fdc_welfare')->where('id',$welfare_id)->setField($upd)){

                    $status=1;

                    $msg='修改成功';

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

        $welfare_id=$_GET['id'];

        $res=db('fdc_welfare')->where('id',$welfare_id)->find();

        $data=[

            'welfare'=>$res,

        ];

        $this->assign($data);

        return $this->fetch();


    }

    //删除团队管理



    public function welfareDel(){

        $welfare_id=$_GET['welfare_id'];

        if(db('fdc_welfare')->where('id',$welfare_id)->delete()){

            $this->success('删除成功');

        }else{

            $this->error('连接数据库失败');

        }

    }


    //学院课程

    public function course(){

    	if(request()->isAjax()){

            $input=input('post.');

            $id=input('get.id');

            $validate=validate('Validates');

            if($validate->scene('addplan')->check($input)) {

                $res = db('fdc_course')->where('id', $id)->update($input);

                if ($res) {

                    return show(1, '修改成功');

                }else{

                    return show(0,'修改失败');

                }

            }else{

                return show(0,$validate->getError());

            }

        }else{

    	$res=db('fdc_course')->find();

    	$this->assign('pl',$res);

    	return $this->fetch();

        }

    }



    //导师风采

    public function lecturer(){

    	$res=db('fdc_lecturer')->paginate(10);

    	$this->assign('le',$res);

    	return $this->fetch();

    }



    public function lectureradd(){

    	if(request()->isAjax()){

            $input=input('post.');

            $validate=validate('Validates');

            if($validate->scene('addlecturer')->check($input)){

                $res=db('fdc_lecturer')->insert($input);

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



    public function lectureredit(){

    	if(request()->isAjax()){

            $input=input('post.');

            $id=input('get.id');

            $validate=validate('Validates');

            if($validate->scene('addlecturer')->check($input)) {

                $res = db('fdc_lecturer')->where('id', $id)->update($input);

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

    	$res=db('fdc_lecturer')->where('id',$id)->find();

    	$this->assign('le',$res);

    	return $this->fetch();

        }

    }



    public function lecturerdel(){

    	$id=input('get.id');

        $res=db('fdc_lecturer')->where('id',$id)->delete();

        if($res){

            return true;

        }else{

            return show(0,'删除失败');

        }

    }



    //学员风采

    public function students(){

    	$res=db('fdc_students')->select();

    	$this->assign('students',$res);

    	return $this->fetch();

    }



	public function studentsadd(){

		if(request()->isAjax()){

            $input=input('post.');

            $validate=validate('Validates');

            if($validate->scene('addstudent')->check($input)){

                $res=db('fdc_students')->insert($input);

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



    public function studentsedit(){

    	if(request()->isAjax()){

            $input=input('post.');

            $id=input('get.id');

            $validate=validate('Validates');

            if($validate->scene('addstudent')->check($input)) {

                $res = db('fdc_students')->where('id', $id)->update($input);

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

    	$res=db('fdc_students')->where('id',$id)->find();

    	$this->assign('st',$res);

    	return $this->fetch();

        }

    }

    public function studentsdel(){

        $id=input('get.id');

        $res=db('fdc_students')->where('id',$id)->delete();

        if($res){

            return true;

        }else{

            return show(0,'删除失败');

        }

    }



    public function figurecate(){

        $cate=db('fdc_figurecate')->select();

        $info=getTree($cate);

        $this->assign('cate',$info);

        return $this->fetch();

    }

    public function figurecateadd(){

        if(request()->isAjax()){

            $input=input('post.');

            $validate=validate('Validates');

            if($validate->scene('addcate')->check($input)){

                $res=db('fdc_figurecate')->insert($input);

                if($res){

                    return show(1,'提交成功');

                }else{

                    return show(0,'添加失败');

                }

            }else{

                return show(0,$validate->getError());

            }

        }else{

        $cate=db('fdc_figurecate')->where('pid',0)->select();

        $this->assign('cate',$cate);

        return $this->fetch();

        }

    }



    public function figurecatedit(){

        if(request()->isAjax()){

            $input=input('post.');

            $id=input('get.id');

            $validate=validate('Validates');

            if($validate->scene('addcate')->check($input)) {

                $res = db('fdc_figurecate')->where('cid', $id)->update($input);

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

            $res=db('fdc_figurecate')->where('cid',$id)->find();

            $cate=db('fdc_figurecate')->where('pid',0)->select();

            $this->assign('res',$res);

            $this->assign('cate',$cate);

            return $this->fetch();

        }

    }



    public function figurecatedelete(){

        $id=input('get.id');

        $data=db('fdc_figurecate')->where('pid',$id)->select();

        if(isset($data)){

            db('fdc_figurecate')->where('pid',$id)->delete();

        }

        $res=db('fdc_figurecate')->where('cid',$id)->delete();

        if($res){

            return show(1,'删除成功');

        }else{

            return show(0,'删除失败');

        }

    }



    public function figurearticle(){

        $res=db('fdc_figurearticle')->select();

        for ($i=0; $i < count($res); $i++) {

            $cid=$res[$i]['cid'];

            $type=db('fdc_figurecate')->where('cid',$cid)->find();

            $pid=$type['pid'];

            $p=db('fdc_figurecate')->where('cid',$pid)->find();

            $res[$i]['type']=$p['name'].'--'.$type['name'];

        }

        $this->assign('art',$res);

        return $this->fetch();

    }

    public function figurearticleadd(){

        if(request()->isAjax()){

            $input=input('post.');

            $validate=validate('Validates');

            if($validate->scene('addart')->check($input)){

                $res=db('fdc_figurearticle')->insert($input);

                if($res){

                    return show(1,'提交成功');

                }else{

                    return show(0,'添加失败');

                }

            }else{

                return show(0,$validate->getError());

            }

        }else{

        $res=db('fdc_figurecate')->select();

        $cate=getTree($res);

        $this->assign('cates',$cate);

        return $this->fetch();

        }

    }



    public function figurearticledit(){

        if(request()->isAjax()){

            $input=input('post.');

            $id=input('get.id');

            $validate=validate('Validates');

            if($validate->scene('addart')->check($input)) {

                $res = db('fdc_figurearticle')->where('id', $id)->update($input);

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

        $res=db('fdc_figurearticle')->where('id',$id)->find();

        $cate=db('fdc_figurecate')->select();

        $cates=getTree($cate);

        $this->assign('res',$res);

        $this->assign('cates',$cates);

        return $this->fetch();

        }

    }



    public function figurearticledelete(){

        $id=input('get.id');

        $res=db('fdc_figurearticle')->where('id',$id)->delete();

        if($res){

            return true;

        }else{

            return show(0,'删除失败');

        }

    }

}
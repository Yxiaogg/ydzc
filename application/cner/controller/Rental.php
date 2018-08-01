<?php



namespace app\cner\controller;



use app\cner\controller\Base;



use think\Session;



class Rental extends Base{



	// 租房列表



	public function rentalList(){

        $admin=Session::get('admin');

        if ($admin['admin_role'] != 1) {

            $where = array('admin_id'=>$admin['admin_id']);

        }else{
            $where = '';
        }

		$count=db('fdc_rental')->where($where)->count();



		$res=db('fdc_rental')->where($where)->order('rental_creatime desc')->paginate(10);



		$data=[



			'count'=>$count,



			'rentalInfo'=>$res,



		];



		$this->assign($data);



		return $this->fetch();



	}







	public function add(){

        $admin=Session::get('admin');

        if(request()->isAjax()){

        	$time=time();

            $input=input('post.');

            $input['rental_creatime']=$time;

            $input['admin_id']=$admin['admin_id'];

            $validate=validate('Validates');

            if($validate->scene('rentalAdd')->check($input)){

                $res=db('fdc_rental')->insert($input);

                if($res){

                    return show(1,'提交成功');

                }else{

                    return show(0,'添加失败');

                }

            }else{

                return show(0,$validate->getError());

            }

        }else{

            $res=db('fdc_ring')->select();

            $sub=db('fdc_subway')->select();

            $dis=db('fdc_district')->select();

            $data=[

               'ring'=>$res,

               'sub'=>$sub,

               'dis'=>$dis,

            ];

            $this->assign($data);

            return $this->fetch();

        }



	}











	///租房信息修改



	public function rentalEdit(){

		if(request()->isAjax()){

            $input=input('post.');

            $id=input('get.id');

            $validate=validate('Validates');

            if($validate->scene('rentalAdd')->check($input)){

                $res=db('fdc_rental')->where('rental_id',$id)->update($input);

                if($res){

                    return show(1,'修改成功');

                }else{

                    return show(0,'修改失败');

                }

            }else{

                return show(0,$validate->getError());

            }

        }else{

            $id=input('get.rental_id');

            $res=db('fdc_rental')->where('rental_id',$id)->find();

            $ring=db('fdc_ring')->select();

            $sub=db('fdc_subway')->select();

            $dis=db('fdc_district')->select();

            $reg=db('fdc_region')->where('pid',$res['rental_district'])->select();

            $data=[

               'ring'=>$ring,

               'sub'=>$sub,

               'rentalInfo'=>$res,

               'dis'=>$dis,

               'reg'=>$reg,

            ];

            $this->assign($data);

            return $this->fetch();

        }



	}











	//删除租房信息



	public function rentalDel(){



		$id=input('get.id');

        $res=db('fdc_rental')->where('rental_id',$id)->delete();

        if($res){

            return true;

        }else{

            return show(0,'删除失败');

        }



	}



    public function rentalajax(){

        $pid=input('post.pid');

        $res=db('fdc_region')->where('pid',$pid)->select();

        $html='';

        if($res){

            foreach ($res as $k => $v) {

                $html.="<option value=".$v['id'].">".$v['name']."</option>";

            }

            return show(1,$html);

        }else{

            $html="<option value=0>暂无数据</option>";

            return show(1,$html);

        }



    }



}
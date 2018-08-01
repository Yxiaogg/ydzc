<?php



namespace app\cner\controller;



use app\cner\controller\Base;



use think\Session;



class Sale extends Base{



	//卖房列表



	public function saleList(){

        $admin=Session::get('admin');

        if ($admin['admin_role'] != 1) {

            $where = array('admin_id'=>$admin['admin_id']);

        }else{
            $where = '';
        }

		$count=db('fdc_sale')->where($where)->count();



		$res=db('fdc_sale')->where($where)->order('sale_id desc')->paginate(10);



		$data=[



			'count'=>$count,



			'saleInfo'=>$res,



		];



		$this->assign($data);



		return $this->fetch();



	}







	//卖房添加



	public function add(){

        $admin=Session::get('admin');

        if(request()->isAjax()){


        	$time=time();

            $input=input('post.');

            $input['sale_creatime']=$time;

            $input['admin_id']=$admin['admin_id'];

            $validate=validate('Validates');

            if($validate->scene('saleAdd')->check($input)){

                $res=db('fdc_sale')->insert($input);

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











	//删除



	public function saleDel(){



		$id=input('get.id');

        $res=db('fdc_sale')->where('sale_id',$id)->delete();

        if($res){

            return true;

        }else{

            return show(0,'删除失败');

        }





	}







	//编辑



	public function saleEdit(){



		if(request()->isAjax()){

            $input=input('post.');

            $id=input('get.id');

            $validate=validate('Validates');

            if($validate->scene('saleAdd')->check($input)){

                $res=db('fdc_sale')->where('sale_id',$id)->update($input);

                if($res){

                    return show(1,'修改成功');

                }else{

                    return show(0,'修改失败');

                }

            }else{

                return show(0,$validate->getError());

            }

        }else{

            $id=input('get.sale_id');

            $res=db('fdc_sale')->where('sale_id',$id)->find();

            $ring=db('fdc_ring')->select();

            $sub=db('fdc_subway')->select();

            $dis=db('fdc_district')->select();

            $reg=db('fdc_region')->where('pid',$res['sale_district'])->select();

            $data=[

               'ring'=>$ring,

               'sub'=>$sub,

               'saleInfo'=>$res,

               'dis'=>$dis,

               'reg'=>$reg,

            ];

            $this->assign($data);

            return $this->fetch();

        }

	}



    public function saleajax(){

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
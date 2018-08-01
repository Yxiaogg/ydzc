<?php

namespace app\index\controller;

use think\Controller;

use think\Session;

class Entrust extends controller

{



	//委托

    public function entrust()

    {
        $type=input('get.type');
        $this->assign('type',$type);
        return $this->fetch();

    }



    //租赁

    public function enRental(){
      $type=input('get.type');
      $this->assign('type',$type);
    	return $this->fetch();

    }

    public function sendMsg($num = 0){



    //首先生成6位随机验证码

	  	$output =$this->rand_str(6,1);

		// 发送短信

	    $sendtime = time();

	    $token = sha1(MD5("appidcnerFDCtime".$sendtime."keyHBVoe1rNQgA6htz"));

	    $url = "http://zmail.pub/cner/dc/sendSms/index.php/api/sendsms?key=HBVoe1rNQgA6htz&time=".$sendtime."&token=".$token."&sign=信儿众创&TemplateCode=TEST_FDC&param1=".$num."&param2=".$output."&param3=&num=".$num;

	        $ch = curl_init ();

            curl_setopt ( $ch, CURLOPT_URL, $url );

            curl_setopt ($ch, CURLOPT_REFERER, "yingdizichan.com");  

            curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );

            curl_setopt ( $ch, CURLOPT_CONNECTTIMEOUT, 10 );

            curl_setopt ( $ch, CURLOPT_POST, 1 ); //启用POST提交

            $file_contents = curl_exec ( $ch );print_r($file_contents);

            curl_close ( $ch );

	        // echo $url;

	        // die;

	       

	        if (json_decode($file_contents,true)['message'] == 'OK') {

		          Session::set('code',$output) ;

		          Session::set('num_send',$num) ;

		          

		          return [

					'info'=>'success',

	          	]  ;

	        }else{

	          	return [

					'info'=>'发送失败',

	          	]  ;

	        }

	  

	  	

   }

/**

		 * 生成随机字符串/数字|TP专用

		 *

		 * @param number $len

		 * @param string $type：0

		 *          字母 1 数字 其它 混合

		 * @param string $addChars

		 * @return string

		 */

			public function rand_str($len = 6, $type = '', $addChars = '') {

			  

			  $str =mt_rand(100000,999999);

			  return $str;

			}

		

   //添加租赁信息

   public function enrentalAdd(){
        $time=time();
        $data=input('post.');
        $data['create_time']=$time;
        $validate=validate('Entrust');
        if($validate->scene('enrental')->check($data)){
            $res=db('fdc_entrust')->insert($data);
            if($res){
                return show(1,'提交成功');
            }else{
                return show(0,'添加失败');
            }
        }else{
            return show(0,$validate->getError());
        }

   }


}


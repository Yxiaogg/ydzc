<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:61:"D:\xampp\htdocs\ydzc/application/index\view\about\employ.html";i:1531876854;}*/ ?>




<!DOCTYPE html>



<html> 



<head>



<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



<title>加入英地</title>



<meta name="description" content="" />



<meta name="keywords" content="" />



<link  href="__STATIC__/stand/css/style.css" rel="stylesheet" type="text/css" media="all" />







<!--[if lte IE 6]>



    <script type="text/javascript" src="belatedPNG.js" tppabs="__STATIC__/stand/js/belatedPNG.js"></script>



    <script type="text/javascript">



      DD_belatedPNG.fix('.nav_wrap');



    </script>



<![endif]-->



</head>



<body>



    <div class="header-wrap">



        <div class="mar-wrap2">



        	<a href="<?php echo url('index/index'); ?>" class="logo"><img style="width: 100px;height: 60px;"  src="__STATIC__/travel/images/logo.png" alt=""></a>      



            <div class="nav">



                <a href="<?php echo url('index/index'); ?>"  >首页</a>



                <a href="<?php echo url('About/about'); ?>"  >走进英地</a>



                <a href="<?php echo url('About/employ'); ?>"  class='cur'>招聘职位</a>



                <a href="<?php echo url('About/planning'); ?>" >组织文化</a>



                 <a href="<?php echo url('About/welfare'); ?>" class=" ">投资者关系</a>



                <a href="<?php echo url('About/course'); ?>" class=" ">学习中心</a>



                <a href="<?php echo url('About/figure'); ?>" class=" ">团队建设</a>



			</div>



                  



        </div>



    </div>



	<div class="team-bg3 zp-bg1">



		<div class="mar-wrap4">



		    <h1>招聘职位</h1>



		</div>



	</div>



	<div class="wood-bg pad">		



		<div class="mar-wrap2">



			<p class="telephone">招聘热线：13111871088</p>



			<p class="bread bread-sp"><a href="<?php echo url('index/index'); ?>">HOME</a>><a href="<?php echo url('About/employ'); ?>">招聘职位</a></p>



		    <div class="top-wrap clearfix">



				<div class="left-side">



					<h2 class="cur"><a href="javascript:;">职能招聘</a></h2>



					<div class="top-links">



                        

                        <?php if(is_array($employ_l) || $employ_l instanceof \think\Collection || $employ_l instanceof \think\Paginator): $i = 0; $__LIST__ = $employ_l;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$el): $mod = ($i % 2 );++$i;?>

                        <a href="<?php echo url('About/employDetail'); ?>?employ_id=<?php echo $el['employ_id']; ?>"> · <?php echo $el['employ_title']; ?></a>

                        <?php endforeach; endif; else: echo "" ;endif; ?>

                        

                        



                    </div>



				</div>



				<div class="right-side">



					<table class="table-zp">



						<tbody>







							<tr>



								<th>职位名称</th>



								<th>所属分店</th>



								<th>招聘人数</th>



								<th>工作地点</th>



							</tr>



							 <?php if(is_array($employ) || $employ instanceof \think\Collection || $employ instanceof \think\Paginator): $i = 0; $__LIST__ = $employ;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>



                             <tr>



								<td><a href="<?php echo url('About/employDetail'); ?>?employ_id=<?php echo $vo['employ_id']; ?>"><b><?php echo $vo['employ_title']; ?></b></a></td>



								<td><a href="javascript:;"><?php echo $vo['employ_store']; ?></a></td>



								<td><?php echo $vo['employ_num']; ?></td>



								<td><?php echo $vo['employ_address']; ?></td>



							</tr>	



                            <?php endforeach; endif; else: echo "" ;endif; ?>						



						</tbody>



					</table>



				</div>



		    </div>



		</div>	



	</div>



    <div class="footer-wrap">



        <div class="mar-wrap clearfix">



            <div class="ewm-operation">



                <div class="ewm-wrap">



                    <img  src="__STATIC__/stand/images/weixin.jpg" alt="" class="sm-ewm">   



                    <p>微信二维码</p>



                    <img  src="__STATIC__/stand/images/ewm01.png" alt="" class="show-ewm">



                </div>





            </div>



            <p class="footer-link">



            <a href="<?php echo url('index/index'); ?>">首页</a>|



            <a href="<?php echo url('About/news'); ?>">媒体中心</a>|



            <a href="<?php echo url('About/contract'); ?>" class="">联络我们</a>|



            <a href="<?php echo url('About/about'); ?>">走进英地</a><br>Copyright © 2009-2018            



            <a href="">英地资产</a>All Rights Reserved



            </p>



        </div>



    </div>



<script type="text/javascript"  src="__STATIC__/stand/js/jquery-1.10.1.min.js"></script>



<script type="text/javascript"  src="__STATIC__/stand/js/min.index.js"></script>



<script type="text/javascript"  src="__STATIC__/travel/js/noCopy.js"></script>



</body>



</html>



 
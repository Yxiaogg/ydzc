<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"D:\xampp\htdocs\ydzc/application/index\view\about\employdetail.html";i:1531876854;}*/ ?>
<!DOCTYPE html>

<html> 

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>招聘</title>

<meta name="description" content="商业地产服务顾问" />

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

            <div class="nav">

                <a href="<?php echo url('index/index'); ?>"  >首页</a>

                <a href="<?php echo url('About/about'); ?>"  >走进英地</a>

                <a href="<?php echo url('About/news'); ?>" class=" ">媒体中心</a>

                <a href=""  class='cur'>招聘职位</a>

                <a href="<?php echo url('About/team'); ?>" class=" ">产品中心</a>

                <a href="<?php echo url('About/book'); ?>" class=" ">英地内刊</a>

                <a href="<?php echo url('About/contract'); ?>" class=" ">联络我们</a>

            </div>

            <a href="<?php echo url('index/index'); ?>"><img  style="width: 100px;height: 60px;" src="__STATIC__/travel/images/logo.png" alt=""></a>            



        </div>

    </div>

  <div class="team-bg2 zp-bg1">

    <div class="mar-wrap2">

        <h1>加入英地</h1>

    </div>

  </div>

  <div class="wood-bg pad">   

    <div class="mar-wrap2">

      <p class="telephone">招聘热线：010-6598 9898</p>

      <p class="bread bread-sp"><a href="<?php echo url('index/index'); ?>">HOME</a>><a href="<?php echo url('about/employ'); ?>">招聘职位</a></p>

      <div class="top-wrap clearfix">

        <div class="career-wrap">

          <p class="career-jianjie"></p>

          <div class="career-description">

            <h1>职位描述：<?php echo $employ['employ_title']; ?></h1>

<p style="white-space: normal;">工作地点：<br/><?php echo $employ['employ_address']; ?><br/><br/>工作分店位置：<br/><?php echo $employ['employ_store']; ?></p><p style="white-space: normal;">招聘时间：<br/><?php echo date('Y/m/d  ,  H时i分',$employ['employ_creatime']); ?></p><p style="white-space: normal;">工作概要：<br/><?php echo $employ['employ_des']; ?></p>        </div>

          <div class="career-btn">马上应聘</div>

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

            <a href="<?php echo url('About/contract'); ?>" class=" ">联络我们</a>|

            <a href="<?php echo url('About/about'); ?>">走进英地</a><br>Copyright © 2009-2018            

            <a href="">英地资产</a>All Rights Reserved

            </p>

        </div>

    </div>

<script type="text/javascript" src="__STATIC__/stand/js/jquery-1.10.1.min.js"></script>

<script type="text/javascript"  src="__STATIC__/stand/js/min.index.js"></script>

<script type="text/javascript"  src="__STATIC__/travel/js/noCopy.js"></script>

  <div class="career-mask"></div>

  <div class="pop-career">

  	<div class="pop-title">

		<a href="javascript:;" class="close-pop" title="关闭"></a>

		<h3>简历填写</h3>

	</div>

    <iframe id ="IframeResume" frameborder="0" name="Iframe1" src="<?php echo url('about/resume'); ?>?employ_id=<?php echo $employ['employ_id']; ?>"  width="100%" height="850px"></iframe>

  </div>

<script type="text/javascript"  src="__STATIC__/stand/js/jquery-1.10.1.min.js"></script>

<script type="text/javascript"  src="__STATIC__/stand/js/min.index.js"></script>

</body>

</html>
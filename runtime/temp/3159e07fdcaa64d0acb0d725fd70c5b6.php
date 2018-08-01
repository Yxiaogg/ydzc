<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"D:\xampp\htdocs\ydzc/application/index\view\about\planning.html";i:1531876854;}*/ ?>
<!DOCTYPE html>
<!-- saved from url=(0050)http://www.bjyxfdc.com/about/recruitment/planning/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>组织文化</title>
<meta name="description" content="组织文化">
<meta name="keywords" content="">
<link href="__STATIC__/stand/css/style.css" rel="stylesheet" type="text/css" media="all">
<!--[if lte IE 6]>
    <script type="text/javascript" src="/static/stand/js/belatedPNG.js"></script>
    <script type="text/javascript">
      DD_belatedPNG.fix('.nav_wrap');
    </script>
<![endif]-->
</head>
<body style="">
    <div class="header-wrap">
        <div class="mar-wrap2">
            <div class="nav">

                <a href="<?php echo url('index/index'); ?>"  >首页</a>

                <a href="<?php echo url('About/about'); ?>"  >走进英地</a>

                <a href="<?php echo url('About/employ'); ?>" >招聘职位</a>

                <a href="<?php echo url('About/planning'); ?>" class='cur'>组织文化</a>

                 <a href="<?php echo url('About/welfare'); ?>" class=" ">投资者关系</a>

                <a href="<?php echo url('About/course'); ?>" class=" ">学习中心</a>

                <a href="<?php echo url('About/figure'); ?>" class=" ">团队建设</a>

            </div>
            <a href="<?php echo url('index/index'); ?>" class="logo"><img style="width: 100px;height: 60px;"  src="__STATIC__/travel/images/logo.png" alt=""></a>
        </div>
    </div>
	<div class="team-bg zp-bg1">
		<div class="mar-wrap4">
		    <h1>组织文化</h1>
		</div>
	</div>
	<div class="wood-bg pad">
		<div class="mar-wrap2">
			<p class="telephone">招聘热线：13111871088</p>
			<p class="bread bread-sp"><a href="/">HOME</a>&gt;<a href="<?php echo url('planning'); ?>">组织文化</a></p>
			<div class="top-wrap clearfix">
                <div class="left-side">


                    <h2 class="cur"><a href="javascript:;">组织文化</a></h2>


                    <div class="top-links">


                        <?php if(is_array($planning_l) || $planning_l instanceof \think\Collection || $planning_l instanceof \think\Paginator): $i = 0; $__LIST__ = $planning_l;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$el): $mod = ($i % 2 );++$i;?>

                        <a href="<?php echo url('About/planning'); ?>?id=<?php echo $el['planning_id']; ?>" <?php if($pl['planning_id'] == $el['planning_id']): ?>class="cur"<?php endif; ?>> · <?php echo $el['planning_title']; ?></a>

                        <?php endforeach; endif; else: echo "" ;endif; ?>

                    </div>



                </div>
                <div class="right-side">
    				<div class="treatment-wrap">
    									<h3 style="border-top:none;"></h3>
                                        <?php echo $pl['planning_content']; ?>
    				</div>
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

 </body></html>
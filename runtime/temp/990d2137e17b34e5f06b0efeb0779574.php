<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:59:"D:\xampp\htdocs\ydzc/application/index\view\about\book.html";i:1531982363;}*/ ?>
<!DOCTYPE html>
<!-- saved from url=(0035)http://www.bjyxfdc.com/about/group/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>英地内刊</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="__STATIC__/stand/css/style.css" rel="stylesheet">
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
                <a href="<?php echo url('Index/index'); ?>" id="nav_">首页</a>

                <a href="<?php echo url('About/about'); ?>" id="nav_113">走进英地</a>

                <a href="<?php echo url('About/news'); ?>" class=" ">媒体中心</a>

                <a href="<?php echo url('About/employ'); ?>" class=" ">加入英地</a>

                <a href="<?php echo url('About/team'); ?>" class=" ">产品中心</a>

                <a href="<?php echo url('About/book'); ?>"  class="cur">英地内刊</a>

                <a href="<?php echo url('About/contract'); ?>">联络我们</a>

            </div>
             <a href="<?php echo url('index/index'); ?>" class="logo"><img style="width: 100px;height: 60px;"  src="__STATIC__/travel/images/logo.png" alt=""></a>      
             
        </div>
    </div>
	<div class="team-bg magazine-bg">
		<div class="mar-wrap4">
		    <h1>英地内刊</h1>
		</div>
	</div>
	<div class="mar-wrap2 pad">
		<p class="bread"><a href="/">HOME</a>&gt;<a href="<?php echo url('book'); ?>">英地内刊</a></p>
		<div class="top-wrap clearfix">
			<div class="news-title" style="margin:0;">
				<h3><span>YINGDI</span>最新内刊</h3>
			</div>
			<div class="magazine-wrap clearfix">
              <?php if(is_array($book) || $book instanceof \think\Collection || $book instanceof \think\Paginator): $i = 0; $__LIST__ = $book;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$b): $mod = ($i % 2 );++$i;?>
  				<div class="magazine">
					<div class="magazine-img">
						<div class="mi-cell">
							<img src="__STATIC__/<?php echo $b['img']; ?>" alt="">
						</div>
					</div>
					<div class="magazine-info clearfix">
						<h3 class="mi-name">英地内刊</h3>
						<p class="data">发行时间：<?php echo date("Y-m-d H:i:s",$b['create_time']); ?></p>
						<h3 class="mi-title"><?php echo $b['title']; ?></h3>
						<p class="mi-description"><?php echo $b['desc']; ?></p>
						<a href="<?php echo url('booklist',['id'=>$b['id']]); ?>" target="_blank" class="magazine-btn">马上观看</a>
						<a href="javascript:;" onclick="loadmsg()" class="magazine-btn">下载</a>
					</div>
				</div>
              <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
			<!-- <div class="news-title">
			<a href="javascript:;" onclick="OnLoadinfo(127,2017);" class="year year-cur">2017</a><a href="javascript:;" onclick="OnLoadinfo(127,2016);" class="year ">2016</a><a href="javascript:;" onclick="OnLoadinfo(127,2015);" class="year ">2015</a><a href="javascript:;" onclick="OnLoadinfo(127,2014);" class="year ">2014</a>				
			</div> -->
			
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



            <a href="<?php echo url('about/contract'); ?>">联络我们</a>|

            <a href="<?php echo url('About/about'); ?>">走进英地</a><br>Copyright © 2009-2018            

            <a href="">英地资产</a>All Rights Reserved

            </p>
        </div>
    </div>
<script src="__STATIC__/stand/js/push.js"></script><script src="__STATIC__/stand/js/hm.js"></script><script type="text/javascript" src="__STATIC__/stand/js/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="__STATIC__/stand/js/min.index.js"></script>
<script type="text/javascript" src="__STATIC__/stand/js/noCopy.js"></script>
<script type="text/javascript">
	function loadmsg()
	{
		alert("此路不通，请绕行！");
	}
</script>


 </body></html>
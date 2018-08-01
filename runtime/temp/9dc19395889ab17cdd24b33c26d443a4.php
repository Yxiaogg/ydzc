<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"/data/home/qxu1590200456/htdocs/application/index/view/entrust/entrust.html";i:1522162119;}*/ ?>
<!DOCTYPE html>

<html> 

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>业务</title>

<meta name="description" content="" />

<meta name="keywords" content="" />

<script >

(function() {

var UA = window.navigator.userAgent,

    IsAndroid = (/Android|HTC/i.test(UA) || /Linux/i.test(window.navigator.platform + '')),

    IsIPad = !IsAndroid && /iPad/i.test(UA),

    IsIPhone = !IsAndroid && /iPod|iPhone/i.test(UA),

    IsIOS =  IsIPad || IsIPhone,

    IsWindowsPhone =  /Windows Phone/i.test(UA),

    IsWeixin = /MicroMessenger/i.test(UA);

    if (IsAndroid || IsIOS || IsWindowsPhone) {

        /*iOS、Android、Windows Phone执行*/

        var linkurl = window.location.href;

        var host = window.location.host

        if(linkurl.indexOf("rental")>0 || linkurl.indexOf("sale")>0 || linkurl.indexOf("contact")>0 || linkurl.indexOf("s")>0 || linkurl=="http://yingdizichan.com/" || linkurl.indexOf("building")>0||linkurl=="http://yingdizichan.com/index/index/index.html")

        {

            var ReturnLinkUrl = linkurl.replace(host,"yingdizichan.com/mobile");

            window.location = ReturnLinkUrl;

        }

    }

})();

</script>



<link  href="__STATIC__/travel/css/style.css" rel="stylesheet" type="text/css" media="all" />

<link rel="stylesheet" type="text/css"  href="__STATIC__/travel/css/style2.css"/>

<!--[if lte IE 6]>

	<script type="text/javascript" src="belatedPNG.js" tppabs="__STATIC__/travel/js/belatedPNG.js"></script>

	<script type="text/javascript">

	  DD_belatedPNG.fix('.nav_wrap');

	</script>

<![endif]-->

</head>

<body>

    <style>#nav_112 {text-decoration: none;  border-radius: 4px; background: #5ea629;}</style>

    <div class="header-wrap">

    	<?php if(\think\Session::get('user') != null): ?>

      <p  style="float: right;text-decoration: none;font-size: 15px;line-height: 36px;">

        <a href="javascript:;" style="color: white;">

        <?php echo \think\Session::get('user.user_truename'); ?></a>

        <a href="javascript:;" onclick="userLogou()" style="color: white;text-decoration: underline;margin-right:45px;">退出</a>

      </p>

      <?php endif; ?>

        <div class="mar-wrap">

            <a href="<?php echo url('index/index'); ?>" title="地产" class="logo"><img style="width: 100px;height: 60px;"  src="__STATIC__/travel/images/logo.png" alt="地产 - 诚信地产,专业地产 - 商业办公选址专家"></a>

            <div class="city-sel">
              <i></i>
              <a href="#" class="city-cur">成都</a>
                <div class="city-pannel">
          <dl>
            <dt>华&nbsp;&nbsp;&nbsp;东</dt>
            <dd>
              <a href="<?php echo url('index/construct'); ?>" target="_blank">上海</a>
              <a href="<?php echo url('index/construct'); ?>" target="_blank">青岛</a>
              <a href="<?php echo url('index/construct'); ?>" target="_blank">南京</a>
            </dd>
          </dl>
          <dl>
            <dt>华&nbsp;&nbsp;&nbsp;南</dt>
            <dd>
              <a href="<?php echo url('index/construct'); ?>" target="_blank">深圳</a>
              <a href="<?php echo url('index/construct'); ?>" target="_blank">广州</a>
            </dd>
          </dl>
          <dl>
            <dt>中西南</dt>
            <dd>
              <a href="#" >成都</a>
              <a href="<?php echo url('index/construct'); ?>" target="_blank">武汉</a>
              <a href="<?php echo url('index/construct'); ?>" target="_blank">南宁</a>
            </dd>
          </dl>
          <dl>
            <dt class="no4">华&nbsp;&nbsp;&nbsp;北</dt>
            <dd class="no4">
              <a href="<?php echo url('index/construct'); ?>" target="_blank">北京</a>
              <a href="<?php echo url('index/construct'); ?>" target="_blank">天津</a>
            </dd>
            </dl>
        </div>
           </div>

           

            <div class="nav" style="float: right;">

                <a href="/" id="nav_">首页</a>

                <a href="<?php echo url('Rental/rental'); ?>"  id="nav_1" >房屋出租</a>

                <a href="<?php echo url('Sale/sale'); ?>"  id="nav_2" >房屋出售</a>

                <a href="<?php echo url('Entrust/entrust'); ?>" id="nav_112">在线委托</a>

                <a href="<?php echo url('Fdcase/fdcase'); ?>"  id="nav_65">客户案例</a>

                <a href="<?php echo url('About/about'); ?>" id="nav_113">走进英地</a>

            </div>

        </div>

    </div>

	<!--<div class="yezhu-bg1">

		<div class="mar-wrap yw-bg1">

			<div class="yz-pad1">

				<div class="yz-btn">

					<a href="/entrust/lease.html" class="zulin" title="租赁业务"></a>

					<a href="/entrust/sell.html" class="maimai" title="买卖业务"></a>

				</div>

			</div>

		</div>

	</div>-->

	<div class="yezhu-bg2">

		<div class="mar-wrap yw-bg2">

			<div class="yz-pad2">

				<div class="dingwei">

					<a href="#yewu1">出租/出售登记</a>

					<a href="#yewu2">求租/求售登记</a>

					<a href="#yewu3">报事/报修</a>

					<a href="#yewu4">意见/建议</a>

					<a href="#yewu5" style="margin:0;">大客户合作</a>

				</div>

			</div>

		</div>

	</div>

	<div class="yezhu-bg1">

		<div class="mar-wrap yw-bg3" id="yewu1">

			<div class="yz-pad3">

				<p class="yw-word">我们会根据您登记的信息给您提供专业的服务</p>

				<div class="yz-btn">

					<a href="<?php echo url('entrust/enRental',['type'=>0]); ?>" class="zulin" title="租赁业务"></a>

					<a href="<?php echo url('entrust/enRental',['type'=>1]); ?>" class="maimai" title="买卖业务"></a>

				</div>

				<p class="yw-phone">咨询电话：18228013125</p>

			</div>

		</div>

	</div>

	<div class="yezhu-bg2">

		<div class="mar-wrap yw-bg4" id="yewu2">

			<div class="yz-pad4">

				<p class="yw-word">根据项目匹配您合适的项目。<br>快速、精准匹配。</p>

				<div class="yz-btn2">

					<a href="<?php echo url('entrust/enRental',['type'=>2]); ?>" class="zulin" title="租赁业务"></a>

					<a href="<?php echo url('entrust/enRental',['type'=>3]); ?>" class="maimai" title="买卖业务"></a>

				</div>

				<p class="yw-phone">咨询电话：18228013125</p>

			</div>

		</div>

	</div>

	<div class="yezhu-bg1">

		<div class="mar-wrap yw-bg5" id="yewu3">

			<div class="yz-pad5">

				<p class="yw-word">报事报修<br></p>

				<div class="yz-btn3">

					<a href="<?php echo url('entrust/enRental',['type'=>4]); ?>" class="zulin" title="租赁业务"></a>

					<a href="<?php echo url('entrust/enRental',['type'=>5]); ?>" class="maimai" title="买卖业务"></a>

				</div>

				<p class="yw-phone">咨询电话：18111292489</p>

			</div>

		</div>

	</div>

	<div class="yezhu-bg2">

		<div class="mar-wrap yw-bg6" id="yewu4">

			<div class="yz-pad6">

				<p class="yw-word">公开透明，双方满意。<br>我们会一直努力！</p>

				<div class="yz-btn4">

					<a href="<?php echo url('entrust/enRental',['type'=>6]); ?>" class="zulin" title="租赁业务"></a>

					<a href="<?php echo url('entrust/enRental',['type'=>7]); ?>" class="maimai" title="买卖业务"></a>

				</div>

				<p class="yw-phone">咨询电话：13111871088</p>

			</div>

		</div>

	</div>

	<div class="yezhu-bg1">

		<div class="mar-wrap yw-bg7" id="yewu5">

			<div class="yz-pad7">

				<p class="yw-word">优秀的分供方、合作伙伴是公司竞争力所在，关爱相关伙伴是一种共赢的理念。<br>重要的是共同进步 ！</p>

				<div class="yz-btn5">

					<a href="<?php echo url('entrust/enRental',['type'=>8]); ?>" class="zulin" title="租赁业务"></a>

					<a href="<?php echo url('entrust/enRental',['type'=>9]); ?>" class="maimai" title="买卖业务"></a>

				</div>

				<p class="yw-phone">咨询电话：13111871088</p>

			</div>

		</div>

	</div>

      <script type="text/javascript"  src="__STATIC__/travel/js/jquery-1.10.1.min.js"></script>

      <script type="text/javascript"  src="__STATIC__/travel/js/min.index.js"></script>

      <script type="text/javascript"  src="__STATIC__/travel/js/jquery.easing.min.js"></script>

      <script type="text/javascript"  src="__STATIC__/travel/js/killercarousel.js"></script> 

      <script type="text/javascript"  src="__STATIC__/travel/js/noCopy.js"></script>

      <script language="javascript"  src="__STATIC__/loginsty/js/custom.js"></script>

      <script type="text/javascript"  src="__STATIC__/travel/js/lkrtl.min.js"></script>

      <script type="text/javascript" src="__STATIC__/travel/js/layer.js"></script>


      <script>var newsurl = "/"</script>

      <div class="footer-wrap">

            <div class="mar-wrap">

                  <p>

                        <span>

                              Copyright © 2009-2018 

                              <a href="<?php echo url('index/index'); ?>" title="">英地资产</a> yingdizichan.com All Rights Reserved

                              <a href="javascript:;">蜀ICP备18003460号</a> 

                              </span>

                      

                  </p>

            </div>

      </div>

 <!--登录弹窗位置-->

            <div class="loginmask"></div>

            <div id="loginalert">

<!-- 加载登录的内容 -->

            </div>

<!-- 代码 开始 -->

  <div id="leftsead"> 

   <ul> 

    <li> <a href="javascript:void(0)" class="youhui"> <img  src="__STATIC__/travel/images/l02.png" width="47" height="49" class="shows" /> <img  src="__STATIC__/travel/images/a.png" width="57" height="49" class="hides" /> <img  src="__STATIC__/travel/images/weixin.jpg" width="145" class="2wm" style="display:none;margin:-100px 57px 0 0" /> </a> </li> 

    <li> <a href="javascript:void(0)" id="fankui"> 

      <div class="hides" style="width:161px;display:none;" id="qq"> 

       <div class="hides" id="p1"> 

        <img  src="__STATIC__/travel/images/ll04.png" /> 

       </div> 

       <div class="hides" id="p2">

        <span style="color:#FFF;font-size:13px">意见反馈</span>

       </div> 

      </div> <img  src="__STATIC__/travel/images/l04.png" width="47" height="49" class="shows" /> </a> </li> 

    <li id="tel"> <a href="javascript:void(0)"> 

      <div class="hides" style="width:161px;display:none;" id="tels"> 

       <div class="hides" id="p1"> 

        <img  src="__STATIC__/travel/images/ll05.png" /> 

       </div> 

       <div class="hides" id="p3">

        <span style="color:#FFF;font-size:12px">13111871088</span> 

       </div> 

      </div> <img  src="__STATIC__/travel/images/l05.png" width="47" height="49" class="shows" /> </a> </li> 

    <li id="btn"> <a id="top_btn"> 

      <div class="hides" style="width:161px;display:none"> 

       <img  src="__STATIC__/travel/images/ll06.png" width="161" height="49" /> 

      </div> <img  src="__STATIC__/travel/images/l06.png" width="47" height="49" class="shows" /> </a> </li> 

   </ul> 

  </div>



<script>

$(document).ready(function(){

    $("#leftsead a").hover(function(){

        if($(this).prop("className")=="youhui"){

            $(this).children("img.hides").show();

        }else{

            $(this).children("div.hides").show();

            $(this).children("img.shows").hide();

            $(this).children("div.hides").animate({marginRight:'0px'},'0'); 

        }

    },function(){ 

        if($(this).prop("className")=="youhui"){

            $(this).children("img.hides").hide();

        }else{

            $(this).children("div.hides").animate({marginRight:'-163px'},0,function(){$(this).hide();$(this).next("img.shows").show();});

        }

    });

    $("#top_btn").click(function(){if(scroll=="off") return;$("html,body").animate({scrollTop: 0}, 600);});

	    //右侧导航 - 二维码

        $(".youhui").mouseover(function(){

            $(this).children(".2wm").show();

        })

        $(".youhui").mouseout(function(){

            $(this).children(".2wm").hide();

        });

});

// 意见反馈

$('#fankui').on('click', function(){



	layer.open({

	  type: 2,

	  title: '意见反馈',

	 

	  area: ['800px', '350px'],

	  content: "<?php echo url('member/suggestion'); ?>"

	}); 

});

</script>

<script type="text/javascript">

  function member_Log(){

     layer.open({

      title:"登录",

      type:2,

      content:"<?php echo url('Member/memLog'); ?>",

      area: ['440px', '370px'],

      end: function () {

        window.location.href="<?php echo url('Member/memRegi'); ?>";

      }

     });



  }





</script>

</body>

</html>


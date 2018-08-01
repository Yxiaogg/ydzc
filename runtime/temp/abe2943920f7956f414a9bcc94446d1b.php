<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"/data/home/qxu1590200456/htdocs/application/index/view/fdcase/fdcase.html";i:1521515298;}*/ ?>
<!DOCTYPE html>

<html> 

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>客户案例</title>

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

    <script type="text/javascript" src="belatedPNG.js" src="http://www.bjyxfdc.com/case/js/belatedPNG.js"></script>

    <script type="text/javascript">

      DD_belatedPNG.fix('.nav_wrap');

    </script>

<![endif]-->

</head>

<body>

    <style>#nav_65 {text-decoration: none;  border-radius: 4px; background: #5ea629;}</style>

    <div class="header-wrap">

        <div class="mar-wrap">

            <a href="<?php echo url('index/index'); ?>" title="地产" class="logo"><img style="width: 100px;height: 60px;"  src="__STATIC__/travel/images/logo.png" alt="地产"></a>

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

    <div class="example-wrap">

        <div class="mar-wrap">

            <div class="anli">

              <?php if(is_array($saleEx) || $saleEx instanceof \think\Collection || $saleEx instanceof \think\Paginator): $i = 0; $__LIST__ = $saleEx;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if(($key+1)%2 != 0): ?>

				<div class="pori<?php echo $key+1; ?>">

					<div class="word-wrap pad-left">

						<p><a href="<?php echo url('sale/saleDetail'); ?>?sale_id=<?php echo $vo['sale_id']; ?>"><?php echo $vo['sale_name']; ?></a></p>

						<a href="<?php echo url('sale/saleDetail'); ?>?sale_id=<?php echo $vo['sale_id']; ?>"><img src="__STATIC__/<?php echo $vo['sale_src']; ?>"  alt="<?php echo $vo['sale_name']; ?>"></a>

					</div>

				</div>

               <?php else: ?>

				<div class="pori<?php echo $key+1; ?>">

					<div class="word-wrap pad-right">

						<p><a href="<?php echo url('sale/saleDetail'); ?>?sale_id=<?php echo $vo['sale_id']; ?>"><?php echo $vo['sale_name']; ?></a></p>

						<a href="<?php echo url('sale/saleDetail'); ?>?sale_id=<?php echo $vo['sale_id']; ?>"><img src="__STATIC__/<?php echo $vo['sale_src']; ?>"  alt="<?php echo $vo['sale_name']; ?>"></a> 

					</div>

				</div>

				        <?php endif; endforeach; endif; else: echo "" ;endif; ?>

                    </div>

        </div>

    </div>

    <div class="al-bg">

        <div class="mar-wrap">

            <div class="al-slide">

                <div class="al-img">

          <?php if(is_array($sale) || $sale instanceof \think\Collection || $sale instanceof \think\Paginator): $i = 0; $__LIST__ = $sale;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

					<div class="img-word">

						<div class="img-middle">

						   <a href="<?php echo url('sale/saleDetail'); ?>?sale_id=<?php echo $vo['sale_id']; ?>"><img style="width: 1000px;height: 445px;" src="__STATIC__/<?php echo $vo['sale_src']; ?>"  alt="<?php echo $vo['sale_name']; ?>"></a>

						</div>

						<div class="al-word">

							<h3><a href="<?php echo url('sale/saleDetail'); ?>?sale_id=<?php echo $vo['sale_id']; ?>"><?php echo $vo['sale_name']; ?></a></h3>

							

						</div>

					</div>

					<?php endforeach; endif; else: echo "" ;endif; ?>

					

					

					

					

					

                </div>

                <ul class="al-nav clearfix">

<?php if(is_array($sale) || $sale instanceof \think\Collection || $sale instanceof \think\Paginator): $i = 0; $__LIST__ = $sale;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

<li><img src="__STATIC__/<?php echo $vo['sale_src']; ?>" style="width: 125px;height: 80px;" alt="<?php echo $vo['sale_name']; ?>" class = "cur"><span ></span></li>

<?php endforeach; endif; else: echo "" ;endif; ?>

                </ul>

            </div>

            

        </div>

    </div>

    <div class="mar-wrap">

        <div class="biaoyu">

            <img src="__STATIC__/travel/images/4deb3cc1e885d779452cedb1f42e1321.jpg"  alt="">

        </div>

    </div>

    <div class="foot-link">

        <div class="mar-wrap">

            <div class="link-bg"><!--商业合作-->

                        <a href="javascript:;"><img src="__STATIC__/travel/images/b9e5ce25f3cf55deccbe7cfc8c2c815b.jpg" ></a>

                        <a href="javascript:;"><img src="__STATIC__/travel/images/2d7656e5c70a7cc66fe1d15d7caeaf78.jpg"></a>

                        <a href="javascript:;"><img src="__STATIC__/travel/images/356cc61db49569c70641855802633379.jpg" ></a>

                        <a href="javascript:;"><img src="__STATIC__/travel/images/117bed4cdd239466563afcd160dcdcba.jpg" ></a>

                        <a href="javascript:;"><img src="__STATIC__/travel/images/c06f335c191e905e58162ed09a886d86.jpg" ></a>

                        <a href="javascript:;"><img src="__STATIC__/travel/images/302ba7ffd22b654e1da216f9f8df5932.jpg" ></a>

                        <a href="javascript:;"><img src="__STATIC__/travel/images/639c2883f872050fd0466036fc9f439c.jpg" ></a>

                        <a href="javascript:;"><img src="__STATIC__/travel/images/daae78361e63e0b8b6b58ae10f608c35.jpg" ></a>

                        <a href="javascript:;"><img src="__STATIC__/travel/images/0c17495303e6e9bdbccff85cfd42699d.jpg" ></a>

                        <a href="javascript:;"><img src="__STATIC__/travel/images/173c74c248f3e87c34813bb9ab326c4c.jpg" ></a>

                        <a href="javascript:;"><img src="__STATIC__/travel/images/3660888022249cb6e39c08d47cfa97f3.jpg" ></a>

                        <a href="javascript:;"><img src="__STATIC__/travel/images/e3b5d4eebaf9e1d13c57f36b87e48b11.jpg" ></a>

                        </div>

        </div>

    </div>

      <script type="text/javascript"  src="__STATIC__/travel/js/jquery-1.10.1.min.js"></script>

      <script type="text/javascript"  src="__STATIC__/travel/js/min.index.js"></script>

      <script type="text/javascript"  src="__STATIC__/travel/js/jquery.easing.min.js"></script>

      <script type="text/javascript"  src="__STATIC__/travel/js/killercarousel.js"></script> 

      <script type="text/javascript"  src="__STATIC__/travel/js/noCopy.js"></script>

      <script language="javascript"  src="__STATIC__/loginsty/js/custom.js"></script>

      <script type="text/javascript" src="__STATIC__/travel/js/lkrtl.min.js"></script>

      <script type="text/javascript"  src="__STATIC__/travel/js/layer.js"></script>


      <script>var newsurl = "/"</script>

      <div class="footer-wrap">

            <div class="mar-wrap">

                  <p>

                        <span>

                              Copyright © 2009-2018 

                              <a href="<?php echo url('index/index'); ?>" title="">英地资产</a> yingdizichan.com All Rights Reserved

                              <a href="javascript:;" target="_blank">蜀ICP备18003460号</a> 

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

 
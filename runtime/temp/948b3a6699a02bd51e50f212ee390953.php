<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"D:\xampp\htdocs\ydzc/application/index\view\sale\saledetail.html";i:1531876854;}*/ ?>
<!DOCTYPE html>

<html> 

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title><?php echo $saleInfo['sale_name']; ?></title>



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

        if(linkurl.indexOf("rental")>0 || linkurl.indexOf("sale")>0 || linkurl.indexOf("contact")>0 || linkurl.indexOf("s")>0 || linkurl=="http://yingdizichan.com/" || linkurl.indexOf("building")>0||linkurl=="http://yingdizichan.com/index/index/index.html"|| linkurl=="http://www.yingdizichan.com/index/index/index.html")

        {

            var ReturnLinkUrl = "<?php echo url('mobile/sale/saledet',['sid'=>$saleInfo['sale_id']]); ?>";

            window.location = ReturnLinkUrl;

        }

    }

})();

</script>



<link  href="__STATIC__/travel/css/style.css" rel="stylesheet" type="text/css" media="all" />

<link rel="stylesheet" type="text/css"  href="__STATIC__/loginsty/css/style2.css"/>

<script type="text/javascript" src="api-v=2.0&ak=6eEr4R37UtXpijuWHD3s4v7l.js" tppabs="http://api.map.baidu.com/api?v=2.0&ak=6eEr4R37UtXpijuWHD3s4v7l"></script>

<!--[if lte IE 6]>

  <script type="text/javascript" src="belatedPNG.js" tppabs="__STATIC__/travel/js/belatedPNG.js"></script>

  <script type="text/javascript">

    DD_belatedPNG.fix('.nav_wrap');

  </script>

<![endif]-->

<script type="text/javascript">

  document.onkeydown=function(event){

  var e = event || window.event || arguments.callee.caller.arguments[0];

  if(e && e.keyCode==116)

  { // 按 Esc 

      $("#sharelink").html("");

  }

};

</script>

</head>

<body >

    <style>#nav_156 {text-decoration: none;  border-radius: 4px; background: #5ea629;}</style>

    <div class="header-wrap">

        <div class="mar-wrap">

            <a href="<?php echo url('index/index'); ?>" class="logo"><img style="width: 100px;height: 60px;" src="__STATIC__/travel/images/logo.png" alt=""></a>

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

                <a href="<?php echo url('index/index'); ?>"  id="nav_">首页</a>

                <a href="<?php echo url('Rental/rental'); ?>"   id="nav_1" >房屋出租</a>

                <a href="<?php echo url('Sale/sale'); ?>"   id="nav_2" >房屋出售</a>

                <a href="<?php echo url('Entrust/entrust'); ?>"  id="nav_112">在线委托</a>

                <a href="<?php echo url('Fdcase/fdcase'); ?>"  id="nav_65">客户案例</a>

                <a href="<?php echo url('About/about'); ?>"  id="nav_113">走进英地</a>

            </div>

        </div>

    </div>

  <div class="mar-wrap">

    <div class="nav-search clearfix">

      

      <p class="bread"><a href="<?php echo url('index/index'); ?>">首页</a>&nbsp; &gt; &nbsp;<a href="javascript:;">房屋出售</a></p>

    </div>

    <!--广告图-->

    <div class="db-ad">

        <script src="thea30.js" tppabs="__STATIC__d/js/acmsd/thea30.js"></script>

    </div>

    <div class="detail-title">

      <div class="big-ewm">

        <img id="share-link-contact-qrcode1"  src="__STATIC__/travel/images/ewm.png" alt="">

      </div>



            <h2><?php echo $saleInfo['sale_name']; ?></h2>

    </div>

    <div class="detail-info clearfix">

      <div class="di-left clearfix">

        <div class="di-slide">

          <ul class="img-wrap-list" >

              <li style="display:block;"><div class="cell"><img src="__STATIC__/<?php echo $saleInfo['sale_src']; ?>" style="width: 400px;height: 300px;"  alt=""></div>

          </ul>

          

        </div>

                <div class="di-info-show">

          <p style="border:none;">

          <p style="border:none;">售价<span class="font1"><?php echo $saleInfo['sale_price']; ?></span>万元</p>          

          <p>类型：<span class="font2"><?php echo $saleInfo['sale_class']; ?></span></p>

          <p>地址：<span class="font2"><?php echo $saleInfo['sale_address']; ?></span></p>

       

          <p>地铁线路：

                    <span class="font2"><?php echo $saleInfo['sale_subway']; ?></span>

                    

          </p>

          

          

         

          <p>出售面积：<span class="font3"><?php echo $saleInfo['sale_area']; ?>平米</span></p>

         

        </div>

      </div>

      <div class="di-right">

  <div class="big-people-defaule" id="share-link-contact-box">

<script src=%22thea33.js%22 tppabs="__STATIC__d/js/acmsd/thea33.js"></script>

  </div>

  <div class="connect-wrap">

    <div class="phone-num">

      <span id="share-link-contact-phone">13111871088</span><br>即刻致电金牌楼盘顾问

    </div>

    <div class="small-ewm">

      <img id="share-link-contact-qrcode"  src="__STATIC__/travel/images/ewm.png" alt="">

      <p>扫一扫<br><span>体验专业，高效的服务!</span></p>

    </div>

  </div>

</div>      

    </div>

    <ul class="loupan-list clearfix">     

      <a href="#section1"><li class="cur">楼盘详情</li></a>

     

    </ul>

    <span id="section1"></span>

    <div class="five-wrap">

      <div class="five-title" >

        楼盘详情

      </div>

      <div class="project-description">

        <h3>项目简介：</h3>

        <p><?php echo $saleInfo['sale_des']; ?></p>

       

      </div>

      <span id="section2"></span>

      

      











    </div>

  </div>

      <script type="text/javascript"  src="__STATIC__/travel/js/jquery-1.10.1.min.js"></script>

      <script type="text/javascript"  src="__STATIC__/travel/js/min.index.js"></script>

      <script type="text/javascript"  src="__STATIC__/travel/js/jquery.easing.min.js"></script>

      <script type="text/javascript"  src="__STATIC__/travel/js/killercarousel.js"></script> 

      <script type="text/javascript"  src="__STATIC__/travel/js/noCopy.js"></script>

      <script language="javascript"  src="__STATIC__/loginsty/js/custom.js"></script>

      <script type="text/javascript"  src="__STATIC__/travel/js/lkrtl.min.js"></script>

      <script type="text/javascript"  src="__STATIC__/travel/js/layer.js"></script>

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

    <li> <a href="javascript:void(0)" class="youhui"> <img src="__STATIC__/travel/images/l02.png" width="47" height="49" class="shows" /> <img  src="__STATIC__/travel/images/a.png" width="57" height="49" class="hides" /> <img  src="__STATIC__/travel/images/weixin.jpg" width="145" class="2wm" style="display:none;margin:-100px 57px 0 0" /> </a> </li> 

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

<script type="text/javascript"  src="/extend/jquery/jquery.cookie.js"></script>

<script type="text/javascript">

    //全景图展示

  var panorama = new BMap.Panorama('panorama');

  panorama.setPosition(new BMap.Point(116.471372, 39.915404)); //根据经纬度坐标展示全景图

  panorama.setPov({heading: -40, pitch: 6});



  panorama.addEventListener('position_changed', function(e){ //全景图位置改变后，普通地图中心点也随之改变

    var pos = panorama.getPosition();

    map.setCenter(new BMap.Point(pos.lng, pos.lat));

    marker.setPosition(pos);

  });

</script>

<script type="text/javascript">

  // 百度三维地图

  var mapOption = {

      mapType: BMAP_PERSPECTIVE_MAP,

      maxZoom: 18,

      drawMargin:0,

      enableFulltimeSpotClick: true,

      enableHighResolution:true

    }

    

  var map = new BMap.Map("container", mapOption);

  map.addControl(new BMap.NavigationControl());

  var mappoint = new BMap.Point(116.471372,39.915404);

  map.centerAndZoom(mappoint, 18);

  var marker=new BMap.Marker(mappoint);

  marker.enableDragging();

  map.addOverlay(marker);  

  marker.addEventListener('dragend',function(e){

    panorama.setPosition(e.point); //拖动marker后，全景图位置也随着改变

    panorama.setPov({heading: -40, pitch: 6});}

  );

</script>

<script type="text/javascript">

  // 百度平面地图

  var mapOption = {

      mapType: BMAP_NORMAL_MAP,

      maxZoom: 18,

      drawMargin:0,

      enableFulltimeSpotClick: true,

      enableHighResolution:true

    }

  

  var map = new BMap.Map("normal_map", mapOption);

  map.addControl(new BMap.NavigationControl());

  var testpoint = new BMap.Point(116.471372,39.915404);

  map.centerAndZoom(testpoint, 18);

  var marker=new BMap.Marker(testpoint);

  marker.enableDragging();

  map.addOverlay(marker);  

  marker.addEventListener('dragend',function(e){

    panorama.setPosition(e.point); //拖动marker后，全景图位置也随着改变

    panorama.setPov({heading: -40, pitch: 6});}

  );



</script>

<script type="text/javascript" >

  var cookiepre='ltpup';

  var classid='156';

  var id='362';

  var siteurl='/';

  var dataurl="&classid="+classid+"&id="+id;

  var shareurl = '362.html'/*tpa=http://www.bjyxfdc.com/building/362.html*/;

  var bdText = "三星大厦";

  var websharedomainurl = 'http://www.bjyxfdc.com/';

</script>

</body>

</html>
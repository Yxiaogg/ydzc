<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"/data/home/qxu1590200456/htdocs/application/index/view/sale/sale.html";i:1521624889;}*/ ?>
<!DOCTYPE html>

<html> 

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>出售</title>

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

        if(linkurl.indexOf("rental")>0 || linkurl.indexOf("sale")>0 || linkurl.indexOf("contact")>0 || linkurl.indexOf("s")>0 || linkurl=="http://yingdizichan.com/" || linkurl.indexOf("building")>0||linkurl=="http://yingdizichan.com/index/index/index.html"|| linkurl=="http://www.yingdizichan.com/index/index/index.html")

        {

            var ReturnLinkUrl ="<?php echo url('mobile/sale/index'); ?>";

            window.location = ReturnLinkUrl;

        }

    }

})();

</script>

<link rel="stylesheet" type="text/css" href="__STATIC__/css/page.css"/>

<link  href="__STATIC__/travel/css/style.css" rel="stylesheet" type="text/css" media="all" />

<link rel="stylesheet" type="text/css"  href="__STATIC__/travel/css/style2.css"/><!--[if lte IE 6]>

  <script type="text/javascript" src="belatedPNG.js" tppabs="http://www.bjyxfdc.com/static/travel/js/belatedPNG.js"></script>

  <script type="text/javascript">

    DD_belatedPNG.fix('.nav_wrap');

  </script>

<![endif]-->

</head>

<body>

    <style>#nav_2 {text-decoration: none;  border-radius: 4px; background: #5ea629;}</style>

    <div class="header-wrap">

        <div class="mar-wrap">

            <a href="<?php echo url('index/index'); ?>" class="logo"><img style="width: 100px;height: 60px;"  src="__STATIC__/travel/images/logo.png" alt=""></a>

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

                <a href="<?php echo url('rental/rental'); ?>"   id="nav_1" >房屋出租</a>

                <a href="<?php echo url('Sale/sale'); ?>"   id="nav_2" >房屋出售</a>

                <a href="<?php echo url('Entrust/entrust'); ?>"  id="nav_112">在线委托</a>

                <a href="<?php echo url('Fdcase/fdcase'); ?>"  id="nav_65">客户案例</a>

                <a href="<?php echo url('About/about'); ?>"  id="nav_113">走进英地</a>

            </div>
         
        </div>

    </div>

  <div class="mar-wrap">

    <div class="nav-search clearfix">

      <div class="sec-search">

       

      </div>

      <p class="bread"><a href="<?php echo url('index/index'); ?>">首页</a>&nbsp; &gt; &nbsp;<a href="javascript:;">房屋出售</a></p>

    </div>

    <div class="xzl-wrap">

          

            

            <div class="options-wrap">

                 <div class="all-options">

                  <div class="ao-wrap clearfix"><p class="options-name">区域：</p>

                    <p class="op-style">

                      <?php if(is_array($dis) || $dis instanceof \think\Collection || $dis instanceof \think\Paginator): $i = 0; $__LIST__ = $dis;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

                        <span id="s"><a href="javascript:;" id="dis" <?php if($d == $vo['id']): ?>class="cur"<?php endif; ?> onclick="district(<?php echo $vo['id']; ?>)"><?php echo $vo['name']; ?></a></span> 

                      <?php endforeach; endif; else: echo "" ;endif; ?></p>

                    </div>  
                    <?php if($d != 0): ?>
                    <div class="ao-wrap clearfix">

                    <p class="op-style">

                      <?php if(is_array($reg) || $reg instanceof \think\Collection || $reg instanceof \think\Paginator): $i = 0; $__LIST__ = $reg;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

                        <span id="s"><a href="javascript:;" id="reg" <?php if($r == $vo['id']): ?>class="cur"<?php endif; ?> onclick="region(<?php echo $vo['id']; ?>)"><?php echo $vo['name']; ?></a></span> 

                      <?php endforeach; endif; else: echo "" ;endif; ?></p>

                    </div>  
                    <?php endif; ?>

                     <div class="ao-wrap clearfix"><p class="options-name">地铁：</p>

                    <p class="op-style">

                      <?php if(is_array($subway) || $subway instanceof \think\Collection || $subway instanceof \think\Paginator): $i = 0; $__LIST__ = $subway;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

                        <span><a href="javascript:;" <?php if($sub == $vo['subway_num']): ?>class="cur"<?php endif; ?> onclick="subway(<?php echo $vo['subway_num']; ?>)"><?php echo $vo['subway_name']; ?></a></span> 

                       <?php endforeach; endif; else: echo "" ;endif; ?></p>

                    </div>  

                     <div class="ao-wrap clearfix"><p class="options-name">环线：</p>

                    <p class="op-style">

                      <?php if(is_array($ring) || $ring instanceof \think\Collection || $ring instanceof \think\Paginator): $i = 0; $__LIST__ = $ring;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

                        <span><a href="javascript:;" id="ring" <?php if($ri == $vo['ring_num']): ?>class="cur"<?php endif; ?> onclick="ring(<?php echo $vo['ring_num']; ?>)"><?php echo $vo['ring_name']; ?></a></span> 

                      <?php endforeach; endif; else: echo "" ;endif; ?></p>

                    </div> 

                    <div class="ao-wrap clearfix"><p class="options-name">面积：</p><p class="op-style">

                      <?php if(is_array($area) || $area instanceof \think\Collection || $area instanceof \think\Paginator): $i = 0; $__LIST__ = $area;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

                        <span><a href="javascript:;" <?php if($ar == $vo['area_num']): ?>class="cur"<?php endif; ?> onclick="area(<?php echo $vo['area_num']; ?>)" onclick="area(<?php echo $vo['area_num']; ?>)"><?php echo $vo['area_name']; ?></a></span> 

                        <?php endforeach; endif; else: echo "" ;endif; ?>  </p>

                    </div>  



                     <div class="ao-wrap clearfix"><p class="options-name">售价：</p><p class="op-style">

                      <?php if(is_array($saprice) || $saprice instanceof \think\Collection || $saprice instanceof \think\Paginator): $i = 0; $__LIST__ = $saprice;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

                        <span><a href="javascript:;" <?php if($pr == $vo['saprice_num']): ?>class="cur"<?php endif; ?> onclick="price(<?php echo $vo['saprice_num']; ?>)"><?php echo $vo['saprice_name']; ?></a></span> 

                        <?php endforeach; endif; else: echo "" ;endif; ?> </p>

                     </div>                            

                </div>

                <div class="slowdown">

                    <p class="zhankai">点击展开楼盘筛选</p>

                    <p class="shouqi">点击收起楼盘筛选</p>

                </div>

            </div>

      <div class="result-wrap clearfix">

        <div class="right-side">

          <h3 class="rs-title">热点楼盘推荐</h3>

          <div class="seen-wrap" id="browsemsg_bak">

          </div>

          <!--经典广告区域-->

          <?php if(is_array($saleRole) || $saleRole instanceof \think\Collection || $saleRole instanceof \think\Paginator): $i = 0; $__LIST__ = $saleRole;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

          <div class="ad-img">

            <div class="table-cell">

             <a href="<?php echo url('sale/saleDetail'); ?>?sale_id=<?php echo $vo['sale_id']; ?>"><img style="width: 230px;height: 190px;" src="__STATIC__/<?php echo $vo['sale_src']; ?>"></a>

            </div>

          </div>

          <?php endforeach; endif; else: echo "" ;endif; ?>

          

          

          <!--经典广告区域-->

        </div>

        <div class="left-side">

          <div class="search-options">

           

            <p class="query">排序：

   <span class=" icon_default"><a href="javascript:;" onclick="List(0)">默认</a></span>

    

    <span class="ico_up "><a href="javascript:;" onclick="List(1)">最新</a></span>



    <span class="ico_up "><a href="javascript:;" onclick="List(2)">价格</a></span>

</p>

          </div>

          <div class="xzl-list">

            <?php if(is_array($saleInfo) || $saleInfo instanceof \think\Collection || $saleInfo instanceof \think\Paginator): $i = 0; $__LIST__ = $saleInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

            <div class="one-style">

              <div class="floor-wrap clearfix floor-hover">

                <div class="xzl-img">

                  <div class="xi-cell">

                    <a href="<?php echo url('sale/saleDetail'); ?>?sale_id=<?php echo $vo['sale_id']; ?>" ><img src="__STATIC__/<?php echo $vo['sale_src']; ?>" alt="<?php echo $vo['sale_name']; ?>"></a>

                                  </div>

                            </div>

                            <div class="xzl-info">

                              <div class="dui-wrap clearfix">

                                                        

                                <div class="lou-title">

                                    <a href="<?php echo url('sale/saleDetail'); ?>?sale_id=<?php echo $vo['sale_id']; ?>" target="_blank" title="<?php echo $vo['sale_name']; ?>"><?php echo $vo['sale_name']; ?></a>

                                </div>

                              </div>

                                  <p class="keyword" style="color: red"><span>面积:<?php echo getRentalArea($vo['sale_area']); ?></span><span></span><span></span></p>

                                <p class="keyword" style="font-size: 15px"><span>售价:<?php echo getRentalPrice($vo['sale_price']); ?></span><span></span><span></span></p>

                                <p class="people">面积：<span><?php echo getRentalArea($vo['sale_area']); ?></span></p>

                                <p class="people">类型：<span><?php echo $vo['sale_class']; ?></span></p>

                            </div>

                </div>                                          

            </div>

          <?php endforeach; endif; else: echo "" ;endif; ?>               

            <?php echo $saleInfo->render(); ?>                     

                                 

                                    

                                  

                                   

                                  

          </div>

         

       <p style="font-size: 20px;"><?php echo $text; ?></p>

				

        </div>

      </div>

    </div>

  </div>

      <script type="text/javascript"  src="__STATIC__/travel/js/jquery-1.10.1.min.js"></script>

      <script type="text/javascript" src="__STATIC__/travel/js/min.index.js"></script>

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

        <img src="__STATIC__/travel/images/ll05.png" /> 

       </div> 

       <div class="hides" id="p3">

        <span style="color:#FFF;font-size:12px">13111871088</span> 

       </div> 

      </div> <img  src="__STATIC__/travel/images/l05.png" width="47" height="49" class="shows" /> </a> </li> 

    <li id="btn"> <a id="top_btn"> 

      <div class="hides" style="width:161px;display:none"> 

       <img src="__STATIC__/travel/images/ll06.png" width="161" height="49" /> 

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

<script type="text/javascript">

  

  function subway(num){



    var url=window.location.href;



    if(url.indexOf("1=1")>-1){

      if(url.indexOf("page=")>-1){

        url = url.replace(/page=\d*/, '');

      }

      if(url.indexOf("subway=")>-1){

        url = url.replace(/subway=\d*/, 'subway='+num);

      }else{

        url=url+"&subway="+num;

      }  

    }else{

      url=url+"?1=1";

      if(url.indexOf("page=")>-1){

        url = url.replace(/page=\d*/, '');

      }

      if(url.indexOf("subway=")>-1){

        url = url.replace(/subway=\d*/, 'subway='+num);

      }else{

        url=url+"&subway="+num;

      }  

    }

    

    window.location.href=url;

  }


function ring(num){



    var url=window.location.href;



    if(url.indexOf("1=1")>-1){

      if(url.indexOf("page=")>-1){

        url = url.replace(/page=\d*/, '');

      }

      if(url.indexOf("ring=")>-1){

        url = url.replace(/ring=\d*/, 'ring='+num);

      }else{

        url=url+"&ring="+num;

      }  

    }else{

      url=url+"?1=1";

      if(url.indexOf("page=")>-1){

        url = url.replace(/page=\d*/, '');

      }

      if(url.indexOf("ring=")>-1){

        url = url.replace(/ring=\d*/, 'ring='+num);

      }else{

        url=url+"&ring="+num;

      }  

    }

    

    $("span a").click(function(){

        $(this).addClass("cur").siblings().removeClass("cur");

    })



    window.location.href=url;

  }


function district(num){



    var url=window.location.href;



    if(url.indexOf("1=1")>-1){
      
      if(url.indexOf("page=")>-1){
        
        url = url.replace(/page=\d*/, '');

      }

      if(url.indexOf("district=")>-1){
        url = url.replace(/district=\d*/, 'district='+num);
        url = url.replace(/&region=\d*/,'');
      }else{

        url=url+"&district="+num;

      }  

    }else{

      url=url+"?1=1";

      if(url.indexOf("page=")>-1){

        url = url.replace(/page=\d*/, '');

      }

      if(url.indexOf("district=")>-1){

        url = url.replace(/district=\d*/, 'district='+num);
        url = url.replace(/&region=\d*/,'');

      }else{

        url=url+"&district="+num;

      }  

    }

    

    $("span a").click(function(){

        $(this).addClass("cur").siblings().removeClass("cur");

    })



    window.location.href=url;

  }

function region(num){



    var url=window.location.href;



    if(url.indexOf("1=1")>-1){

      if(url.indexOf("page=")>-1){

        url = url.replace(/page=\d*/, '');

      }

      if(url.indexOf("region=")>-1){

        url = url.replace(/region=\d*/, 'region='+num);

      }else{

        url=url+"&region="+num;

      }  

    }else{

      url=url+"?1=1";

      if(url.indexOf("page=")>-1){

        url = url.replace(/page=\d*/, '');

      }

      if(url.indexOf("region=")>-1){

        url = url.replace(/region=\d*/, 'region='+num);

      }else{

        url=url+"&region="+num;

      }  

    }

    

    $("span a").click(function(){

        $(this).addClass("cur").siblings().removeClass("cur");

    })



    window.location.href=url;

  }


  function area(num){

    var url=window.location.href;



   if(url.indexOf("1=1")>-1){

      if(url.indexOf("page=")>-1){

        url = url.replace(/page=\d*/, '');

      }

      if(url.indexOf("area=")>-1){

        url = url.replace(/area=\d*/, 'area='+num);

      }else{

        url=url+"&area="+num;

      }  

    }else{

      url=url+"?1=1";

      if(url.indexOf("page=")>-1){

        url = url.replace(/page=\d*/, '');

      }

      if(url.indexOf("area=")>-1){

        url = url.replace(/area=\d*/, 'area='+num);

      }else{

        url=url+"&area="+num;

      }  

    }

    window.location.href=url;

  }



  function price(num){

    var url=window.location.href;

    

   if(url.indexOf("1=1")>-1){

      if(url.indexOf("page=")>-1){

        url = url.replace(/page=\d*/, '');

      }

      if(url.indexOf("price=")>-1){

        url = url.replace(/price=\d*/, 'price='+num);

      }else{

        url=url+"&price="+num;

      }  

    }else{

      url=url+"?1=1";

      if(url.indexOf("page=")>-1){

        url = url.replace(/page=\d*/, '');

      }

      if(url.indexOf("price=")>-1){

        url = url.replace(/price=\d*/, 'price='+num);

      }else{

        url=url+"&price="+num;

      }  

    }

 

    window.location.href=url;

  }



  function List(num){

    var url=window.location.href;

    

   if(url.indexOf("1=1")>-1){

      if(url.indexOf("page=")>-1){

        url = url.replace(/page=\d*/, '');

      }

      if(url.indexOf("List=")>-1){

        url = url.replace(/List=\d*/, 'List='+num);

      }else{

        url=url+"&List="+num;

      }  

    }else{

      url=url+"?1=1";

      if(url.indexOf("page=")>-1){

        url = url.replace(/page=\d*/, '');

      }

      if(url.indexOf("List=")>-1){

        url = url.replace(/List=\d*/, 'List='+num);

      }else{

        url=url+"&List="+num;

      }  

    }

    window.location.href=url;

  }



 



   

</script>

</body>

</html>
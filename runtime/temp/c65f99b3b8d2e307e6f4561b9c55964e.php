<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"/data/home/qxu1590200456/htdocs/application/index/view/entrust/ensale.html";i:1520820841;}*/ ?>
<!DOCTYPE html>

<html> 

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>出售业务 </title>

<meta name="description" content="租赁业务" />

<meta name="keywords" content="租赁业务,北京地产地产" />

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

  <script type="text/javascript" src="__STATIC__/stand/js/belatedPNG.js"></script>

  <script type="text/javascript">

    DD_belatedPNG.fix('.nav_wrap');

  </script>

<![endif]-->

</head>

<body>

    <style>#nav_112 {text-decoration: none;  border-radius: 4px; background: #5ea629;}</style>

    <div class="header-wrap">

        <div class="mar-wrap">

            <a href="<?php echo url('index/index'); ?>" title="地产" class="logo"><img style="width: 100px;height: 66px;" src="__STATIC__/travel/images/logo.png" alt=""></a>

           

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

  <div class="mar-wrap">

    <div class="rent-wrap">

      <h3 class="rent-title">出售业务</h3>

      <div class="form-wrap">

        <h3>个人信息</h3>

                <div class="info-wrap">

          <form name="enrentalAdd" method="post" enctype="multipart/form-data" action="<?php echo url('entrust/ensaleAdd'); ?>">

            <input name="enews" value="AddFeedback" type="hidden">

            <input name="bid" value="4" type="hidden">

            <div class="control-wrap clearfix">

              <label for=""><span>*</span>联系人：</label>

              <input type="text" name="ensale_name" value="" id="ensale_name">

            </div>

            <div class="control-wrap clearfix">

              <label for=""><span>*</span>联系方式：</label>

              <input type="text" name="tel" value="" id="tel">

            </div>

            <div class="control-wrap clearfix">

              <label for=""><span>*</span>验证码：</label>

              <input type="text" name="code" id="code" maxlength="6" style="width:90px;">

              <span onclick="sendCode()" id="code_send" style="border:1px solid red">发送验证码</span>

            </div>

          </div>

          <h3>房源信息</h3>

          <div class="info-wrap">

            <div class="control-wrap clearfix">

              <label for=""><span>*</span>售价：</label>

              <input type="text" style="width:150px;" name="ensale_price" value="" placeholder="元/平米" id="ensale_price">

            </div>

            <div class="control-wrap clearfix">

              <label for=""><span>*</span>面积：</label>

              <input type="text" style="width:150px;" name="ensale_area" id="ensale_area">

            </div>

            <div class="control-wrap clearfix">

              <label for=""><span>*</span>附近地铁：</label>

              <input type="text" style="width:150px;" name="ensale_subway" id="ensale_subway">

            </div>

            <div class="control-wrap clearfix">

              <label for=""><span>*</span>区域(位置)：</label>

              <input type="text" name="ensale_address" value="" id="ensale_address">

            </div>

          

            <div class="control-wrap clearfix">

              <label for="">开卖日期：</label>

              <input type="text" style="width:150px;" name="ensale_time" id="ensale_time" placeholder="X年X月X日">

            </div>

            <div class="control-wrap clearfix">

              <label for="">其他介绍：</label>

              <textarea name="ensale_des" id="ensale_des" cols="30" rows="10"></textarea>

            </div>

            <div class="control-wrap clearfix">

                <label >图例：</label>

                

                  <input type="file" name="image" accept="image/jpg,image/jpeg,image/png"/> <br> <br>

                                          <span>ps:请上传jpg,jpeg,png格式的图片哦~</span>

                

            </div>

            <button type="submit" class="submit-info">提交</button>

          </form>

                </div>

      </div>

    </div>

  </div>

      <script type="text/javascript" src="__STATIC__/travel/js/jquery-1.10.1.min.js"></script>

      <script type="text/javascript" src="__STATIC__/travel/js/min.index.js"></script>

      <script type="text/javascript" src="__STATIC__/travel/js/jquery.easing.min.js"></script>

      <script type="text/javascript" src="__STATIC__/travel/js/killercarousel.js"></script> 

      <script type="text/javascript" src="__STATIC__/travel/js/noCopy.js"></script>

      <script language="javascript" src="__STATIC__/loginsty/js/custom.js"></script>

      <script type="text/javascript" src="__STATIC__/travel/js/lkrtl.min.js"></script>

      <script type="text/javascript" src="__STATIC__/travel/js/layer.js"></script>

     

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

    <li> <a href="javascript:void(0)" class="youhui"> <img src="__STATIC__/travel/images/l02.png" width="47" height="49" class="shows" /> <img src="__STATIC__/travel/images/a.png" width="57" height="49" class="hides" /> <img src="__STATIC__/travel/images/weixin.jpg" width="145" class="2wm" style="display:none;margin:-100px 57px 0 0" /> </a> </li> 

    <li> <a href="javascript:void(0)" id="fankui"> 

      <div class="hides" style="width:161px;display:none;" id="qq"> 

       <div class="hides" id="p1"> 

        <img src="__STATIC__/travel/images/ll04.png" /> 

       </div> 

       <div class="hides" id="p2">

        <span style="color:#FFF;font-size:13px">意见反馈</span>

       </div> 

      </div> <img src="__STATIC__/travel/images/l04.png" width="47" height="49" class="shows" /> </a> </li> 

    <li id="tel"> <a href="javascript:void(0)"> 

      <div class="hides" style="width:161px;display:none;" id="tels"> 

       <div class="hides" id="p1"> 

        <img src="__STATIC__/travel/images/ll05.png" /> 

       </div> 

       <div class="hides" id="p3">

        <span style="color:#FFF;font-size:12px">13111871088</span> 

       </div> 

      </div> <img src="__STATIC__/travel/images/l05.png" width="47" height="49" class="shows" /> </a> </li> 

    <li id="btn"> <a id="top_btn"> 

      <div class="hides" style="width:161px;display:none"> 

       <img src="__STATIC__/travel/images/ll06.png" width="161" height="49" /> 

      </div> <img src="__STATIC__/travel/images/l06.png" width="47" height="49" class="shows" /> </a> </li> 

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

<!-- 代码 结束 -->

 <span style="display:none;"><script>

var _hmt = _hmt || [];

(function() {

  var hm = document.createElement("script");

  hm.src = "//hm.baidu.com/hm.js?56fd97fab2697f58776995f4884b17f8";

  var s = document.getElementsByTagName("script")[0]; 

  s.parentNode.insertBefore(hm, s);

})();

</script>

<!--统计代码-->

<script>

(function(){

    var bp = document.createElement('script');

    var curProtocol = window.location.protocol.split(':')[0];

    if (curProtocol === 'https') {

        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';        

    }

    else {

        bp.src = 'http://push.zhanzhang.baidu.com/push.js';

    }

    var s = document.getElementsByTagName("script")[0];

    s.parentNode.insertBefore(bp, s);

})();









</script>

<!--自动推送代码--></span>

<script type="text/javascript">

  // $(function(){



  //发送验证码

  function sendCode(){

    var num = $("#tel").val();

    if (is_mobile(num)) {

      TimeCountdown();

      var url="<?php echo url('entrust/sendMsg'); ?>?num="+num;

      $.ajax({

          url:url,

          success: function(data){

           layer.msg(data.info);

        }

      });

    }else layer.msg('请输入正确的电话号码');

     

  };





  var initwait = 60;//初始化计数时间

  var wait = 60; //倒计时

  var stime = getCookie('send_time');//获取cookie保存的倒计时时间戳

  var ctime = getCurrTime();//当前时间戳

  if(stime != undefined){

    if(stime - ctime>0){

      wait = stime - ctime;

      TimeCountdown();

    }

  }

   function TimeCountdown(){

        if (wait == 0) {

            $('#code_send').html('重发验证码');

            // $('#code_send').attr("value",'重发验证码');

            $('#code_send').attr("disabled", false);

            wait = initwait;

        }else {

            if(!getCookie('send_time')){

                setCookie('send_time', getCurrTime()+initwait, 1/1440);

            }

            $('#code_send').attr("disabled", true);

            $('#code_send').html(wait + "秒后重发");

            // $('#code_send').attr("value",wait + "秒后重发");

            wait--;

            setTimeout(function(){

                TimeCountdown();

            }, 1000);

        }

    }

  //获取当前时间戳

  function getCurrTime(){

    var now = new Date(); //获取系统日期，即Sat Jul 29 08:24:48 UTC+0800 2006

    return Math.ceil(now.getTime()/1000);

  }



// });



  //验证手机号

function is_mobile(mobile) {

     if( mobile == "") {

      return false;

     } else {

       if( ! /^0{0,1}(13[0-9]|17[0-9]|15[0-9]|18[0-9]|14[0-9])[0-9]{8}$/.test(mobile) ) {

        return false;

      }

      return true;

    }

}



</script>

</body>

</html>
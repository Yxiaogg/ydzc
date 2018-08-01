<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:75:"/data/home/qxu1590200456/htdocs/application/cner/view/admin/adminlogin.html";i:1520041954;s:72:"/data/home/qxu1590200456/htdocs/application/cner/view/public/footer.html";i:1516390856;}*/ ?>
﻿<!DOCTYPE HTML>

<html>

<head>

<meta charset="utf-8">

<meta name="renderer" content="webkit|ie-comp|ie-stand">

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />

<meta http-equiv="Cache-Control" content="no-siteapp" />

<!--[if lt IE 9]>

<script type="text/javascript" src="__STATIC__/lib/html5shiv.js"></script>

<script type="text/javascript" src="__STATIC__/lib/respond.min.js"></script>

<![endif]-->

<link href="__STATIC__/static/h-ui/css/H-ui.min.css" rel="stylesheet" type="text/css" />

<link href="__STATIC__/static/h-ui.admin/css/H-ui.login.css" rel="stylesheet" type="text/css" />

<link href="__STATIC__/static/h-ui.admin/css/style.css" rel="stylesheet" type="text/css" />

<link href="__STATIC__/lib/Hui-iconfont/1.0.8/iconfont.css" rel="stylesheet" type="text/css" />

<!--[if IE 6]>

<script type="text/javascript" src="__STATIC__/lib/DD_belatedPNG_0.0.8a-min.js" ></script>

<script>DD_belatedPNG.fix('*');</script>

<![endif]-->

<title>后台登录 - H-ui.admin v3.1</title>

<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">

<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">

</head>

<body>

<input type="hidden" id="TenantId" name="TenantId" value="" />

<div class="header"></div>

<div class="loginWraper">

  <div id="loginform" class="loginBox">

    <form class="form form-horizontal" id="login" method="post">

      <div class="row cl">

        <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60d;</i></label>

        <div class="formControls col-xs-8">

          <input id="adminEmail" name="adminEmail" type="text" placeholder="邮箱" class="input-text size-L">

        </div>

      </div>

      <div class="row cl">

        <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60e;</i></label>

        <div class="formControls col-xs-8">

          <input id="adminPwd" name="adminPwd" type="password" placeholder="密码" class="input-text size-L">

        </div>

      </div>

      <div class="row cl">

        <div class="formControls col-xs-8 col-xs-offset-3">

          <input id="vertify" name="vertify" class="input-text size-L" type="text" placeholder="验证码"  style="width:150px;">

          <img id="ver" src="<?php echo captcha_src(); ?>" onclick="refresh()"> </div>

      </div>

     

      <div class="row cl">

        <div class="formControls col-xs-8 col-xs-offset-3">

          <input name="sub" id="sub" type="button" class="btn btn-success radius size-L" value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">

          <input name="" type="reset" class="btn btn-default radius size-L" value="&nbsp;取&nbsp;&nbsp;&nbsp;&nbsp;消&nbsp;">

        </div>

      </div>

    </form>

  </div>

</div>

<div class="footer">Copyright 英地资产 by H-ui.admin v3.1</div>

<script type="text/javascript" src="__STATIC__/lib/jquery/1.9.1/jquery.min.js"></script> 

<script type="text/javascript" src="__STATIC__/static/h-ui/js/H-ui.min.js"></script>

<script type="text/javascript" src="__STATIC__/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="__STATIC__/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="__STATIC__/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--此乃百度统计代码，请自行删除-->

<script>

function refresh(){

  var a=Math.random();

  $("#ver").attr("src","<?php echo captcha_src(); ?>?a="+a);

}

</script>



<script type="text/javascript">

  $(document).ready(function() {

    $('#sub').click(function() {

      $.ajax({

        url: "<?php echo url('checkLogin'); ?>",

        type: 'post',

        dataType: 'json',

        data: $('#login').serialize(),

        success:function(data){

          if(data.status==0){

            layer.msg(data.msg);

          }else{

            window.location.href="<?php echo url('index/index'); ?>";

          }

        }







      });

      

      

    });

  });







</script>



</body>

</html>
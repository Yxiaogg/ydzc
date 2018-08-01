<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"/data/home/qxu1590200456/htdocs/application/index/view/entrust/enrental.html";i:1522213366;}*/ ?>
<!DOCTYPE html>

<html> 

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>在线委托 </title>

<meta name="description" content="租赁业务" />

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

            var ReturnLinkUrl = linkurl.replace(host,"http://yingdizichan.com");

            window.location = ReturnLinkUrl;

        }

    }

})();

</script>

<link  href="__STATIC__/travel/css/style.css" rel="stylesheet" type="text/css" media="all" />

<link rel="stylesheet" type="text/css"  href="__STATIC__/travel/css/style2.css"/>

<link rel="stylesheet" type="text/css"  href="__STATIC__/lib/webuploader/0.1.5/webuploader.css"/>



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


            <a href="<?php echo url('index/index'); ?>" title="地产" class="logo"><img style="width: 100px;height: 60px;" src="__STATIC__/travel/images/logo.png" alt=""></a>

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

	<div class="mar-wrap">

		<div class="rent-wrap">

			<h3 class="rent-title">在线委托</h3>

			<div class="form-wrap">

				<h3>个人信息</h3>

                <div class="info-wrap">

					<form name="form1" id="form1" method="post" action="">
              <input type="hidden" name="type" value="<?php echo $type; ?>">
						<div class="control-wrap clearfix">

							<label for="">联系人：</label>

							<input type="text" name="name" value="" id="enrental_name">

						</div>

						<div class="control-wrap clearfix">

							<label for=""><span>*</span>联系方式：</label>

							<input type="text" name="phone" value="" id="tel">

						</div>

					</div>

					<h3>房源信息</h3>

					<div class="info-wrap">

            <div class="control-wrap clearfix">

              <label for="">楼盘名称：</label>

              <input type="text" name="home_name" value="" id="enrental_name">

            </div>

						<div class="control-wrap clearfix">

							<label for="">区域(位置)：</label>

							<input type="text" name="address" value="" id="enrental_address">

						</div>


						<div class="control-wrap clearfix">

							<label for="">其他介绍：</label>

							<textarea name="des" id="enrental_des" cols="30" rows="10"></textarea>

						</div>

            <div class="control-wrap control-img clearfix">

                <label >上传图片：</label> 
                <div class="upload">
                  <div id="uploader" class="wu-example">
                    <div id="fileList" class="uploader-list"></div>
                  <input type="hidden"  placeholder="" id="main_img_url" name="img" value="">
                  <div id="filePicker">选择图片</div>
                  <div style="clear: both"></div>
                  
                  </div>
                </div>                

            </div>

						<button type="button" id="btn" class="submit-info">提交</button>

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

     <script type="text/javascript" src="__STATIC__/lib/webuploader/0.1.5/webuploader.min.js"></script>

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

        <span style="color:#FFF;font-size:12px">13111871088s</span> 

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

<!-- 上传 -->

<script type="text/javascript">
var $ = jQuery,
        $list = $('#fileList'),
        // 优化retina, 在retina下这个值是2
        ratio = window.devicePixelRatio || 1,

        // 缩略图大小
        thumbnailWidth = 100 * ratio,
        thumbnailHeight = 100 * ratio,

        // Web Uploader实例
        uploader;
var uploader = WebUploader.create({
    auto: true,
    swf: '__STATIC__/lib/webuploader/0.1.5/Uploader.swf',

    // 文件接收服务端。
    server: "<?php echo url('cner/image/upload',['filename'=>'enrental']); ?>",

    // 选择文件的按钮。可选。
    // 内部根据当前运行是创建，可能是input元素，也可能是flash.
    pick: '#filePicker',

    // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
    resize: false,
    // 只允许选择图片文件。
    accept: {
      title: 'Images',
      extensions: 'gif,jpg,jpeg,bmp,png',
      mimeTypes: 'image/*'
    }
  });

   uploader.on( 'fileQueued', function( file ) {
        $list.empty();
        var $li = $(
                '<div id="' + file.id + '" class="file-item thumbnail">' +
                    '<img>' +
                    '<div class="info">' + file.name + '</div>' +
                '</div>'
                ),
            $img = $li.find('img');

        $list.append( $li );

        // 创建缩略图
        uploader.makeThumb( file, function( error, src ) {
            if ( error ) {
                $img.replaceWith('<span>不能预览</span>');
                return;
            }

            $img.attr( 'src', src );
        }, thumbnailWidth, thumbnailHeight );
    });

    // 文件上传过程中创建进度条实时显示。
    uploader.on( 'uploadProgress', function( file, percentage ) {
        var $li = $( '#'+file.id ),
            $percent = $li.find('.progress span');

        // 避免重复创建
        if ( !$percent.length ) {
            $percent = $('<p class="progress"><span></span></p>')
                    .appendTo( $li )
                    .find('span');
        }

        $percent.css( 'width', percentage * 100 + '%' );
    });

    // 文件上传成功，给item提交成功class, 用样式标记上传成功。
    uploader.on( 'uploadSuccess', function( file ) {
        $( '#'+file.id ).addClass('upload-state-done');
    });
   
    // 文件上传失败，现实上传出错。
    uploader.on( 'uploadError', function( file ) {
        var $li = $( '#'+file.id ),
            $error = $li.find('div.error');

        // 避免重复创建
        if ( !$error.length ) {
            $error = $('<div class="error"></div>').appendTo( $li );
        }

        $error.text('上传失败');
    });

    // 完成上传完了，成功或者失败，先删除进度条。
    uploader.on( 'uploadComplete', function( file ) {
        $( '#'+file.id ).find('.progress').remove();
    });
    
    uploader.on('uploadAccept', function (file, data) {
    if (data.status == 1) {
      $('#main_img_url').val(data.message);
    } else if (data.status != 1) {
      layer.msg('上传失败,请重试！', {icon: 5});
    }
  });
</script>

<script>
  $('#btn').click(function(){
    var data=$('#form1').serializeArray();
    var postData={};
    $(data).each(function(i){
      postData[this.name]=this.value;
    });
    var url="<?php echo url('enrentalAdd'); ?>";
    var jump="<?php echo url('entrust'); ?>";
    $.post(url,postData,function(res){
      if(res.status==1){
        layer.open({
          content : res.message,
          icon : 1,
          yes : function(){
            parent.location.href=jump;
          },
        });
      }else if(res.status==0){
        layer.msg(res.message);
      }
    },'JSON');
  })
</script>

</body>

</html>
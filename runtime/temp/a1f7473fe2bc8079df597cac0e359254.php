<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"D:\xampp\htdocs\ydzc/application/cner\view\rental\rentaledit.html";i:1531876854;}*/ ?>
<!DOCTYPE HTML>

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

<link rel="stylesheet" type="text/css" href="__STATIC__/static/h-ui/css/H-ui.min.css" />

<link rel="stylesheet" type="text/css" href="__STATIC__/static/h-ui.admin/css/H-ui.admin.css" />

<link rel="stylesheet" type="text/css" href="__STATIC__/lib/Hui-iconfont/1.0.8/iconfont.css" />

<link rel="stylesheet" type="text/css" href="__STATIC__/static/h-ui.admin/skin/default/skin.css" id="skin" />

<link rel="stylesheet" type="text/css" href="__STATIC__/static/h-ui.admin/css/style.css" />

<link href="__STATIC__/lib/webuploader/0.1.5/webuploader.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>

<script type="text/javascript" src="__STATIC__/lib/DD_belatedPNG_0.0.8a-min.js" ></script>

<script>DD_belatedPNG.fix('*');</script>

<![endif]-->

<title>修改租房信息</title>

<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">

<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">

</head>

<body>

<article class="page-container">

	<form class="form form-horizontal" id="form1" method="post" >

    <div class="row cl">

		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>编号：</label>

		<div class="formControls col-xs-8 col-sm-9">

			<input type="text" class="input-text" value="<?php echo $rentalInfo['identifier']; ?>"   id="identifier" name="identifier">

		</div>

	</div>

	<div class="row cl">

		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>租房名字：</label>

		<div class="formControls col-xs-8 col-sm-9">

			<input type="text" class="input-text" value="<?php echo $rentalInfo['rental_name']; ?>"   id="rental_name" name="rental_name">

		</div>

	</div>

	<div class="row cl">

		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>附近地铁：</label>

		<div class="formControls col-xs-8 col-sm-9">

			<select name="rental_subway" class="select">
              <?php if(is_array($sub) || $sub instanceof \think\Collection || $sub instanceof \think\Paginator): $i = 0; $__LIST__ = $sub;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$s): $mod = ($i % 2 );++$i;?>
				<option value="<?php echo $s['subway_num']; ?>" <?php if($rentalInfo['rental_subway'] == $s['subway_num']): ?>selected="selected"<?php endif; ?>><?php echo $s['subway_name']; ?></option>
			  <?php endforeach; endif; else: echo "" ;endif; ?>
			</select>

		</div>

	</div>

	<div class="row cl">

		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>附近环线：</label>

		<div class="formControls col-xs-8 col-sm-9">

			<select name="rental_ring" class="select">
              <?php if(is_array($ring) || $ring instanceof \think\Collection || $ring instanceof \think\Paginator): $i = 0; $__LIST__ = $ring;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i;?>
				<option value="<?php echo $r['ring_num']; ?>" <?php if($rentalInfo['rental_ring'] == $r['ring_num']): ?>selected="selected"<?php endif; ?>><?php echo $r['ring_name']; ?></option>
			  <?php endforeach; endif; else: echo "" ;endif; ?>
			</select>

		</div>

	</div>

    <div class="row cl">

		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>所属区县：</label>

		<div class="formControls col-xs-8 col-sm-2">

			<select name="rental_district" class="select" id="dis">
              <?php if(is_array($dis) || $dis instanceof \think\Collection || $dis instanceof \think\Paginator): $i = 0; $__LIST__ = $dis;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?>
				<option value="<?php echo $d['id']; ?>" <?php if($d['id'] == $rentalInfo['rental_district']): ?>selected="selected"<?php endif; ?>><?php echo $d['name']; ?></option>
			  <?php endforeach; endif; else: echo "" ;endif; ?>
			</select>

		</div>

	</div>

	<div class="row cl">

		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>下属区域：</label>

		<div class="formControls col-xs-8 col-sm-2">

			<select name="rental_region" class="select" id="reg">
			   <?php if(is_array($reg) || $reg instanceof \think\Collection || $reg instanceof \think\Paginator): $i = 0; $__LIST__ = $reg;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$reg): $mod = ($i % 2 );++$i;?>
				<option value="<?php echo $reg['id']; ?>" <?php if($reg['id'] == $rentalInfo['rental_region']): ?>selected="selected"<?php endif; ?>><?php echo $reg['name']; ?></option>
			   <?php endforeach; endif; else: echo "" ;endif; ?>
			</select>

		</div>

	</div>

    <div class="row cl">

		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>租房地址：</label>

		<div class="formControls col-xs-8 col-sm-9">

			<input type="text" class="input-text" autocomplete="off" value="<?php echo $rentalInfo['rental_address']; ?>" placeholder="租房地址" id="rental_address" name="rental_address">

		</div>

	</div>

	<div class="row cl">

		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>租房面积：</label>

		<div class="formControls col-xs-8 col-sm-9">

			<input type="text" class="input-text" autocomplete="off" value="<?php echo $rentalInfo['rental_area']; ?>"  id="rental_area" name="rental_area">

		</div>

	</div>

	<div class="row cl">

		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>租金</label>

		<div class="formControls col-xs-8 col-sm-9">

			<input type="text" class="input-text" autocomplete="off"  value="<?php echo $rentalInfo['rental_price']; ?>" id="rental_price" name="rental_price">

		</div>

	</div>

	<div class="row cl">

		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>类型</label>

		<div class="formControls col-xs-8 col-sm-9">

			<input type="text" class="input-text" autocomplete="off"  value="<?php echo $rentalInfo['rental_class']; ?>" id="rental_class" name="rental_class">

		</div>

	</div>

	<div class="row cl">

		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>是否置顶：</label>

		<div class="formControls col-xs-8 col-sm-9 skin-minimal">

			<div class="radio-box">

				<input name="rental_role" type="radio" id="rental_role-1" value="1" checked>

				<label for="rental_role-1">是</label>

			</div>

			<div class="radio-box">

				<input type="radio" id="rental_role-2" name="rental_role" value="0">

				<label for="rental_role-2">否</label>

			</div>

		</div>

	</div>

	<div class="row cl">

		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>简介</label>

		<div class="formControls col-xs-8 col-sm-9">

			

			<script id="editor" name="rental_des" type="text/plain" ><?php echo $rentalInfo['rental_des']; ?></script> 

		</div>

	</div>

	
    <div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">
		缩略图：</label>
		<div class="formControls col-xs-8 col-sm-9">
	    <div class="uploader-thum-container">
		<input type="hidden"  placeholder="" id="main_img_url" name="rental_src" value="<?php echo $rentalInfo['rental_src']; ?>">
	    <div id="fileList" class="uploader-list"></div>
	    <div id="filePicker">选择图片</div>
		<div style="clear: both"></div>
		<?php if($rentalInfo['rental_src'] != ''): ?>
		<img src="__STATIC__/<?php echo $rentalInfo['rental_src']; ?>" style="width: 400px" id="thumb">
		<?php else: ?>
		<img src="" id="thumb"  style="display: none;width: 400px">
		<?php endif; ?>
		</div>
		</div>
	</div>
	

	

	

	

	<div class="row cl">

		<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">

			<input class="btn btn-primary radius" type="button" id="btn" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">

		</div>

	</div>

	</form>

</article>



<!--_footer 作为公共模版分离出去--> 

<script type="text/javascript" src="__STATIC__/lib/jquery/1.9.1/jquery.min.js"></script> 

<script type="text/javascript" src="__STATIC__/lib/layer/2.4/layer.js"></script>

<script type="text/javascript" src="__STATIC__/static/h-ui/js/H-ui.min.js"></script> 

<script type="text/javascript" src="__STATIC__/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->



<!--请在下方写此页面业务相关的脚本-->

<script type="text/javascript" src="__STATIC__/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 

<script type="text/javascript" src="__STATIC__/lib/jquery.validation/1.14.0/validate-methods.js"></script> 

<script type="text/javascript" src="__STATIC__/lib/jquery.validation/1.14.0/messages_zh.js"></script> 

<script type="text/javascript">

</script> 



<script type="text/javascript" src="__STATIC__/lib/ueditor/1.4.3/ueditor.config.js"></script>

<script type="text/javascript" src="__STATIC__/lib/ueditor/1.4.3/ueditor.all.min.js"> </script>

<script type="text/javascript" src="__STATIC__/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>

<script type="text/javascript" src="__STATIC__/lib/webuploader/0.1.5/webuploader.min.js"></script>

<!--/请在上方写此页面业务相关的脚本-->

<script>
	$('#btn').click(function(){
		var data=$('#form1').serializeArray();
		var postData={};
		$(data).each(function(i){
			postData[this.name]=this.value;
		});
		var url="<?php echo url('rentaledit',['id'=>$rentalInfo['rental_id']]); ?>";
		var jump="<?php echo url('rentalList'); ?>";
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

<script type="text/javascript">

	$(function(){

	var ue = UE.getEditor('editor');
    var uploader = WebUploader.create({
		auto: true,
		swf: '__STATIC__/lib/webuploader/0.1.5/Uploader.swf',

		// 文件接收服务端。
		server: "<?php echo url('Image/uploadthumb',['filename'=>'rental']); ?>",

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
	uploader.on('uploadAccept', function (file, data) {
		if (data.status == 1) {
			$('#main_img_url').val(data.message);
			$('#thumb').attr('src','__STATIC__/'+ data.message);
			$('#thumb').show();
		} else if (data.status != 1) {
			layer.msg('上传失败,请重试！', {icon: 5});
		}
	});
});

</script>
<script type="text/javascript">
	$('#dis').change(function() {
		var opt=$("#dis").val();
        var data={
        	'pid' : opt,
        };
		$.post("<?php echo url('rentalajax'); ?>",data,function(res){
			if(res.status==1){
				$('#reg').empty();
				$('#reg').append(res.message);
			}
		},'json')
	});
</script>
</body>

</html>
<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:59:"D:\xampp\htdocs\ydzc/application/cner\view\book\addimg.html";i:1531876854;}*/ ?>
<!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="__PUBLIC__/lib/html5shiv.js"></script>
<script type="text/javascript" src="__PUBLIC__/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="__STATIC__/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="__STATIC__/static/h-ui.admin/css/style.css" />
	<link href="__STATIC__/lib/webuploader/0.1.5/webuploader.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="__PUBLIC__/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<!--/meta 作为公共模版分离出去-->

<title>封面图</title>
</head>
<body>
<div class="page-container">
	<form action="" method="post" class="form form-horizontal" id="form1">
		<div id="tab-category" class="HuiTab">
			<div class="tabCon">
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2">
						封面图：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<div class="uploader-thum-container">
							<input type="hidden" name="mid" value="<?php echo $id; ?>">
							<input type="hidden"  placeholder="" id="main_img_url" name="img" value="">
							<div id="fileList" class="uploader-list"></div>
							<div id="filePicker">选择图片</div>
							<div style="clear: both"></div>
							<img src="" id="thumb"  style="display: none;width: 400px">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row cl">
			<div class="col-9 col-offset-2">
				<input class="btn btn-primary radius" type="button" id="btn" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
			</div>
		</div>
	</form>
</div>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="__STATIC__/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__STATIC__/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="__STATIC__/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="__STATIC__/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="__STATIC__/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="__STATIC__/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="__STATIC__/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript" src="__STATIC__/lib/webuploader/0.1.5/webuploader.min.js"></script>
<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	
	$("#tab-category").Huitab({
		index:0
	});
	$("#form-category-add").validate({
		rules:{
			
		},
		onkeyup:false,
		focusCleanup:true,
		success:"valid",
		submitHandler:function(form){
			//$(form).ajaxSubmit();
			var index = parent.layer.getFrameIndex(window.name);
			//parent.$('.btn-refresh').click();
			parent.layer.close(index);
		}
	});
	var uploader = WebUploader.create({
		auto: true,
		swf: '__STATIC__/lib/webuploader/0.1.5/Uploader.swf',

		// 文件接收服务端。
		server: "<?php echo url('image/upload',['filename'=>'bookimg']); ?>",

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
<!--/请在上方写此页面业务相关的脚本-->
<script>
	$('#btn').click(function(){
		var data=$('#form1').serializeArray();
		var postData={};
		$(data).each(function(i){
			postData[this.name]=this.value;
		});
		var url="<?php echo url('addimg'); ?>";
		var jump="<?php echo url('index'); ?>";
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
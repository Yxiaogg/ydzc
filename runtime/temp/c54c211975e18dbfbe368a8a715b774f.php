<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:61:"D:\xampp\htdocs\ydzc/application/index\view\about\resume.html";i:1531876854;}*/ ?>
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

<!--[if IE 6]>

<script type="text/javascript" src="__STATIC__/lib/DD_belatedPNG_0.0.8a-min.js" ></script>

<script>DD_belatedPNG.fix('*');</script>

<![endif]-->

<title>添加招聘信息</title>

<meta name="keywords" content="">

<meta name="description" content="">

</head>

<body>

<article class="page-container">

	<form class="form form-horizontal" id="resume" method="post"  >

	<div class="row cl">

		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>应聘职位：</label>

		<div class="formControls col-xs-8 col-sm-9">

			<input type="text" class="input-text" value="<?php echo $employ['employ_title']; ?>" disabled="disabled"  id="resume_title" name="resume_title">

		</div>

	</div>

	<div class="row cl">

		<label class="form-label col-xs-4 col-sm-3">姓名：</label>

		<div class="formControls col-xs-8 col-sm-9">

			<input type="text" class="input-text"  value="" placeholder="姓名" name="resume_name" id="resume_name">

		</div>

	</div>

	<div class="row cl">

		<label class="form-label col-xs-4 col-sm-3">性别：</label>

		<div class="formControls col-xs-8 col-sm-9">

			<input type="radio" name="resume_sex" id="resume_sex" value="男" checked="checked"><span>男</span>

			<input type="radio" name="resume_sex" id="resume_sex" value="女"><span>女</span>

		</div>

	</div>

	<div class="row cl">

		<label class="form-label col-xs-4 col-sm-3">年龄：</label>

		<div class="formControls col-xs-8 col-sm-9">

			<input type="text" class="input-text" autocomplete="off" value="" placeholder="年龄" id="resume_age" name="resume_age">

		</div>

	</div>

	<div class="row cl">

		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>手机：</label>

		<div class="formControls col-xs-8 col-sm-9">

			<input type="text" class="input-text" autocomplete="off" value="" placeholder="手机" id="resume_tel" name="resume_tel">

		</div>

	</div>

	<div class="row cl">

		<label class="form-label col-xs-4 col-sm-3">邮箱：</label>

		<div class="formControls col-xs-8 col-sm-9">

			<input type="text" class="input-text" autocomplete="off" value="" placeholder="邮箱" id="resume_email" name="resume_email">

		</div>

	</div>

	<div class="row cl">

		<label class="form-label col-xs-4 col-sm-3">住址：</label>

		<div class="formControls col-xs-8 col-sm-9">

			<input type="text" class="input-text" autocomplete="off" value="" placeholder="住址" id="resume_address" name="resume_address">

		</div>

	</div>

	







	<div class="row cl">

		<label class="form-label col-xs-4 col-sm-3">学历:</label>

		<div class="formControls col-xs-8 col-sm-9">

			

			<input type="text" class="input-text" name="resume_study" id="resume_study">  



		</div>

	</div>



	<div class="row cl">

		<label class="form-label col-xs-4 col-sm-3">个人简介:</label>

		<div class="formControls col-xs-8 col-sm-9">

			

			<textarea name="resume_des" id="content" value=""></textarea>

		</div>

	</div>



	

	<div class="row cl">

		<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">

			<input class="btn btn-primary radius" type="button" id="sub" name="sub" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">

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

<!--/请在上方写此页面业务相关的脚本-->

<script type="text/javascript">

	$(document).ready(function() {

	$('#sub').click(function() {

		$.ajax({

			url: "<?php echo url('about/resume'); ?>?employ_id=<?php echo $employ['employ_id']; ?>&employ_title=<?php echo $employ['employ_title']; ?>",

			type: 'post',

			dataType: 'json',

			data: $('#resume').serialize(),

			success:function(data){

				if(data.status==0){

					layer.msg(data.msg);

				}else{

					parent.location.href="<?php echo url('employ'); ?>"

					

				}

			}

		})

		

	});

});

</script>

<script type="text/javascript">


	UE.getEditor('content',{initialFrameWidth:823,initialFrameHeight:400,});


</script>

</body>

</html>
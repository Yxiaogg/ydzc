<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:63:"D:\xampp\htdocs\ydzc/application/cner\view\member\lecturer.html";i:1531876854;s:61:"D:\xampp\htdocs\ydzc/application/cner\view\public\footer.html";i:1531876854;}*/ ?>
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

<link rel="stylesheet" type="text/css" href="__STATIC__/static/h-ui/css/H-ui.min.css" />

<link rel="stylesheet" type="text/css" href="__STATIC__/static/h-ui.admin/css/H-ui.admin.css" />



<link rel="stylesheet" type="text/css" href="__STATIC__/css/adminpage.css"/>



<link rel="stylesheet" type="text/css" href="__STATIC__/static/h-ui.admin/skin/default/skin.css" id="skin" />

<link rel="stylesheet" type="text/css" href="__STATIC__/static/h-ui.admin/css/style.css" />

<link href="__STATIC__/lib/Hui-iconfont/1.0.8/iconfont.css" rel="stylesheet" type="text/css" />

<!--[if IE 6]>

<script type="text/javascript" src="__STATIC__/lib/DD_belatedPNG_0.0.8a-min.js" ></script>

<script>DD_belatedPNG.fix('*');</script>

<![endif]-->

<title>导师管理</title>

</head>

<body>

<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 导师管理 <span class="c-gray en">&gt;</span> 导师列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>

<div class="page-container">

	

	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"> <a href="javascript:;" onclick="rental_add('添加导师信息','<?php echo url('lectureradd'); ?>')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加导师信息</a></span></div>

	<div class="mt-20">

	<table class="table table-border table-bordered table-hover table-bg table-sort">

		<thead>

			<tr class="text-c">

				<th >导师名</th>

				<th width="300px">导师图片</th>

				<th width="">导师类型</th>

				<th>操作</th>

				

			</tr>

		</thead>

		<tbody>

			<?php if(is_array($le) || $le instanceof \think\Collection || $le instanceof \think\Paginator): $i = 0; $__LIST__ = $le;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

			<tr class="text-c">

				<td><?php echo $vo['name']; ?></td>

				<td><img style="width: 250px;height: 150px;" src="__STATIC__/<?php echo $vo['img']; ?>"></td>

				<td><?php echo getlecturer($vo['type']); ?></td>

				<td>
                    <a title="编辑" href="javascript:;" onclick="rental_edit('修改导师信息','<?php echo url('lectureredit',['id'=>$vo['id']]); ?>','<?php echo $vo['id']; ?>','700','480')" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a>
					

					<a title="删除" href="javascript:;" onclick="system_category_del(this,<?php echo $vo['id']; ?>)" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>

				</td>

			</tr>

			<?php endforeach; endif; else: echo "" ;endif; ?>



		</tbody>

	</table><?php echo $le->render(); ?>

	</div>

</div>

<!--_footer 作为公共模版分离出去-->

<script type="text/javascript" src="__STATIC__/lib/jquery/1.9.1/jquery.min.js"></script> 

<script type="text/javascript" src="__STATIC__/lib/layer/2.4/layer.js"></script>

<script type="text/javascript" src="__STATIC__/static/h-ui/js/H-ui.min.js"></script> 

<script type="text/javascript" src="__STATIC__/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->



<!--请在下方写此页面业务相关的脚本-->

<script type="text/javascript" src="__STATIC__/lib/My97DatePicker/4.8/WdatePicker.js"></script> 

<script type="text/javascript" src="__STATIC__/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 

<script type="text/javascript" src="__STATIC__/lib/laypage/1.2/laypage.js"></script>

<script type="text/javascript" src="__STATIC__/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="__STATIC__/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="__STATIC__/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<script type="text/javascript">

$(function(){

	$('.table-sort').dataTable({

		"aaSorting": [[ 1, "desc" ]],//默认第几个排序

		"bStateSave": true,//状态保存

		"aoColumnDefs": [

		  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示

		  {"orderable":false,"aTargets":[0,8,9]}// 制定列不参与排序

		]

	});

	

});



function rental_add(title,url,w,h){

	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);

}



function rental_edit(title,url,w,h){

	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);

}









/*用户-删除*/

function system_category_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			type: 'GET',
			url: "<?php echo url('lecturerdel'); ?>?id="+id,
			dataType: 'json',
			success: function(data){
				$(obj).parents("tr").remove();
				layer.msg('已删除!',{icon:1,time:1000});
				setTimeout(function(){
					window.location.reload();
				},1000)

			},
			error:function(data) {
				console.log(data.msg);
			},
		});
	});
}

</script> 

</body>

</html>
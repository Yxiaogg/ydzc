<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:63:"D:\xampp\htdocs\ydzc/application/cner\view\member\planning.html";i:1531876854;s:61:"D:\xampp\htdocs\ydzc/application/cner\view\public\footer.html";i:1531876854;}*/ ?>
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







<link rel="stylesheet" type="text/css" href="__STATIC__/css/adminpage.css"/>







<link rel="stylesheet" type="text/css" href="__STATIC__/static/h-ui.admin/skin/default/skin.css" id="skin" />



<link rel="stylesheet" type="text/css" href="__STATIC__/static/h-ui.admin/css/style.css" />



<link href="__STATIC__/lib/Hui-iconfont/1.0.8/iconfont.css" rel="stylesheet" type="text/css" />



<!--[if IE 6]>



<script type="text/javascript" src="__STATIC__/lib/DD_belatedPNG_0.0.8a-min.js" ></script>



<script>DD_belatedPNG.fix('*');</script>



<![endif]-->



<title>用户管理</title>



</head>



<body>



<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 组织文化 <span class="c-gray en">&gt;</span> 组织文化列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>



<div class="page-container">







	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"> <a href="javascript:;" onclick="planning_add('添加信息','<?php echo url('planningAdd'); ?>')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加信息</a></span> <span class="r">共有数据：<strong><?php echo $count; ?></strong> 条</span> </div>



	<div class="mt-20">



	<table class="table table-border table-bordered table-hover table-bg table-sort">



		<thead>



			<tr class="text-c">



				<th >编号</th>



				<th>菜单名字</th>



				<th>操作</th>







			</tr>



		</thead>



		<tbody>



			<?php if(is_array($planning) || $planning instanceof \think\Collection || $planning instanceof \think\Paginator): $i = 0; $__LIST__ = $planning;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>



			<tr class="text-c">







				<td><?php echo $vo['planning_id']; ?></td>



				<td><?php echo $vo['planning_title']; ?></td>



				<td>



					 <a title="编辑" href="javascript:;" onclick="planning_edit('修改招聘信息','<?php echo url('planningEdit',['planning_id'=>$vo['planning_id']]); ?>','<?php echo $vo['planning_id']; ?>','700','480')" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a>



					<a title="删除" href="javascript:;" onclick="planning_del(this,'<?php echo $vo['planning_id']; ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>



				</td>



			</tr>



			<?php endforeach; endif; else: echo "" ;endif; ?>







		</tbody>



	</table><?php echo $planning->render(); ?>



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







function planning_add(title,url,w,h){



	var index = layer.open({

		type: 2,

		title: title,

		content: url

	});

	layer.full(index);



}







function planning_edit(title,url,w,h){



	// layer.open({



	// 	title:'招聘信息修改',



	// 	type:2,



	// 	content:url,



	// 	area:['900px','800px'],



	// 	end:function(){



	// 		window.location.href="<?php echo url('member/memberEmploy'); ?>";



	// 	}



	// });

    var index = layer.open({

		type: 2,

		title: title,

		content: url

	});

	layer.full(index);

}



















/*用户-删除*/



function planning_del(obj,id){



	layer.confirm('确认要删除吗？',function(index){



		//此处请求后台程序，下方是成功后的前台处理……



		window.location.href="<?php echo url('member/planningDel'); ?>?planning_id="+id;



		$(obj).parents("tr").remove();



		layer.msg('已删除!',{icon:1,time:1000});



	});



}



</script>



</body>



</html>
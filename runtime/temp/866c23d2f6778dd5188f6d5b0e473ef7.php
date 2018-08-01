<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:67:"D:\xampp\htdocs\ydzc/application/cner\view\member\employresume.html";i:1531876854;s:61:"D:\xampp\htdocs\ydzc/application/cner\view\public\footer.html";i:1531876854;}*/ ?>
<!DOCTYPE HTML>

<html>

<head>

<meta charset="utf-8">

<meta name="renderer" content="webkit|ie-comp|ie-stand">

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />

<meta http-equiv="Cache-Control" content="no-siteapp" />

<!--[if lt IE 9]>

<script type="text/javascript" src="____STATIC__/static__/lib/html5shiv.js"></script>

<script type="text/javascript" src="____STATIC__/static__/lib/respond.min.js"></script>

<![endif]-->

<link rel="stylesheet" type="text/css" href="__STATIC__/static/h-ui/css/H-ui.min.css" />

<link rel="stylesheet" type="text/css" href="__STATIC__/static/h-ui.admin/css/H-ui.admin.css" />

<link rel="stylesheet" type="text/css" href="__STATIC__/css/adminpage.css"/>

<link rel="stylesheet" type="text/css" href="__STATIC__/static/h-ui.admin/skin/default/skin.css" id="skin" />

<link rel="stylesheet" type="text/css" href="__STATIC__/static/h-ui.admin/css/style.css" />

<link href="__STATIC__/lib/Hui-iconfont/1.0.8/iconfont.css" rel="stylesheet" type="text/css" />

<!--[if IE 6]>

<script type="text/javascript" src="____STATIC__/static__/lib/DD_belatedPNG_0.0.8a-min.js" ></script>

<script>DD_belatedPNG.fix('*');</script>

<![endif]-->

<title>员工管理</title>

</head>

<body>

<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 员工中心 <span class="c-gray en">&gt;</span> 应聘管理 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>

<div class="page-container">

	

	<div class="cl pd-5 bg-1 bk-gray mt-20">  <span class="r">共有数据：<strong><?php echo $count; ?></strong> 条</span> </div>

	<div class="mt-20">

	<table class="table table-border table-bordered table-hover table-bg table-sort">

		<thead>

			<tr class="text-c">

				

				<th width="">应聘者姓名</th>

				<th width="">年龄</th>

				<th width="">性别</th>

				<th width="">应聘职位</th>

				<th>手机</th>

				<th>邮箱</th>

				<th>住址</th>

				<th width="">操作</th>

			</tr>

		</thead>

		<tbody>

			<?php if(is_array($resume) || $resume instanceof \think\Collection || $resume instanceof \think\Paginator): $i = 0; $__LIST__ = $resume;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

			<tr class="text-c">

				

				<td><a href="javascript:;" onclick="resume_detail('resumeDetail.html?resume_id=<?php echo $vo['resume_id']; ?>')"><?php echo $vo['resume_name']; ?></a></td>

				<td><?php echo $vo['resume_age']; ?></td>

				<td><?php echo $vo['resume_sex']; ?></td>

				<td><?php echo $vo['resume_title']; ?></td>

				<td><?php echo $vo['resume_tel']; ?></td>

				<td><?php echo $vo['resume_email']; ?></td>

				<td><?php echo $vo['resume_address']; ?></td>

			

				<td class="td-manage">
                    <a title="查看详情" href="javascript:;" onclick="product_edit('查看详情','<?php echo url('resumelist',['id'=>$vo['resume_id']]); ?>','')" style="text-decoration:none"><i class="Hui-iconfont">&#xe725;</i></a>
					<a title="删除" href="javascript:;" onclick="resume_del(this,'<?php echo $vo['resume_id']; ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>

				</td>




			</tr>

			<?php endforeach; endif; else: echo "" ;endif; ?>

			

		</tbody>

	</table><?php echo $resume->render(); ?>

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


function product_edit(title,url,id){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}












/*用户-删除*/

function resume_del(obj,id){

	layer.confirm('确认要删除吗？',function(index){

		//此处请求后台程序，下方是成功后的前台处理……

		window.location.href="<?php echo url('Member/resumeDel'); ?>?resume_id="+id;

		$(obj).parents("tr").remove();

		layer.msg('已删除!',{icon:1,time:1000});

	});

}

</script> 

<script type="text/javascript">

	function resume_detail(url){

	// layer_show(title,url,w,h);

	layer.open({

		title:'详细信息',

		type:2,

		content:url,

		area:['1000px','700px'],

		// end:function(){

		// 	window.location.href="<?php echo url('admin/adminList'); ?>";

		// }

	});

	

}

</script>

</body>

</html>
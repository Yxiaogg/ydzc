<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:65:"D:\xampp\htdocs\ydzc/application/cner\view\admin\articlelist.html";i:1531876854;s:61:"D:\xampp\htdocs\ydzc/application/cner\view\public\footer.html";i:1531876854;}*/ ?>
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

<title>文章管理</title>

</head>

<body>

<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span>管理员 <span class="c-gray en">&gt;</span> 文章列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>

<div class="page-container">

	

	<div class="cl pd-5 bg-1 bk-gray mt-20">  <span class="l"> <a href="javascript:;" onclick="article_add('添加媒体','<?php echo url('articleAdd'); ?>')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加文章</a></span><span class="r">共有数据：<strong><?php echo $count; ?></strong> 条</span> </div>

	<div class="mt-20">

	<table class="table table-border table-bordered table-hover table-bg table-sort">

		<thead>


			<tr class="text-c">

				

				<th width="">文章ID</th>

				<th>作者</th>

				<th width="">文章题目</th>

				<th width="">发布时间</th>

				<th>是否置顶</th>

				<th width="">操作</th>

			</tr>

		</thead>

		<tbody>

			<?php if(is_array($article) || $article instanceof \think\Collection || $article instanceof \think\Paginator): $i = 0; $__LIST__ = $article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

			<tr class="text-c">

				

				<td><?php echo $vo['article_id']; ?></td>

				<td><?php echo $vo['article_author']; ?></td>

				<td><a href="javascript:;" onclick="article_detail('articleDetail.html?article_id=<?php echo $vo['article_id']; ?>')"><?php echo $vo['article_title']; ?></a></td>

				<td><?php echo getRole($vo['article_role']); ?></td>

				<td><?php echo date('Y/m/d  ,  H时i分s秒',$vo['article_creatime']); ?></td>

				

				

			

				<td class="td-manage">

					<a title="编辑" href="javascript:;" onclick="artilce_edit('文章修改','articleEdit.html?article_id=<?php echo $vo['article_id']; ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a>

					<a title="删除" href="javascript:;" onclick="article_del(this,'<?php echo $vo['article_id']; ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>

				</td>



			</tr>

			<?php endforeach; endif; else: echo "" ;endif; ?>

			

		</tbody>

	</table><?php echo $article->render(); ?>

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



function artilce_edit(title,url){

	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);

}







/*用户-删除*/

function article_del(obj,id){

	layer.confirm('确认要删除吗？',function(index){

		//此处请求后台程序，下方是成功后的前台处理……

		window.location.href="<?php echo url('admin/articleDel'); ?>?article_id="+id;

		$(obj).parents("tr").remove();

		layer.msg('已删除!',{icon:1,time:1000});

	});

}



function article_add(title,url){

	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);



}

</script> 

<script type="text/javascript">

	function article_detail(url){

	// layer_show(title,url,w,h);

	layer.open({

		title:'详细信息',

		type:2,

		content:url,

		area:['1000px','800px'],

		

	});

	

}

</script>

</body>

</html>
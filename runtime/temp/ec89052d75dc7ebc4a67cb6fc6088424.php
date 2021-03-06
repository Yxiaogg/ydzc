<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:72:"/data/home/qxu1590200456/htdocs/application/cner/view/sale/salelist.html";i:1521103485;s:72:"/data/home/qxu1590200456/htdocs/application/cner/view/public/footer.html";i:1516390856;}*/ ?>
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

<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 卖方管理 <span class="c-gray en">&gt;</span> 卖方列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>

<div class="page-container">

	

	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"> <a href="javascript:;" onclick="sale_add('添加租房信息','<?php echo url('add'); ?>')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加卖房信息</a></span> <span class="r">共有数据：<strong><?php echo $count; ?></strong> 条</span> </div>

	<div class="mt-20">

	<table class="table table-border table-bordered table-hover table-bg table-sort">

		<thead>

			<tr class="text-c">

				

				<th width="">编号</th>

				

				<th >房名</th>

				<th width="300px">图例</th>

				<th width="">附近地铁</th>

				<th width="">位置</th>

				<th width="">面积</th>

				<th>金额</th>

				<th>类型</th>

				<th>是否置顶</th>

				<th>上架时间</th>

				<th>操作</th>

				

			</tr>

		</thead>

		<tbody>

			<?php if(is_array($saleInfo) || $saleInfo instanceof \think\Collection || $saleInfo instanceof \think\Paginator): $i = 0; $__LIST__ = $saleInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

			<tr class="text-c">

				

				<td><?php echo $vo['identifier']; ?></td>

				<td><?php echo $vo['sale_name']; ?></td>

				

				<td><img style="width: 250px;height: 150px;" src="__STATIC__/<?php echo $vo['sale_src']; ?>"></td>

				<td><?php echo $vo['sale_subway']; ?></td>

				<td><?php echo $vo['sale_address']; ?></td>

				<td><?php echo getRentalArea($vo['sale_area']); ?></td>

				<td><?php echo $vo['sale_price']; ?>万元</td>

				<td><?php echo $vo['sale_class']; ?></td>

				<td><?php echo getRole($vo['sale_role']); ?></td>

				<td><?php echo date('Y/m/d  ,  H时i分s秒',$vo['sale_creatime']); ?></td>

				<td>
                    <a title="编辑" href="javascript:;" onclick="sale_edit('修改可卖房信息','<?php echo url('saleEdit',['sale_id'=>$vo['sale_id']]); ?>','<?php echo $vo['sale_id']; ?>','700','480')" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a>
					<!-- <a title="编辑" href="javascript:;" onclick="sale_edit('修改可卖房信息','saleEdit.html?sale_id=<?php echo $vo['sale_id']; ?>','<?php echo $vo['sale_id']; ?>','800','350')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> -->

					<a title="删除" href="javascript:;" onclick="system_category_del(this,<?php echo $vo['sale_id']; ?>)" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>


				</td>

			</tr>

			

			<?php endforeach; endif; else: echo "" ;endif; ?>

		</tbody>

	</table><?php echo $saleInfo->render(); ?>

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



function sale_add(title,url,w,h){

	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);

}



function sale_edit(title,url,w,h){

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
			url: "<?php echo url('saleDel'); ?>?id="+id,
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
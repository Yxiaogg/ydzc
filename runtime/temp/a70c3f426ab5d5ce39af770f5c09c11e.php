<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:60:"D:\xampp\htdocs\ydzc/application/cner\view\sugg\entrust.html";i:1531876854;s:61:"D:\xampp\htdocs\ydzc/application/cner\view\public\footer.html";i:1531876854;}*/ ?>
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

<script type="text/javascript" src="__STATIC__/lib/html5shiv.js"></script>

<script type="text/javascript" src="__STATIC__/lib/respond.min.js"></script>

<![endif]-->

<link rel="stylesheet" type="text/css" href="__STATIC__/css/adminpage.css"/>

<link rel="stylesheet" type="text/css" href="__STATIC__/static/h-ui/css/H-ui.min.css" />

<link rel="stylesheet" type="text/css" href="__STATIC__/static/h-ui.admin/css/H-ui.admin.css" />

<link rel="stylesheet" type="text/css" href="__STATIC__/static/h-ui.admin/skin/default/skin.css" id="skin" />

<link rel="stylesheet" type="text/css" href="__STATIC__/static/h-ui.admin/css/style.css" />

<link href="__STATIC__/lib/Hui-iconfont/1.0.8/iconfont.css" rel="stylesheet" type="text/css" />

<!--[if IE 6]>

<script type="text/javascript" src="__STATIC__/lib/DD_belatedPNG_0.0.8a-min.js" ></script>

<script>DD_belatedPNG.fix('*');</script>

<![endif]-->

<title>在线委托信息</title>

</head>

<body>

<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 评论管理 <span class="c-gray en">&gt;</span> 在线委托信息 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>

<div class="page-container">

	<table class="table table-border table-bordered table-bg">

		<thead>
			<tr class="text-c">

				<th>联系人</th>

				<th>联系电话</th>

                <th>地址</th>

                <th>图片</th>

                <th>简介</th> 

                <th>添加时间</th> 

                <th>类型</th>

				<th>操作</th>

			</tr>

		</thead>

		<tbody>

			<?php if(is_array($en) || $en instanceof \think\Collection || $en instanceof \think\Paginator): $i = 0; $__LIST__ = $en;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

			<tr class="text-c">

				<td><?php echo $vo['name']; ?></td>

				<td><?php echo $vo['phone']; ?></td>

                <td><?php echo $vo['address']; ?></td>

                <td width="200px" height="200px;"><img width="200px" height="200px;" <?php if($vo['img'] != ''): ?>src="__STATIC__/<?php echo $vo['img']; ?>"><?php else: ?>src="__STATIC__/travel/images/5930c2bbba35b_1024.png"<?php endif; ?></td>

                <td><?php echo $vo['des']; ?></td>

				<td><?php echo date('Y/m/d  ,  H时i分s秒',$vo['create_time']); ?></td>

				<td><?php echo getentype($vo['type']); ?></td>

				<td class="td-manage">

					

					 <a title="删除" href="javascript:;" onclick="system_category_del(this,<?php echo $vo['id']; ?>)" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>


				</td>

			</tr>

			<?php endforeach; endif; else: echo "" ;endif; ?>

		</tbody>

	</table><?php echo $en->render(); ?>

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

/*

	参数解释：

	title	标题

	url		请求的url

	id		需要操作的数据id

	w		弹出层宽度（缺省调默认值）

	h		弹出层高度（缺省调默认值）

*/



/*管理员-删除*/

function sugg_del(obj,id){

	layer.confirm('确认要删除？',function(index){

		

		window.location.href="<?php echo url('sugg/suggDel'); ?>?sugg_id="+id;

		

		layer.msg('已删除!',{icon: 5,time:1000});

	});

}


function system_category_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			type: 'GET',
			url: "<?php echo url('entruscdel'); ?>?id="+id,
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
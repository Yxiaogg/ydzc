<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:81:"/data/home/qxu1590200456/htdocs/application/cner/view/admin/checksapricelist.html";i:1516927683;s:72:"/data/home/qxu1590200456/htdocs/application/cner/view/public/footer.html";i:1516390856;}*/ ?>
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
<title>管理员列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 查询售价管理 <span class="c-gray en">&gt;</span> 列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"> <a href="javascript:;" onclick="saprice_add('添加售价','sapriceAdd.html','800','350')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加售价</a></span> <span class="r">共有数据：<strong><?php echo $count; ?></strong> 条</span> </div>
	<table class="table table-border table-bordered table-bg">
		<thead>
			<tr>
				<th scope="col" colspan="9">售价列表</th>
			</tr>
			<tr class="text-c">
				<th width="40">ID</th>
				<th width="150">售价</th>
				
				<th width="150">显示</th>

				<th width="100">操作</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($saprice) || $saprice instanceof \think\Collection || $saprice instanceof \think\Paginator): $i = 0; $__LIST__ = $saprice;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			<tr class="text-c">
				<td><?php echo $vo['saprice_id']; ?></td>
				<td><?php echo $vo['saprice_num']; ?>元</td>
				
				<td><?php echo $vo['saprice_name']; ?></td>
				<td class="td-manage">
					
					<a title="编辑" href="javascript:;" onclick="saprice_edit('修改信息','sapriceEdit.html?saprice_id=<?php echo $vo['saprice_id']; ?>','<?php echo $vo['saprice_id']; ?>','800','350')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a>
					 <a title="删除" href="javascript:;" onclick="saprice_del(this,'<?php echo $vo['saprice_id']; ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>
				</td>
			</tr>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</tbody>
	</table>
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
/*管理员-增加*/
function saprice_add(title,url,w,h){
	// layer_show(title,url,w,h);
	layer.open({
		title:'售价添加',
		type:2,
		content:url,
		area:['800px','300px'],
		end:function(){
			window.location.href="<?php echo url('admin/checksapriceList'); ?>";
		}
	});
	
}
/*管理员-删除*/
function saprice_del(obj,id){
	layer.confirm('确认要删除？',function(index){
		
		window.location.href="<?php echo url('admin/sapriceDel'); ?>?saprice_id="+id;
		
		layer.msg('已删除!',{icon: 5,time:1000});
	});
}

/*管理员-编辑*/
function saprice_edit(title,url,id,w,h){
	
	
		layer.open({
		title:'修改信息',
		type:2,
		content:'sapriceEdit.html?saprice_id='+id,
		area:['800px','300px'],
		end:function(){
			window.location.href="<?php echo url('admin/checksapriceList'); ?>";
		}
	});
	
	
}

</script>
</body>
</html>
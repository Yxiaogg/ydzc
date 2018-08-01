<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:61:"D:\xampp\htdocs\ydzc/application/index\view\about\figure.html";i:1531876854;}*/ ?>
<!DOCTYPE html>

<html><head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>英地资产-团队建设</title>

<meta name="description" content="">

<meta name="keywords" content="">

<link href="__STATIC__/stand/css/style.css" rel="stylesheet" type="text/css" media="all">

<script type="text/javascript"  src="__STATIC__/stand/js/jquery-1.10.1.min.js"></script>



<script type="text/javascript"  src="__STATIC__/stand/js/min.index.js"></script>

    

<script type="text/javascript" src="__STATIC__/travel/js/noCopy.js"></script>

<!--[if lte IE 6]>

    <script type="text/javascript" src="/static/stand/js/belatedPNG.js"></script>

    <script type="text/javascript">

      DD_belatedPNG.fix('.nav_wrap');

    </script>

<![endif]-->

</head>

<body>

    <div class="header-wrap">



        <div class="mar-wrap2">



            <a href="<?php echo url('index/index'); ?>" title="远行地产" class="logo"><img width="100px" height="60px" src="__STATIC__/travel/images/logo.png" alt=""></a>  





            <div class="nav">



                <a href="<?php echo url('index/index'); ?>"  >首页</a>



                <a href="<?php echo url('About/about'); ?>"  >走进英地</a>



                <a href="<?php echo url('About/employ'); ?>" >招聘职位</a>



                <a href="<?php echo url('About/planning'); ?>" >组织文化</a>



                 <a href="<?php echo url('About/welfare'); ?>" class=" ">投资者关系</a>



                <a href="<?php echo url('About/course'); ?>" class=" ">学习中心</a>



                <a href="<?php echo url('About/figure'); ?>" class='cur'>团队建设</a>



            </div>

                      

        </div>

    </div>

    <div class="team-bg">

        <div class="mar-wrap4">

            <h1>团队建设</h1>

        </div>

    </div>

    <div class="mar-wrap2 pad">

       

        <div class="top-wrap clearfix">

            <div class="left-side">

                <h2 class="cur"><a href="<?php echo url('figure'); ?>">风云人物</a></h2>

                <div class="top-links">

                                       <?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>

                                        <a href="<?php echo url('figure',['cid'=>$cate['cid']]); ?>" <?php if($cate['cid'] == $cid): ?> class="cur"<?php endif; ?>> · <?php echo $cate['name']; ?></a>

                                       <?php endforeach; endif; else: echo "" ;endif; ?>

                </div>

               <!--  <h2><a href="http://www.cdyxfdc.com/about/construction/life">员工生活</a></h2> -->

            </div>

            <div class="right-side">

                <div class="rs-head clearfix">

                <!-- 此处使用js 进行数据加载  下拉选择-->

                <select name="session" data="130" id="session" class="select">

                    <option value="0">更多</option>

                    <?php if(is_array($sc) || $sc instanceof \think\Collection || $sc instanceof \think\Paginator): $i = 0; $__LIST__ = $sc;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$s): $mod = ($i % 2 );++$i;?>

                    <option value="<?php echo $s['cid']; ?>"><?php echo $s['name']; ?></option>

                    <?php endforeach; endif; else: echo "" ;endif; ?>

                </select>                <!-- 最新的三期 -->

                <ul class="tab-head clearfix" id="magazine">

                  <?php if(is_array($nsc) || $nsc instanceof \think\Collection || $nsc instanceof \think\Paginator): $i = 0; $__LIST__ = $nsc;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ns): $mod = ($i % 2 );++$i;?>

                    <li><span></span><?php echo $ns['name']; ?></li>

                  <?php endforeach; endif; else: echo "" ;endif; ?>

                    

                </ul>

                </div>

                <div class="tab-cont-wrap" id="tab-cont-wrap">

                         <?php if(is_array($art) || $art instanceof \think\Collection || $art instanceof \think\Paginator): $i = 0; $__LIST__ = $art;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$art): $mod = ($i % 2 );++$i;?>

                                    <div class="tab-cont" <?php if($key == 0): ?>style="display:block;"<?php else: ?>style="display:none;"<?php endif; ?>>

                        <ul class="sec-th clearfix">

               					<li style="display:block;"><img src="__STATIC__/<?php echo $art['img']; ?>" alt="<?php echo $art['title']; ?>"><p><?php echo $art['title']; ?></p></li>

				                        </ul>

                        <div class="sec-tc">

                   							<div class="tc-para" style="display:block;">

                                                <?php echo $art['content']; ?>

								</div>

					                        </div>

                    </div>

                          <?php endforeach; endif; else: echo "" ;endif; ?>

                                    </div>

            </div>

        </div>

    </div>

    <div class="footer-wrap">

        <div class="mar-wrap clearfix">

            <div class="ewm-operation">

                <div class="ewm-wrap">

                    <img src="__STATIC__/stand/images/weixin.jpg" alt="" class="sm-ewm">   

                    <p>微信二维码</p>

                    <img src="__STATIC__/stand/images/ewm01.png" alt="" class="show-ewm">

                </div>

            </div>

            <p class="footer-link">

            <a href="<?php echo url('index/index'); ?>">首页</a>|



            <a href="<?php echo url('About/news'); ?>">媒体中心</a>|







            <a href="<?php echo url('about/contract'); ?>">联络我们</a>|



            <a href="<?php echo url('About/about'); ?>">走进英地</a><br>Copyright © 2009-2018            



            <a href="">英地资产</a>All Rights Reserved



            <span><a href="" target="_blank" rel="nofollow">蜀ICP备18003460号</a></span>

            </p>

        </div>

    </div>





<!-- <script type="text/javascript" src="__STATIC__/stand/js/ajax.info.js"></script> -->

<script type="text/javascript">

    $('#session').change(function() {

        var id=$('#session').val();

        var data={

            'cid' : id,

        };

        $.post("<?php echo url('figure'); ?>",data,function(res){

            if(res.status==1){

               $('#magazine li').remove();

               $('#tab-cont-wrap div').remove();

               $('#magazine').append(res.message.cate);

               $('#tab-cont-wrap').append(res.message.artcont);

            }

        },'json')

    });

</script>

</body></html>
<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:59:"D:\xampp\htdocs\ydzc/application/index\view\about\news.html";i:1531876854;}*/ ?>
<!DOCTYPE html>

<html> 

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>媒体中心</title>

<meta name="description" content="" />

<meta name="keywords" content="" />

<link  href="__STATIC__/stand/css/style.css" rel="stylesheet" type="text/css" media="all" />

<link rel="stylesheet" type="text/css" href="__STATIC__/css/page.css"/>

<!-- <link  href="__STATIC__/travel/css/style.css" rel="stylesheet" type="text/css" media="all" /> -->

<!--[if lte IE 6]>

    <script type="text/javascript" src="belatedPNG.js" src="__STATIC__/stand/js/belatedPNG.js"></script>

    <script type="text/javascript">

      DD_belatedPNG.fix('.nav_wrap');

    </script>

<![endif]-->

</head>

<body>

    <div class="header-wrap">

        <div class="mar-wrap2">  

            <a href="<?php echo url('index/index'); ?>" title="地产地产" class="logo"><img  style="width: 100px;height: 60px;" src="__STATIC__/travel/images/logo.png" alt=""></a>            


            <div class="nav">

                <a href="<?php echo url('index/index'); ?>" id="nav_">首页</a>

                <a href="<?php echo url('About/about'); ?>" id="nav_113">走进英地</a>

                <a href="<?php echo url('About/news'); ?>" class='cur'>媒体中心</a>

                <a href="<?php echo url('About/employ'); ?>" class=" ">加入英地</a>

                <a href="<?php echo url('About/team'); ?>" class=" ">产品中心</a>

                <a href="<?php echo url('About/book'); ?>" class=" ">英地内刊</a>

                <a href="<?php echo url('About/contract'); ?>" class=" ">联络我们</a>

            </div>

          

        </div>

    </div>

    <div class="team-bg news-bg">

        <div class="mar-wrap4">

            <h1>媒体中心</h1>

        </div>

    </div>

    <div class="mar-wrap2 pad">

        <p class="bread"><a href="<?php echo url('index/index'); ?>">HOME</a>><a href="<?php echo url('about/news'); ?>">媒体中心</a></p>

        <div class="top-wrap clearfix">

            <div class="news-right">

                <div class="news-title" style="margin:0;">

                    <h3><span>YDZC</span>热门新闻</h3>

                </div>

                <?php if(is_array($hot) || $hot instanceof \think\Collection || $hot instanceof \think\Paginator): $i = 0; $__LIST__ = $hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

                <div class="news-wrap clearfix">

                    <div class="date">

                        <h3><?php echo date('d',$vo['article_creatime']); ?></h3>

                        <p><?php echo date('M',$vo['article_creatime']); ?></p>

                    </div>

                    <div class="news-info">

                        <h3><a href="<?php echo url('about/newsDetail'); ?>?article_id=<?php echo $vo['article_id']; ?>"><?php echo $vo['article_title']; ?></a></h3>

                        <p><a href="<?php echo url('about/newsDetail'); ?>?article_id=<?php echo $vo['article_id']; ?>"><?php echo $vo['article_des']; ?></a></p>

                    </div>

                </div>

                <?php endforeach; endif; else: echo "" ;endif; ?>

              
                 <div class="news-title">
                    <h3><span>YDZC</span>视频新闻</h3>
                </div>
                <ul class="news-video clearfix">
                    <?php if(is_array($vnews) || $vnews instanceof \think\Collection || $vnews instanceof \think\Paginator): $i = 0; $__LIST__ = $vnews;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vn): $mod = ($i % 2 );++$i;?>
                    <li>
                        <a href="<?php echo url('about/newsDetail'); ?>?article_id=<?php echo $vn['article_id']; ?>" target="_blank" title="<?php echo $vn['article_title']; ?>"><img src='<?php if($vn['article_img'] != ''): ?>__STATIC__/<?php echo $vn['article_img']; else: ?>__STATIC__/travel/images/5930c2bbba35b_1024.png<?php endif; ?>' alt="<?php echo $vn['article_title']; ?>"></a>
                        <p><a href="<?php echo url('about/newsDetail'); ?>?article_id=<?php echo $vn['article_id']; ?>" target="_blank" title="<?php echo $vn['article_title']; ?>"><?php echo $vn['article_title']; ?></a></p>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                     

                <div class="news-title">
                    <h3><span>YDZC</span>图片新闻</h3>
                </div>
                <ul class="news-img clearfix">
                     <?php if(is_array($inews) || $inews instanceof \think\Collection || $inews instanceof \think\Paginator): $i = 0; $__LIST__ = $inews;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$in): $mod = ($i % 2 );++$i;?>
                    <li>
                        <div class="ni-wrap">
                            <div class="cell">
                                <a href="<?php echo url('about/newsDetail'); ?>?article_id=<?php echo $in['article_id']; ?>" target="_blank" title="<?php echo $in['article_title']; ?>"><img src='<?php if($in['article_img'] != ''): ?>__STATIC__/<?php echo $in['article_img']; else: ?>__STATIC__/travel/images/5930c2bbba35b_1024.png<?php endif; ?>'" alt="<?php echo $in['article_title']; ?>"></a>
                            </div>
                        </div>
                        <p><a href="<?php echo url('about/newsDetail'); ?>?article_id=<?php echo $in['article_id']; ?>" target="_blank" title="<?php echo $in['article_title']; ?>"><?php echo $in['article_title']; ?></a></p>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>

               

                

            </div>

            <div class="news-left">
                <!-- 轮播图 -->
                <div class="news-slide">
                    <ul class="slide-list">
                        <?php if(is_array($banner) || $banner instanceof \think\Collection || $banner instanceof \think\Paginator): $i = 0; $__LIST__ = $banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$b): $mod = ($i % 2 );++$i;?>
                        <li style="display: none;">
                            <div class="ns-cell">
                                <a href="<?php echo url('about/newsDetail'); ?>?article_id=<?php echo $b['article_id']; ?>" target="_blank" title="<?php echo $b['article_title']; ?>"><img src="__STATIC__/<?php echo $b['article_img']; ?>" alt="<?php echo $b['article_title']; ?>"></a>
                            </div>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                       
                    </ul>
                    <div class="mask">
                        <div class="slide-nav">
<a href="javascript:;" class="">1</a><a href="javascript:;" class="">2</a><a href="javascript:;" class="">3</a><a href="javascript:;" class="">4</a><a href="javascript:;" class="cur">5</a>                        </div>
                        <div class="slide-para">
                           <?php if(is_array($banner) || $banner instanceof \think\Collection || $banner instanceof \think\Paginator): $i = 0; $__LIST__ = $banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bs): $mod = ($i % 2 );++$i;?>
                           <p tyle="display:block;" style="display: none;"><a href="<?php echo url('about/newsDetail'); ?>?article_id=<?php echo $bs['article_id']; ?>" target="_blank" title="<?php echo $bs['article_title']; ?>"><?php echo $bs['article_title']; ?></a></p> 
                           <?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>
                </div>
                

                <div class="news-page">

                    <?php if(is_array($article) || $article instanceof \think\Collection || $article instanceof \think\Paginator): $i = 0; $__LIST__ = $article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

                <div class="news-special clearfix">

                    <div class="date">

                        <h3><?php echo date('d',$vo['article_creatime']); ?></h3>

                        <p><?php echo date('M',$vo['article_creatime']); ?></p>

                    </div>

                    <div class="news-info">

                        <h3><a href="<?php echo url('about/newsDetail'); ?>?article_id=<?php echo $vo['article_id']; ?>"><?php echo $vo['article_title']; ?></a></h3>

                        <p><a href="<?php echo url('about/newsDetail'); ?>?article_id=<?php echo $vo['article_id']; ?>"><?php echo $vo['article_des']; ?></a></p>

                    </div>

                </div>

               <?php endforeach; endif; else: echo "" ;endif; ?>

                </div><?php echo $article->render(); ?>

                

            </div>

        </div>

    </div>      

    <div class="footer-wrap">

        <div class="mar-wrap clearfix">

            <div class="ewm-operation">

                <div class="ewm-wrap">

                    <img  src="__STATIC__/stand/images/weixin.jpg" alt="" class="sm-ewm">   

                    <p>微信二维码</p>

                    <img  src="__STATIC__/stand/images/ewm01.png" alt="" class="show-ewm">

                </div>


            </div>

            <p class="footer-link">

            <a href="<?php echo url('index/index'); ?>">首页</a>|

            <a href="<?php echo url('About/news'); ?>">媒体中心</a>|

            <a href="<?php echo url('About/employ'); ?>">加入英地</a>|

           <a href="<?php echo url('About/contract'); ?>" class=" ">联络我们</a>|

            <a href="<?php echo url('About/about'); ?>">走进英地</a><br>Copyright © 2009-2018            

            <a href="">英地资产</a>All Rights Reserved

            <span><a href="" target="_blank" rel="nofollow">蜀ICP备18003460号</a></span>

            </p>

        </div>

    </div>

<script type="text/javascript"  src="__STATIC__/stand/js/jquery-1.10.1.min.js"></script>

<script type="text/javascript"  src="__STATIC__/stand/js/min.index.js"></script>

<script type="text/javascript"  src="__STATIC__/travel/js/noCopy.js"></script>

</body>

</html>
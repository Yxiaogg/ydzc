<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:60:"D:\xampp\htdocs\ydzc/application/index\view\index\index.html";i:1532052519;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>英地资产 官网</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<script >
(function() {
var UA = window.navigator.userAgent,
    IsAndroid = (/Android|HTC/i.test(UA) || /Linux/i.test(window.navigator.platform + '')),
    IsIPad = !IsAndroid && /iPad/i.test(UA),
    IsIPhone = !IsAndroid && /iPod|iPhone/i.test(UA),
    IsIOS =  IsIPad || IsIPhone,
    IsWindowsPhone =  /Windows Phone/i.test(UA),
    IsWeixin = /MicroMessenger/i.test(UA);
    if (IsAndroid || IsIOS || IsWindowsPhone) {
        /*iOS、Android、Windows Phone执行*/
        var linkurl = window.location.href;
        var host = window.location.host;
        if(linkurl.indexOf("rental")>0 || linkurl.indexOf("sale")>0 || linkurl.indexOf("contact")>0 || linkurl.indexOf("s")>0 || linkurl=="http://www.yingdizichan.com/" || linkurl.indexOf("building")>0||linkurl=="http://www.yingdizichan.com/index/index/index.html")
        {
            var ReturnLinkUrl = linkurl.replace(host,"www.yingdizichan.com/mobile");
            window.location = ReturnLinkUrl;
        }else if(linkurl=="http://yingdizichan.com/"||linkurl=="http://yingdizichan.com/index/index/index.html"){
            var ReturnLinkUrl = linkurl.replace(host,"yingdizichan.com/mobile");
            window.location = ReturnLinkUrl;
        }
    }
})();
</script>
<script type="text/javascript"  src="http://api.map.baidu.com/api?v=2.0&ak=6eEr4R37UtXpijuWHD3s4v7l"></script>
<link href="__STATIC__/travel/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="__STATIC__/travel/css/video-js.css" rel="stylesheet">
<link rel="shortcut icon" href="favicon.ico" />
<!--[if lte IE 6]>
  <script type="text/javascript" src="__STATIC__/travel/js/belatedPNG.js"></script>
  <script type="text/javascript">
    DD_belatedPNG.fix('.nav_wrap');
  </script>
<![endif]-->
<meta name="laoniu-site-verification" content="ab388b7b79f026b17162c810d736ffbe" />
<meta name="baidu-site-verification" content="0BvUhZI232" />
</head>
<style type="text/css">
input::-webkit-input-placeholder {
   /* WebKit browsers */
   color: #8b8b8b;
}
input:-moz-placeholder {
   /* Mozilla Firefox 4 to 18 */
   color: #8b8b8b;
}
input::-moz-placeholder {
   /* Mozilla Firefox 19+ */
   color: #8b8b8b;
}
input::-ms-input-placeholder {
   /* Internet Explorer 10+ */
   color: #8b8b8b;
}
    #nav_ {text-decoration: none;  border-radius: 4px; background: #5ea629;}
</style>
<body>
    <div class="header-wrap">
        <div class="mar-wrap">
            <a href="<?php echo url('Index/index'); ?>" title="地产" class="logo"><img style="width: 100px;height: 60px;" src="__STATIC__/travel/images/logo.png" alt=""></a>
            <div class="city-sel">
              <i></i>
              <a href="#" class="city-cur">成都</a>
                <div class="city-pannel">
          <dl>
            <dt>华&nbsp;&nbsp;&nbsp;东</dt>
            <dd>
              <a href="<?php echo url('index/construct'); ?>" target="_blank">上海</a>
              <a href="<?php echo url('index/construct'); ?>" target="_blank">青岛</a>
              <a href="<?php echo url('index/construct'); ?>" target="_blank">南京</a>
            </dd>
          </dl>
          <dl>
            <dt>华&nbsp;&nbsp;&nbsp;南</dt>
            <dd>
              <a href="<?php echo url('index/construct'); ?>" target="_blank">深圳</a>
              <a href="<?php echo url('index/construct'); ?>" target="_blank">广州</a>
            </dd>
          </dl>
          <dl>
            <dt>中西南</dt>
            <dd>
              <a href="#" >成都</a>
              <a href="<?php echo url('index/construct'); ?>" target="_blank">武汉</a>
              <a href="<?php echo url('index/construct'); ?>" target="_blank">南宁</a>
            </dd>
          </dl>
          <dl>
            <dt class="no4">华&nbsp;&nbsp;&nbsp;北</dt>
            <dd class="no4">
              <a href="<?php echo url('index/construct'); ?>" target="_blank">北京</a>
              <a href="<?php echo url('index/construct'); ?>" target="_blank">天津</a>
            </dd>
            </dl>
        </div>
           </div>
            <div class="nav" style="float: right;">
                <a href="<?php echo url('Index/index'); ?>" id="nav_">首页</a>
                <a href="<?php echo url('Rental/rental'); ?>"  id="nav_1" >房屋出租</a>
                <a href="<?php echo url('Sale/sale'); ?>"  id="nav_2" >房屋出售</a>
                <a href="<?php echo url('Entrust/entrust'); ?>" id="nav_112">在线委托</a>
                <a href="<?php echo url('Fdcase/fdcase'); ?>"  id="nav_65">客户案例</a>
                <a href="<?php echo url('About/about'); ?>" id="nav_113">走进英地</a>
            </div>
        </div>
    </div>
  <div class="banner-wrap">
    <div class="mar-wrap-index">
      <div style="width: 100%;position: relative;">
      <img width="100%" src="__STATIC__/<?php echo $ader1['img']; ?>" {/if}>
      </div>
      <div class="banner-bg">
        <div class="search-wrap clearfix">
      <form name="searchform" method="GET" action="<?php echo url('sale/sale'); ?>">
        <input type="text" name="key" class="search-input" placeholder="请输入您感兴趣的商圈或楼盘">
        <button type="submit" class="search-submit" data="on" style="background: url(__STATIC__/travel/images/soubtn.jpg) no-repeat center;border-radius: 3px;margin-left: -40px"></button>
      </form>
        </div>
      <p class="hot">
        热门搜索：
        <a href="<?php echo url('sale/sale'); ?>?1=1&subway=1">地铁1号线</a>
      </p>
      </div>
    </div>
  </div>
 <!--  <div class="sm-wrap">
    <div class="mar-wrap">
     <div class="description-bg">
        <p><span>房源全面</span><br>涵盖全北京所有商业办<br>公空置面积</p>
        <p><span>真实有效</span><br>承诺所有房源绝无虚假<br>保证真实有效</p>
        <p><span>专业服务</span><br>办公选址专家<br>竭诚为您服务</p>
        <p style="margin:0;"><span>公平至诚</span><br>诚信专业，我们一直在<br>努力！</p>
      </div>
    </div>
  </div>  -->
  <div class="slide-wrap">
    <div class="sw-operation clearfix">
      <a href="javascript:;" class="sw-next"></a>
      <a href="javascript:;" class="sw-prev"></a>
      <h3>热点楼盘</h3>
     </div>
     <div class="kc-wrap" id="event">
                <?php if(is_array($sale) || $sale instanceof \think\Collection || $sale instanceof \think\Paginator): $i = 0; $__LIST__ = $sale;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <div class="kc-item">
                  <div class="kill-overflow">
                        <div class="kill-wrap">
                              <a href="<?php echo url('rental/rentalDetail'); ?>?rental_id=<?php echo $vo['rental_id']; ?>" target="_blank">
                                <img class="photo" src="__STATIC__/<?php echo $vo['rental_src']; ?>" alt="<?php echo $vo['rental_name']; ?>" style="width: 425px;height: 300px;">
                              </a>
                          </div>
                    </div>
                    <p><?php echo $vo['rental_name']; ?><span>租金：<b><?php echo $vo['rental_price']; ?></b>/月</span></p>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
      </div>
  </div>
  <div class="bottom-wrap">
    <div class="mar-wrap-index1">
      <ul class="tab-head clearfix">
         <li class="cur"><span></span>联络我们</li>
         <li><span></span>公司动态</li>
      </ul>
      <div class="tab-cont">
         <!--联络我们-->
        <div class="tc-wrap clearfix"  style="display:block;">
          <div class="right-bar">
      <!-- <iframe runat="server" src="/map.html" width="580" height="310" frameborder="no" border="0" marginwidth="0" marginheight="0" scrolling="no" allowtransparency="yes"></iframe> -->
            <div id="map" style="width: 580px;height: 310px;"></div>
          </div>
          <div class="ewm-bar">
            <img src="__STATIC__/travel/images/ewm.png" alt="">
            <p>扫一扫<br><span>优质楼盘为您推荐！</span></p>
          </div>
          <div class="address-bar">
<ul class="callul">
  <li>  英地资产2012年创建于成都，发展于全国，公司定位中国房地产综合运营商，业务集资产租赁、商业运营、物业服务、长租公寓等领域，致力打造英地企业生态圈超级平台。
秉承“客户为中心、奋斗者为本”的经营理念，英地以优质的产品和服务赢得了股东、客户、合作伙伴、业内同行的喜爱和赞誉。
英地本着“品质第一、管理精细”的理念，致力于打造客户心中的好产品。
作为中国商业运营商之一，英地从事商业运营先后发展出都市型购物中心、社区型购物中心和居家生活购物小店三个业态品牌。英地将“精细化”的基因移植于商业运营，致力于打造家和办公室外的好去处。
英地公司旗下“系丰物业”，通过香港品质保障局ISO9001认证，业务涉及社区服务、房地产经纪等领域，英地物业秉承“爱+惊喜”的服务理念，致力于打造客户心中的好帮手。
英地爱相随
英地积极响应“购租并举”，率先布局长租公寓业务。分散式、集中式长租公寓品牌“果寓”已成为公司继资产投资、商业、物业后的主航道业务，秉承“家爱相随”的品牌主张理念，面向新新人群租住生活形态及消费升级需求。
  英地不仅向客户提供优质的产品和服务，还坚持以优秀企业公民角色自觉承担社会责任，致力于住房保障、生态环保、就业促进、和谐社区等公益事业。
在“精英”、“厚爱”、“进化”、“互信”、“志存高远”这五项核心价值观的支撑下，英地形成了“志存高远、求知谦虚”的独特气质，并建立起具有行业标杆地位的“合伙人+赛马机制”的现代企业管理制度。配合公司的快速成长，英地通过提供完善的个人发展计划、具有竞争力的薪酬激励和企业文化吸引来自行业的优秀人才，充实管理团队，目前已形成多层次人才招聘和发展体系。
英地秉承“区域聚焦”战略，以“强运营、控成本、持商业、精团队”为关键词的基础战略，标志着公司迈入新阶段。未来，英地将坚持以成为最受尊敬和信赖的行业领导者为愿景，继续致力于聚焦为客户提供优质的产品和服务并丰富生活，聚焦为奋斗者提供自我实现的平台并创造价值，在此过程中，成为最受喜爱的企业并创造机会。</li>
</ul>
<p style="margin-top: 20px;">公司名称 : 成都英地资产管理有限公司</p>
<p>总部地点 : 成都青羊区大墙西街鼓楼国际</p>
<p>公司电话 : 13111871088</p>
<p>成立时间 : 2012年8月</p>
          </div>
        </div>
      <!--公司动态-->
        <div class="tc-wrap clearfix" >
<div id="a1" class="right-bar"></div>
<script type="text/javascript" src="__STATIC__/ckplayer/ckplayer.js" charset="utf-8"></script>
 <!-- <script type="text/javascript">
    var flashvars={
        f:'http://www.qdyxdc.com/d/file/20161022/86b6c09d908d259272a97bb5cf50c46b.flv',
        c:0,
        p:0,
        e:1,
        h:4,
        i:'http://www.bjyxfdc.com__STATIC__/travel/images/video.jpg',
        wh:'420:310'
    };
    var params={bgcolor:'#FFF',allowFullScreen:true,allowScriptAccess:'always',wmode:'transparent'};
    // var video=['http://www.qdyxdc.com/d/file/20161022/86b6c09d908d259272a97bb5cf50c46b.flv->video/mp4'];
    CKobject.embed('__STATIC__/ckplayer/ckplayer.swf','a1','ckplayer_a1','420','310',false,flashvars,video,params);
</script><!--首页视频 -->
          <div class="right-bar" style="background-color: rgb(0, 0, 0); width: 480px; height: 310px;">
               <div id="ckplayer" >
                    <video id="my-video" class="video-js" controls preload="auto" width="420" height="310"
                    poster="" data-setup="{}">
                    <source src="__STATIC__/<?php echo $vi['video']; ?>" type="video/mp4">
                    </video>
          <script src="__STATIC__/travel/js/video.min.js"></script>
               </div>
            </div>
          <div class="left-bar">
            <p><a href="<?php echo url('About/about'); ?>" target="_blank">英地资产2012年创建于成都，发展于全国，公司定位中国房地产综合运营商，业务集资产租赁、商业运营....</a></p>
          </div>
          <div class="middle-bar">
            <?php if(is_array($news) || $news instanceof \think\Collection || $news instanceof \think\Paginator): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <div class="dt-wrap clearfix" >
              <div class="date-bg">
                <p><?php echo date('d',$vo['article_creatime']); ?></p>
                <span><?php echo date('M',$vo['article_creatime']); ?></span>
              </div>
                <div class="news-wrap">
                    <h3><a href="<?php echo url('about/newsDetail'); ?>?article_id=<?php echo $vo['article_id']; ?>" target="_blank" title="<?php echo $vo['article_title']; ?>"><?php echo $vo['article_title']; ?></a></h3>
                    <p style="height: 0;"><?php echo mb_substr($vo['article_content'],0,10,'utf-8'); ?>...</p>
                </div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
                 </div>
        </div>
      </div>
    </div>
  </div>
  <div class="partner-wrap">
    <div class="box">
      <p>合作伙伴：</p>
      <div class="picbox">
        <ul class="piclist mainlist">
                    <li><a href="javascript:;" target="_blank"><img src="http://7ktqp6.com1.z0.glb.clouddn.com/20160812/77bf86b2789690dc97fb6ccc32173e1a.jpg" alt=""/></a></li>
                    <li><a href="javascript:;" target="_blank">
                      <img src="http://7ktqp6.com1.z0.glb.clouddn.com/20170312/c04cb3fe7cfe485df26b013a277a267a.jpg" alt=""/></a></li>
                    <li><a href="javascript:;" target="_blank">
                      <img src="http://7ktqp6.com1.z0.glb.clouddn.com/20161026/3bc63f8a3501696f23b88f2534467cbe.jpg" alt=""/></a></li>
                    <li><a href="javascript:;" target="_blank">
                      <img src="http://7ktqp6.com1.z0.glb.clouddn.com/20161026/83af1d875833a3ee6536bf9a72b87695.jpg" alt=""/></a></li>
                    <li><a href="javascript:;" target="_blank"><img src="http://7ktqp6.com1.z0.glb.clouddn.com/20161026/d307d6d4c1ea26ab8ac638bd8f97c83e.jpg" alt=""/></a></li>
                    <li><a href="javascript:;" target="_blank">
                      <img src="http://7ktqp6.com1.z0.glb.clouddn.com/20161026/5652be3cabc2785371f1e9c7bed805b7.jpg" alt=""/></a></li>
                    <li><a href="javascript:;" target="_blank">
                      <img src="http://7ktqp6.com1.z0.glb.clouddn.com/20161026/7d803131df78a981afc01c3001d54c90.jpg" alt=""/></a></li>
                  </ul>
            <ul class="piclist swaplist"></ul>
      </div>
      <div class="og_prev"></div>
      <div class="og_next"></div>
    </div>
  </div>
      <script type="text/javascript" src="__STATIC__/travel/js/jquery-1.10.1.min.js"></script>
      <script type="text/javascript" src="__STATIC__/travel/js/min.index.js"></script>
      <script type="text/javascript" src="__STATIC__/travel/js/jquery.easing.min.js"></script>
      <script type="text/javascript" src="__STATIC__/travel/js/killercarousel.js"></script>
      <script type="text/javascript" src="__STATIC__/travel/js/noCopy.js"></script>
      <script language="javascript" src="__STATIC__/loginsty/js/custom.js"></script>
      <script type="text/javascript" src="__STATIC__/travel/js/lkrtl.min.js"></script>
      <script type="text/javascript" src="__STATIC__/travel/js/layer.js"></script>
      <script>var newsurl = "/"</script>
      <div class="footer-wrap">
            <div class="mar-wrap">
                  <p>
                        <span>
                              Copyright © 2009-2018
                              <a href="<?php echo url('index/index'); ?>" title="">英地资产</a> yingdizichan.com All Rights Reserved
                              <a href="javascript:;" target="_blank">蜀ICP备18003460号</a>
                              </span>
                              <span>
                                <a href="<?php echo url('cner/admin/adminlogin'); ?>" target="_blank">员工登录</a>
                              </span>
                  </p>
            </div>
      </div>
 <!--登录弹窗位置-->
            <div class="loginmask"></div>
            <div id="loginalert">
<!-- 加载登录的内容 -->
            </div>
<!-- 代码 开始 -->
  <div id="leftsead">
   <ul>
    <li> <a href="javascript:void(0)" class="youhui"> <img src="__STATIC__/travel/images/l02.png" width="47" height="49" class="shows" /> <img src="__STATIC__/travel/images/a.png" width="57" height="49" class="hides" /> <img src="__STATIC__/travel/images/weixin.jpg" width="145" class="2wm" style="display:none;margin:-100px 57px 0 0" /> </a> </li>
    <li> <a href="javascript:void(0)" id="fankui">
      <div class="hides" style="width:161px;display:none;" id="qq">
       <div class="hides" id="p1">
        <img src="__STATIC__/travel/images/ll04.png"  />
       </div>
       <div class="hides" id="p2">
        <span  style="color:#FFF;font-size:13px">意见反馈</span>
       </div>
      </div> <img src="__STATIC__/travel/images/l04.png"  width="47" height="49" class="shows" /> </a> </li>
    <li id="tel"> <a href="javascript:void(0)">
      <div class="hides" style="width:161px;display:none;" id="tels">
       <div class="hides" id="p1">
        <img src="__STATIC__/travel/images/ll05.png" />
       </div>
       <div class="hides" id="p3">
        <span style="color:#FFF;font-size:12px">13111871088</span>
       </div>
      </div> <img src="__STATIC__/travel/images/l05.png" width="47" height="49" class="shows" /> </a> </li>
    <li id="btn"> <a id="top_btn">
      <div class="hides" style="width:161px;display:none">
       <img src="__STATIC__/travel/images/ll06.png" width="161" height="49" />
      </div> <img src="__STATIC__/travel/images/l06.png" width="47" height="49" class="shows" /> </a> </li>
   </ul>
  </div>
<script>
$(document).ready(function(){
    $("#leftsead a").hover(function(){
        if($(this).prop("className")=="youhui"){
            $(this).children("img.hides").show();
        }else{
            $(this).children("div.hides").show();
            $(this).children("img.shows").hide();
            $(this).children("div.hides").animate({marginRight:'0px'},'0');
        }
    },function(){
        if($(this).prop("className")=="youhui"){
            $(this).children("img.hides").hide();
        }else{
            $(this).children("div.hides").animate({marginRight:'-163px'},0,function(){$(this).hide();$(this).next("img.shows").show();});
        }
    });
    $("#top_btn").click(function(){if(scroll=="off") return;$("html,body").animate({scrollTop: 0}, 600);});
      //右侧导航 - 二维码
        $(".youhui").mouseover(function(){
            $(this).children(".2wm").show();
        })
        $(".youhui").mouseout(function(){
            $(this).children(".2wm").hide();
        });
});
// 意见反馈
$('#fankui').on('click', function(){
  layer.open({
    type: 2,
    title: '意见反馈',
    area: ['800px', '350px'],
    content: "<?php echo url('member/suggestion'); ?>"
  });
});
</script>
<!-- 代码 结束 -->
 <script type="text/javascript">
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
        addMapOverlay();//向地图添加覆盖物
        for (var i = 0; i < markerArr.length; i++) {
            var p0 = markerArr[i].point.split(",")[0];
            var p1 = markerArr[i].point.split(",")[1];
            var maker = addMarker(new window.BMap.Point(p0, p1), i);
            addInfoWindow(maker, markerArr[i], i);
        }
    }
    var markerArr = <?php echo $point; ?>;
    function createMap(){
        map = new BMap.Map("map");
        map.centerAndZoom(new BMap.Point(104.084009,30.683551),11);
        for (var i = 0; i < markerArr.length; i++) {
            var p0 = markerArr[i].point.split(",")[0];
            var p1 = markerArr[i].point.split(",")[1];
            var maker = addMarker(new window.BMap.Point(p0, p1));
            addInfoWindow(maker, markerArr[i], i);
        }
    }
    function setMapEvent(){
        map.enableScrollWheelZoom();
        map.enableKeyboard();
        map.enableDragging();
        map.enableDoubleClickZoom()
    }
    function addClickHandler(target,window){
        target.addEventListener("click",function(){
            target.openInfoWindow(window);
        });
    }
    function addMapOverlay(){
    }
    //向地图添加控件
    function addMapControl(){
        var scaleControl = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
        scaleControl.setUnit(BMAP_UNIT_IMPERIAL);
        map.addControl(scaleControl);
        var navControl = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
        map.addControl(navControl);
        var overviewControl = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:false});
        map.addControl(overviewControl);
    }
    function addMarker(point) {
        var myIcon = new BMap.Icon("__STATIC__/stand/images/markers.png", new BMap.Size(35,30));
        var marker = new BMap.Marker(point,{icon:myIcon});
        map.addOverlay(marker);
        return marker;
    }
    // 添加信息窗口
    function addInfoWindow(marker, poi) {
        //pop弹窗标题
        var title = '<div style="font-weight:bold;color:#CE5521;font-size:14px">名称：' + poi.title + '</div>';
        //pop弹窗信息
        var html = [];
        html.push('<table cellspacing="0" style="table-layout:fixed;width:100%;font:12px arial,simsun,sans-serif"><tbody>');
        html.push('<tr>');
        html.push('<td style="vertical-align:top;line-height:16px;width:38px;white-space:nowrap;word-break:keep-all">地址:</td>');
        html.push('<td style="vertical-align:top;line-height:16px">' + poi.address + ' </td>');
        html.push('</tr>');
        html.push('</tbody></table>');
        var infoWindow = new BMap.InfoWindow(html.join(""), { title: title, width: 200 });
        var openInfoWinFun = function () {
            marker.openInfoWindow(infoWindow);
        };
        marker.addEventListener("mouseover", openInfoWinFun);
        return openInfoWinFun;
    }
    var map;
    initMap();
  </script>
<script type="text/javascript">
// 首页轮播图插件
      $(".kc-wrap").KillerCarousel({
                    // Default natural width of carousel.
                    width: 1000,
                    // Item spacing in 3d (has CSS3 3d) mode.
                    spacing3d: 240,
                    // Item spacing in 2d (no CSS3 3d) mode.
                    spacing2d: 240,
                    showShadow: false,
                    showReflection: false ,
                    infiniteLoop:true,
                    showNavigation:false,
                    renderer3d:"render3dFlow"
                });
      var kc = $('.kc-wrap').data('KillerCarousel');
      var dir = 0;
      $('.sw-prev,.sw-next').bind('mousedown', function(evt) {
            dir = -1;
            if ($(this).hasClass('sw-prev'))
            dir = 1;
            kc.position(kc.position() + dir * 150);
            dir=0;
            kc.lineUp();
            evt.preventDefault();
            return false;
        })
      var set;
       function clear(obj){
        var c=$(obj).children();
        var i=c.length;
        var obj=$(c[i-1]);
        var string=obj.text();
        if(string.indexOf("licensed")>=0){
          obj.remove();
          clearInterval(set);
        }
      }
      function settime(speed){
         set=setInterval(function(){
              clear(".kc-wrap");
          },speed)
        }
      settime(50);
</script>
<a id="_pinganTrust" target="_blank" href="http://c.trustutn.org/s/bjyxfdc.com"></a>
<script type="text/javascript" src="http://c.trustutn.org/show?type=3&sn=201510101008864422"></script>
<!-- <script type="text/javascript" src="__STATIC__/lib/jquery/1.9.1/jquery.min.js"></script> -->
<script type="text/javascript" src="__STATIC__/lib/layer/2.4/layer.js"></script>
<script type="text/javascript">
  function member_Log(){
      layer.open({
          title:"登录",
          type:2,
          content:"<?php echo url('Member/memLog'); ?>",
          area: ['440px', '370px'],
          end: function () {
              window.location.href="<?php echo url('Member/memRegi'); ?>";
          }
       });
}
  function userLogout(){
    layer.confirm('确认要退出吗？',function(){
      window.location.href="<?php echo url('Member/memLogout'); ?>";
    });
  }
</script>
</body>
</html>
<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"D:\xampp\htdocs\ydzc/application/index\view\about\contract.html";i:1531876854;}*/ ?>
<!DOCTYPE html>

<html> 

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>联络我们 </title>

<meta name="description" content="" />

<meta name="keywords" content="" />



<link  href="__STATIC__/stand/css/style.css" rel="stylesheet" type="text/css" media="all" />

<!--[if lte IE 6]>

    <script type="text/javascript" src="belatedPNG.js" tppabs="__STATIC__/stand/js/belatedPNG.js"></script>

    <script type="text/javascript">

      DD_belatedPNG.fix('.nav_wrap');

    </script>

<![endif]-->

<script type="text/javascript"  src="http://api.map.baidu.com/api?v=2.0&ak=6eEr4R37UtXpijuWHD3s4v7l"></script>

<script type="text/javascript">

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
        if(linkurl.indexOf("rental")>0 || linkurl.indexOf("sale")>0 || linkurl.indexOf("contact")>0 || linkurl.indexOf("s")>0 || linkurl=="http://yingdizichan.com/index/about/contract.html" || linkurl.indexOf("building")>0||linkurl=="http://yingdizichan.com/index/about/contract.html"||linkurl=="http://www.yingdizichan.com/index/about/contract.html"|| linkurl=="http://www.yingdizichan.com/index/about/contract.html"||linkurl=="yingdizichan.com/index/about/contract.html")
        {
            var ReturnLinkUrl = "<?php echo url('mobile/about/callme'); ?>";

            window.location = ReturnLinkUrl;
        }
    }
})();


</script>

</head>

<body>

    <div class="header-wrap">

        <div class="mar-wrap2">

            <div class="nav">

               <a href="/" id="nav_">首页</a>

                <a href="<?php echo url('About/about'); ?>" id="nav_113">走进英地</a>

                <a href="<?php echo url('About/news'); ?>" class=" ">媒体中心</a>

                <a href="<?php echo url('About/employ'); ?>" class=" ">加入英地</a>

                <a href="<?php echo url('About/team'); ?>" class=" ">产品中心</a>

                <a href="<?php echo url('About/book'); ?>" class=" ">英地内刊</a>

                <a href="<?php echo url('About/contract'); ?>" class="cur">联络我们</a>

            </div>

            <a href="<?php echo url('index/index'); ?>" class="logo"><img style="width: 100px;height: 60px;"  src="__STATIC__/travel/images/logo.png" alt=""></a>     

       

        </div>

    </div>

    <div class="contact-bg2">

        <div class="mar-wrap4">

            <p>总部地址：成都青羊区大墙西街鼓楼国际<br><br />电话：13111871088<br />Email：</p>

            <h1>联络我们</h1>

        </div>

    </div>

     

    <div class="map-wrap">

        <div style="width:100%;height:544px;border:#ccc solid 1px;font-size:12px" id="map"></div>

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



            <a href="<?php echo url('about/contract'); ?>">联络我们</a>|

            <a href="<?php echo url('About/about'); ?>">走进英地</a><br>Copyright © 2009-2018            

            <a href="">英地资产</a>All Rights Reserved

            </p>

        </div>

    </div>

<script type="text/javascript"  src="__STATIC__/stand/js/jquery-1.10.1.min.js"></script>

<script type="text/javascript"  src="__STATIC__/stand/js/min.index.js"></script>

<script type="text/javascript"  src="__STATIC__/travel/js/noCopy.js"></script>

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
        map.centerAndZoom(new BMap.Point(104.084009,30.683551),12);
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

</body>

</html>
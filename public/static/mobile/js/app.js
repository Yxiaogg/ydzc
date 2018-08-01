(function($) {
  'use strict';

  $(function() {
     $(".select-list li").on("click",function(){      
     	var index=$(this).index();
     	var _this=this;
     	$(".c-mask").show();
        $(".select-list").addClass("show-select");
        if($(this).hasClass("cur")){
        	$(".select-list").removeClass("show-select"); 
        	$(this).removeClass("cur"); 
        	$(".c-mask").hide();
        }
        else{
        	$(this).addClass("cur").siblings().removeClass("cur");
        }
        
        $(".slidetoggle .c-section").eq(index).slideToggle().siblings().hide();

     });

     $(".c-mask").on("click",function(){
        $(this).hide();
        $(".slidetoggle .c-section").hide();
        $(".select-list").removeClass("show-select");
        $(".select-list li").removeClass("cur");
     });

     $(".xuanxiang").on("click","P",function(){
       $(this).addClass("cur").siblings().removeClass("cur");
     });

     $(window).scroll(function(){
        var st=$(document).scrollTop();
        if(st>90){
          $(".c-top").show();
        }
        else{
          $(".c-top").hide();
        }
     });
     $(".more-info").on("click",function(){
        $(".c-description").toggleClass("height-auto");
     });

     $(".c-share").on("click",function(){
        $(".share-zone").slideToggle();
     })
  });
  
  /*
   * 搜索页面的操作
   * */
  //区域搜索
  $(".district-content").delegate("a","click",function(){
	  var data = $(this).html();
	  if( data =="不限")
	  {
		  var data = "";
	  }
	  $("input[name='district']").val(data)
	  $("district").html(":"+data);
	  $(".district-content").find("a").removeClass("cur");
	  $(this).addClass("cur");
  });
  //地铁
  $(".subway-content").delegate("a","click",function(){
	  var data = $(this).html();
	  if( data =="不限")
	  {
		  var data = "";
	  }
	  $("input[name='subway']").val(data)
	  $("subway").html(":"+data);
	  $(".subway-content").find("a").removeClass("cur");
	  $(this).addClass("cur");
  });
  //环线
  $(".ring-content").delegate("span","click",function(){
	  var data = $(this).html();
	  var ring = $(this).attr("data");
	  if( data =="不限")
	  {
		  var ring = "";
	  }
	  $("input[name='ring']").val(ring)
	  $("ring").html(":"+data);
	  $(".ring-content").find("a").removeClass("cur");
	  $(this).find("a").addClass("cur");
  });
  //面积
  $(".rentablearea-content").delegate("span","click",function(){
	  var data = $(this).html();
	  var ring = $(this).attr("data");
	  if( data =="不限")
	  {
		  var ring = "";
	  }
	  $("input[name='rentablearea']").val(ring)
	  $("rentablearea").html(":"+data);
	  $(".rentablearea-content").find("a").removeClass("cur");
	  $(this).find("a").addClass("cur");
  });
  //租金
  $(".price-content").delegate("span","click",function(){
	  var data = $(this).html();
	  var ring = $(this).attr("data");
	  if( data =="不限")
	  {
		  var ring = "";
	  }
	  $("input[name='price']").val(ring)
	  $("price").html(":"+data);
	  $(".price-content").find("a").removeClass("cur");
	  $(this).find("a").addClass("cur");
  });
  //租金
  $(".tprice-content").delegate("span","click",function(){
	  var data = $(this).html();
	  var ring = $(this).attr("data");
	  if( data =="不限")
	  {
		  var ring = "";
	  }
	  $("input[name='tprice']").val(ring)
	  $("tprice").html(":"+data);
	  $(".tprice-content").find("a").removeClass("cur");
	  $(this).find("a").addClass("cur");
  });
})(jQuery);


//搜索框的js 操作 (首页搜索)
function SearchBuilding()
{
	var govern = $(".search-submit").attr("data");
	if( govern == "off")
	{
		return;
	}

	//获取搜索框的内容
	var keyboard = $("input[name='keyboard']").val();
	var keyboard = keyboard.replace(/^\s+/, '').replace(/\s+$/, '');
	if(!keyboard)
	{
		alert("请输入一个你想搜索的关键词");
		return;
	}
	var classid = $("input[name='classid']").val();
	$.ajax({
		type:'get',
		url:"/extend/extend-search/controll.php",
		data:"enews=search&classid="+classid+"&keyboard="+keyboard+"&t="+Math.random(),
		dataType:'json',
		beforeSend:function()
		{
			$(".search-submit").attr("data","off");
		},
		success:function(json)
		{
			if(json.resid ==0)
			{
				var searchurl = "http://m.bjyxfdc.com/e/action/Listinfo.php?classid="+json.classid+"&ph=1&orderby=&myorder=&keyboard="+keyboard+"&"+json.param;
                                                       // var searchurl = "http://m.bjyxfdc.com
				window.location.href=searchurl;
			}
			if(json.resid ==1)
			{
				alert(json.param);
			}
			setTimeout(function(){
				$(".search-submit").attr("data","on")
			},500);
		}
	})
}


function checkSubmit()
{
	return false;
}

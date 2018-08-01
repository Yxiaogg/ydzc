
(function($){
	//验证客户端浏览器是否开启了COOKIE的功能
	//checkCookieSupport()
	
  $.fn.Slide = function(options){
var defaults = {
prev_btn: "#pb",// operation btn(prev)
next_btn: "#nb",//operation btn(next)
scroll_Number: 1,//one time scroll numben
big_zone:".img-wrap-list",//all of big img
small_zone:".small-img ul",//all of small img
scrollWidth:"96px",// the width of one small img
query_num:4,//the number of small img nav
nav_img:".small-img li"//every small img
}
var options = jQuery.extend(defaults, options);
return this.each(function(){
  var scrollWidth=options.scrollWidth;
  var num=options.query_num;
  var big=$(options.big_zone);
  var small=$(options.small_zone);
  var Next=$(options.next_btn);
  var Prev=$(options.prev_btn);
  var scrollNumber=options.scroll_Number;
  var b_children=big.children();
  var s_children=small.children();
  var length=b_children.length;
  var pageNumber=Math.ceil(length/scrollNumber);
  var i=0;
  var l=0;

function slidePrev(target){
    if(i==0)
    {
       return;
    }
    else{
       i--;
       $(b_children).hide().eq(i).fadeIn();
       $(s_children).eq(i).addClass("current").siblings().removeClass("current");
       if(l>0 && pageNumber>num){
       small.stop(false,true).animate({left : '+='+scrollWidth }, "normal");
       l--;
       }
    }
 };
 function slideNext(target){
    if(i==pageNumber-1)
    {
       return;
    }
    else{
       i++;
       $(b_children).hide().eq(i).fadeIn();
       $(s_children).eq(i).addClass("current").siblings().removeClass("current");
       if(l<pageNumber-num && pageNumber>num){
       small.stop(false,true).animate({left : '-='+scrollWidth }, "normal");
       l++;
       }
    }
 };



  Next.click(function(){
    var _this=$(this);
      slideNext(_this);

      });

  Prev.click(function(){
      var _this=$(this);
      slidePrev(_this);

    });

  $(options.nav_img).click(function(){
      i=$(this).index();
      $(b_children).hide().eq(i).fadeIn();
      $(s_children).eq(i).addClass("current").siblings().removeClass("current");
  });

});
};
})(jQuery);

$(function(){

  $(".di-slide").Slide();

  $(".table-wrap td").hover(function(){
      if($(this).hasClass("first-td")) return;
      var index=$(this).index();
      $(".table-wrap tr").each(function(){
      	$(this).find("td").eq(index).addClass("cur").siblings().removeClass("cur");
      })
  });

  $(".big-ewm").hover(function(){
  	$(this).find("img").show();
  },function(){
    $(this).find("img").hide();
  });

var fix=$(".loupan-list").offset()&&$(".loupan-list").offset().top;

  $(window).scroll(function(){
  	var st=$(document).scrollTop();
  	if(st>=fix){
  		$(".loupan-list").addClass("fixtop");
  	}else{
  		$(".loupan-list").removeClass("fixtop");
  	}
  });

  $(".loupan-list li").click(function(){
  	$(".loupan-list li").each(function(){
  		$(this).removeClass("cur");
  	})
     $(this).addClass("cur");
  });

  $(".geren-tab-head li").click(function(){
    var index=$(this).index();
    $(this).addClass("cur").siblings().removeClass("cur");
    $(".geren-tab-cont .gt-wrap").eq(index).show().siblings().hide();
  });

  $(".map-head span").click(function(){
    var index=$(this).index();
    $(this).addClass("cur").siblings().removeClass("cur");
    $(".three-wrap .map-show").eq(index).show().siblings().hide();
  });

  $(".border-tab span").click(function(){
    var index=$(this).index();
    $(this).addClass("cur").siblings().removeClass("cur");
    $(".recommend-cont .rc-list").eq(index).show().siblings().hide();
  });

  $(".al-nav li").click(function(){
    var index=$(this).index();
    $(this).addClass("cur").siblings().removeClass("cur");
    $(".al-img .img-word").eq(index).show().siblings().hide();
  });
/*
  $(".op-style span").click(function(){
     $(this).addClass("cur").siblings().removeClass("cur");
  });
*/
  $(".slowdown").click(function(){
      $(this).toggleClass("hide-show");
      $(".all-options").slideToggle();

  });

  $(".duibi input").click(function(){
   if($(this)[0].checked){
     var t1=$(".xzl-list").offset().top,
         t2=$(this).offset().top;
     $(".begin-db").show().css({"top":t2-t1});
   }
  });

  $(".close-begin").click(function(){
     $(".begin-db").hide();
  });



   $(".tab-head li").click(function(){
    var index=$(this).index();
    $(this).addClass("cur").siblings().removeClass("cur");
    $(".tab-cont .tc-wrap").eq(index).show().siblings().hide();
  });
   /*
    * 注册页面的输入框的焦点验证
    * */
   //验证用户名

   $("#JQLoginAndDown_truename").blur(function(){
	   var truename = $(this).val();
	   if( !truename.trim() )
	   {
			$("#JQLoginAndDown_truename").css("border","2px solid red").attr("placeholder","此项不可以为空");
			$("#JQLoginAndDown_truename").next("p").html("&chi;").css("color","#CE0000")
	   }
	   else
	   {
			$("#JQLoginAndDown_truename").css("border","1px solid #DFDFDF")
			$("#JQLoginAndDown_truename").next("p").html("&radic;").css("color","#007500")
		}
   })
   //验证工号
      $("#JQLoginAndDown_username").blur(function(){
	   var username = $(this).val();
	   if( !username.trim() )
	   {
			$("#JQLoginAndDown_username").css("border","2px solid red").attr("placeholder","此项不可以为空");
			$("#JQLoginAndDown_username").next("p").html("&chi;").css("color","#CE0000")
	   }
	   else
	   {
			$("#JQLoginAndDown_username").css("border","1px solid #DFDFDF")
			$("#JQLoginAndDown_username").next("p").html("&radic;").css("color","#007500")
		}
   })
      //验证邮箱
      $("#JQLoginAndDown_email").blur(function(){
	   var email = $(this).val();
	   var myreg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
	   if( !email.trim() )
	   {
			$("#JQLoginAndDown_email").css("border","2px solid red").attr("placeholder","此项不可以为空");
			$("#JQLoginAndDown_email").next("p").html("&chi;").css("color","#CE0000")
	   }
	   else if( !myreg.test(email))
	   {
			$("#JQLoginAndDown_email").css("border","2px solid red");
			$("#JQLoginAndDown_email").next("p").html("&chi;").css("color","#CE0000")
	   }
	   else
	   {
			$("#JQLoginAndDown_email").css("border","1px solid #DFDFDF")
			$("#JQLoginAndDown_email").next("p").html("&radic;").css("color","#007500")
		}
   })
   /*
   //验证部门的选择
   $("#department").blur(function(){
	   var department = $(this).find("option:selected").val();
	   if( department.trim() ==0 )
		{
		   $("#department").css("border","2px solid red")
		   $("#department").next("p").html("&chi;").css("color","#CE0000")
		}
	   else
	   {
		   $("#department").css("border","2px solid #DFDFDF")
		   $("#department").next("p").html("&radic;").css("color","#007500")
	   }
   })
   //门店的验证
      $("#store").blur(function(){
		   var store = $(this).find("option:selected").val();
		   if( store.trim() =="未选择" )
			{
			   $("#store").css("border","2px solid red")
			   $("#store").next("p").html("&chi;").css("color","#CE0000")
			}
		   else
		   {
			   $("#store").css("border","1px solid #DFDFDF")
			   $("#store").next("p").html("&radic;").css("color","#007500")
		   }
      })
     
      //密码的验证
      $("#JQLoginAndDown_password").blur(function(){
    	  var password = $(this).val();
    	  if( !password.trim() || password.trim().length <6)
    	  {
			   $("#JQLoginAndDown_password").css("border","2px solid red").attr("placeholder","请输入密码");
			   $("#JQLoginAndDown_password").next("p").html("&chi;请填写6位以上的密码").css("color","#CE0000")
    	  }
    	  else
    	 {
			   $("#JQLoginAndDown_password").css("border","1px solid #DFDFDF")
			   $("#JQLoginAndDown_password").next("p").html("&radic;").css("color","#007500")
    	 }
      })
      //验证两次密码是否一样
           $("#JQLoginAndDown_repassword").blur(function(){
    	  var repassword = $(this).val();
    	  var password = $("#JQLoginAndDown_password").val();
    	  if( !repassword.trim() )
    	  {
			   $("#JQLoginAndDown_repassword").css("border","2px solid red").attr("placeholder","请输入密码");
			   $("#JQLoginAndDown_repassword").next("p").html("&chi; 请填写6位以上的密码").css("color","#CE0000")
    	  }
    	  else
    	 {
			  if( password != repassword)
			  {
				   $("#JQLoginAndDown_repassword").css("border","2px solid red");
				   $("#JQLoginAndDown_repassword").next("p").html("&chi; 两次密码输入不一样").css("color","#CE0000")
			  }
			  else
			  {
		    		  $("#JQLoginAndDown_repassword").css("border","2px solid #DFDFDF")
					  $("#JQLoginAndDown_repassword").next("p").html("&radic;").css("color","#007500")
			  }
    	 }
      })
 */
    $('#userpicfile').change(function(){
		travel.previewImage(this,"imghead-1",'preview-1')
	})
	$('#weixinpicfile').change(function(){
		travel.previewImage(this,"imghead-2",'preview-2')
	})
})


//搜索框的js 操作
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
		type:'post',
		url:"http://www.bjyxfdc.com/extend/extend-search/controll.php",
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
				var searchurl = "http://www.bjyxfdc.com/e/action/Listinfo.php?classid="+json.classid+"&ph=1&orderby=&myorder=&keyboard="+keyboard+"&"+json.param;
				//window.open(searchurl);
				window.location.href = searchurl
			}
			if(json.resid ==1)
			{
				alert(json.param);
				//window.location.reload();
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

//写cookies
function setCookie(c_name, value, expiredays){
 　　　　var exdate=new Date();
　　　　exdate.setDate(exdate.getDate() + expiredays);
　　　　document.cookie=c_name+ "=" + escape(value) + ((expiredays==null) ? "" : ";expires="+exdate.toGMTString());
 　　}
 
//读取cookies
function getCookie(name)
{
    var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
 
    if(arr=document.cookie.match(reg))
 
        return (arr[2]);
    else
        return null;
}

//删除cookies
function delCookie(name)
{
        document.cookie= name + "=0;expires="+exp.toGMTString();
}
/*
function checkCookieSupport(){
    var isSupport = false;
    if(typeof(navigator.cookieEnabled) != 'undefined')
        isSupport = navigator.cookieEnabled;
    else{   
        document.cookie = 'test';
        isSupport = document.cookie == 'test';
        document.cookie = '';
    }
    if(!isSupport){
        alert('您的浏览器禁用了Cookie。您将失去很多功能的使用,请开启COOKIE的功能');
    }
}
*/
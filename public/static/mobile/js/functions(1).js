/*
| functions.js trylife$ create 15/2/15
|--------------------------------------------------------------------------
| share link contact ajax.
|--------------------------------------------------------------------------
|
|
|
*/
var shareFieldPre='share-link-contact-';


// 浏览器获取参数值
function request(paras)
{
	var url = location.href;
	var paraString = url.substring(url.indexOf("?") + 1, url.length).split("&");
	var paraObj = {}
	for (i = 0; j = paraString[i]; i++)
	{
		paraObj[j.substring(0, j.indexOf("=")).toLowerCase()] = j.substring(j.indexOf("=") + 1, j.length);
	}
	var returnValue = paraObj[paras.toLowerCase()];
	if (typeof (returnValue) == "undefined")
	{
		return "";
	}
	else
	{
		return returnValue;
	}
}

function shareUserid()
{
	var urlShareUserid=request('shareuserid');
	// 只需要获取url上的参数其他交给后端处理
	var cookieShareUserid=$.cookie(cookiepre+'shareuserid');
	 var Userid=$.cookie(cookiepre+'mluserid');
	//alert(cookieShareUserid);
}

//确保当前的返回的用户为初次分享出去的用户
function getShareUserid()
{
	var cookieShareUserid=$.cookie(cookiepre+'shareuserid');
	var LoginUserid=$.cookie(cookiepre+'mluserid');
	if(cookieShareUserid !=34 && !LoginUserid)
	{
		var cookieShareUserid = cookieShareUserid;
	}
	if( cookieShareUserid==34 && !LoginUserid)
	{
		var cookieShareUserid = 34;
	}
	if(LoginUserid && cookieShareUserid==34)
	{
		var cookieShareUserid = LoginUserid;
	}
	if(LoginUserid  &&  !cookieShareUserid)
	{
		var cookieShareUserid = LoginUserid;
	}
	return cookieShareUserid;
}

// 记录已AJAX提交的状态破处监控
function postStatusCode(urlShareUserid,cookieShareUserid,Userid)
{
	return urlShareUserid+':'+cookieShareUserid+':'+Userid;
}

//生成分享的参数
function shareUseridUrl()
{
	var cookieShareUserid = getShareUserid();
	  if(cookieShareUserid)
	  {
		  //alert(cookieShareUserid);
		  window._bd_share_config = {
		    common : {
		      bdText : bdText,  
		      bdDesc : bdText,  
		      //bdUrl : "http://www.bjyxfdc.com"+shareurl+'?shareuserid='+cookieShareUserid,  
		      bdUrl : websharedomainurl+shareurl+'?shareuserid='+cookieShareUserid,  
		      bdPic : ''
		    },
		    share : [{
		      "bdSize" : 24
		    }],
		    /*
		    image : [{
		      viewType : 'list',
		      viewPos : 'top',
		      viewColor : 'black',
		      viewSize : '16',
		      viewList : ['weixin','tsina','qzone','tqq','renren']
		    }]
		    */
		  }
		  with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?cdnversion='+~(-new Date()/36e5)];	
	  }
	  else
	{
		  setTimeout(function(){
			  window.location.reload();
		  },500);
	}
}


// Userid>urlShareUserid>cookieShareUserid
// 任何一次登陆状态更变都需要重新提交
function secondCheck()
{
	var urlShareUserid=request('shareuserid');
	var cookieShareUserid=$.cookie(cookiepre+'shareuserid');
	var Userid=$.cookie(cookiepre+'mluserid');
	var newStatusCode=postStatusCode(urlShareUserid,cookieShareUserid,Userid);
	var nowStatusCode=$("#shareLinkStatuscode").html();
	//alert(newStatusCode);
	if(nowStatusCode=='')
	{
		$("#shareLinkStatuscode").html(newStatusCode);
	}
	else if(nowStatusCode!=nowStatusCode)
	{
		shareAjaxPost();
		$("#shareLinkStatuscode").html(newStatusCode);

	}
}

// 页面载入完成提交
// 验证状态更新提交
function shareAjaxPost()
{
	var urlShareUserid=request('shareuserid');
	if(urlShareUserid=='')
	{
		urlShareUserid=0;
	}
	// alert(urlShareUserid);
	var posturl='extend/share-link-contact/controller.php';
	$.ajax({
		type	: "post",
		async	: true,
		url	: siteurl+posturl,
		data	: "dofor=record&urlShareUserid="+urlShareUserid+"&t="+Math.random()+dataurl,
		dataType: "json",
		success	: function (json)
		{
			if(json.profile.length)
			{
				$("#"+shareFieldPre+'profile').attr('src',json.profile);
			}
			if( json.name.length >2)
			{
				$("#"+shareFieldPre+'name').html(json.name);
			}
			
			if(json.phone.length >2)
			{
				$("#"+shareFieldPre+'phone').html(json.phone);
				$("#"+shareFieldPre+'phone-online').attr("href","tel:"+json.phone);
			}

			/*
			$("#"+shareFieldPre+'qrcode').attr('src',json.qrcode);
			$("#"+shareFieldPre+'qrcode1').attr('src',json.qrcode);
			*/
		}
	});
}

$(document).ready(function()
{
	// 放入记录容器
	$("body").append('<div id="shareLinkStatuscode" style="display:none;"></div>');

	// 状态第一次放入容器
	secondCheck();

	// 页面载入第一次计数
	shareAjaxPost();

	// 每秒监测
	// setInterval("secondCheck()",1000);
	//生成分享的参数
	shareUseridUrl()
});
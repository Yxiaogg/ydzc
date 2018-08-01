$(document).ready(function() {
	Ecms_LoginJS();
});

//加载登录弹窗
function OpenLogin()
{
	$(".Login-dialog-bg").show();
	$(".Login-dialog-1").show(200)
}
function Ecms_Login(sucwindow,suc)
{
	var username=$("input[name='username']").val();
	var password=$("input[name='password']").val();
	$.ajax({
	  type: "post",
	  url: "/extend/ajax-login/enews.php",
	  data:"username="+username+"&password="+password+"&enews=login",
	  dataType: "json",
	  success: function (json)
	  {
			if(json.msgid==0)
			{
				alert(json.msg);
				window.location.href="http://www.m.bjyxfdc.com";
			}
			else
			{
				alert(json.msg);
				window.location.reload();
			}
	  }
	})
}

function Ecms_Logout()
{
	$.ajax({
	  type: "post",
	  url: newsurl+"extend/ajax-login/enews.php",
	  data:"enews=exit",
	  dataType: "json",
	  success: function (json)
	  {
			if(json.msgid==0)
			{
				window.location.href="http://www.m.bjyxfdc.com";
				setTimeout(function(){
					window.location.reload();
				},100)
				
			}
			else
			{
				art.dialog.tips('<div class="artDialogTips">'+json.msg+'</div>', 5);
			}
	  }
	})
}

//注册
function Ecms_Reg(sucwindow,suc)
{
	var data = $(".submit-info").attr("data");
	if(data =="off")
	{
		return;
	}
	var email=$("#JQLoginAndDown_email").val();
	var truename=$("#JQLoginAndDown_truename").val();
	var username=$("#JQLoginAndDown_username").val();
	var password=$("#JQLoginAndDown_password").val();
	var repassword=$("#JQLoginAndDown_repassword").val();
	var department = $("#department").find("option:selected").val();
	var store = $("#store").find("option:selected").val();
	if(!truename.trim())
	{
		$("#JQLoginAndDown_truename").css("border","1px solid red").attr("placeholder","此项不可以为空");
		return;
	}
	var myreg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
	if(!email.trim() || !myreg.test(email) )
	{
		$("#JQLoginAndDown_email").css("border","2px solid red").attr("placeholder","请填写正确的邮箱地址").val("");
		return;
	}
	if(!username.trim())
	{
		$("#JQLoginAndDown_truename").css("border","2px solid red").attr("placeholder","工号必须填写");
		return;
	}
	if( !password.trim()  )
	{
		$("#JQLoginAndDown_password").css("border","2px solid red");
		$("#JQLoginAndDown_password").next("p").html("密码不可以为空").css("color","red");
		return;
	}
	if(  !repassword.trim() )
	{
		$("#JQLoginAndDown_repassword").css("border","2px solid red");
		$("#JQLoginAndDown_repassword").next("p").html("请确认密码").css("color","red");
		return;
	}
	if(password !=repassword)
	{
		$("#JQLoginAndDown_repassword").css("border","2px solid red");
		$("#JQLoginAndDown_repassword").next("p").html("两次输入的密码不一样").css("color","red");
		return;
	}
	var param = $("#userinfoform").serialize();
	$.ajax({
	  type: "post",
	  url: newsurl+"extend/ajax-login/enews.php",
	  //data:"username="+username+"&password="+password+"&repassword="+repassword+"&oicq="+oicq+"&email="+email+"&truename="+truename+"&groupid=1&enews=register",
	  data:param,
	  dataType: "json",
	  beforeSend:function()
	  {
		  var data = $(".submit-info").attr("data","off");
	  },
	  success: function (json)
	  {
		  //alert(json);
			if(json.msgid==0)
			{
				var warning = confirm(json.msg+",点击确定进入个人中心")
				if(warning == true)
				{
					window.location.href=newsurl+"e/member/cp/";
				}
				else
				{
					window.location.reload();
				}
				return;
			}
			if( json.msgid==2)
			{
				//Ecms_LoginJS();
				var warning = confirm(json.msg)
				if(warning == true)
				{
					window.location.href="http://www.bjyxfdc.com";
				}
				else
				{
					window.location.reload();
				}
				return;
			}
			if( json.msgid==1)
			{
				alert(json.msg)
				window.location.reload();
			}
	  }
	})
}

function Ecms_DownSoft(classid,id,path)
{
	$.ajax({
	  type: "get",
	  url: newsurl+"extend/ajax-login/downsoft.php",
	  data:"classid="+classid+"&id="+id+"&pathid="+path+"&enews=login"+"&fresh="+ Math.random(),
	  dataType: "json",
	  success: function (json)
	  {
				art.dialog({
					id:"downsoft",
					width:'660px',
					height:'auto',
					//lock: true,
					content: json.msg,
					yesFn: false,
					noFn: false
				});

	  }
	})
}

//收藏
function Ecms_fava(classid,id,pathid,typeid){
	var url = '';
	$.get(newsurl+'/e/enews/checklogin.php',
		{action: 'islogin',rnd: Math.random()},
		function (msg){
			if (msg == 1){
				if (typeid == 1){
						art.dialog({id: 'loginform'}).close();
						art.dialog({id: 'regform'}).close();
	art.dialog.load(newsurl+'extend/ajax-login/fava.php?classid='+classid+'&id='+id+'', {
    id: 'downsoft',
	//border: false,
	limit:false,
	width:'660px',
	//lock: true,
    yesFn: false
}, true);
				}else if (typeid == 2){
	art.dialog({id: 'down'}).close();
	art.dialog.load(newsurl+'/e/DownSys/DownSoft/fava_ajax.php?classid='+classid+'&id='+id+'&pathid='+pathid+'', {
    id: 'downsoft',
	//border: false,
	limit:false,
	width:'660px',
	//lock: true,
    yesFn: false
}, true);

				}
				if (url != ''){
					window.location.href = url;
				}
			}else{
	art.dialog.load(newsurl+'extend/ajax-login/fava_ajax.php?classid='+classid+'&id='+id+'', {
    id: 'downsoft',
	title: '会员收藏 MemberFava',
	//border: false,
	limit:false,
	width:'660px'//,
	//lock: true
});




			}
		}
	);
}


function Ecms_Login_Form(sucwindow,suc)
{
	art.dialog({id: 'regform'}).close();
	art.dialog({id: 'downsoft'}).close();
	art.dialog({id: 'help'}).close();
	art.dialog.load(newsurl+'extend/ajax-login/template/loginform.php?sucwindow='+sucwindow+'&suc='+suc+"&fresh="+ Math.random(), {
		id:'loginform',
		width:'660px',
		//lock: true,
		title: '会员登陆 MemberLogin',
		yesFn: false
	}, true);
}

function Ecms_Reg_Form(sucwindow,suc)
{
	art.dialog({id: 'loginform'}).close();
	art.dialog({id: 'downsoft'}).close();
	art.dialog({id: 'help'}).close();
	art.dialog.load(newsurl+'extend/ajax-login/template/regform.php?sucwindow='+sucwindow+'&suc='+suc+"&fresh="+ Math.random(), {
		id:'regform',
		width:'660px',
		//lock: true,
		title: '注册',
		yesFn: false
	}, true);
}

function Ecms_LoginJS()
{
	$.ajax({
	  type: "post",
	  url: newsurl+"extend/ajax-login/enews.php",
	  data:"enews=LoginJS",
	  dataType: "json",
	  success: function (json)
	  {
			if(json.login ==1)
			{
				$("#login").html(json.head_Login);
			}
			if(json.login ==2)
			{
				$("#login").html(json.head_Login);
			}
	  }
	})
}

function Ecms_help()
{
	art.dialog({id: 'loginform'}).close();
	art.dialog({id: 'downsoft'}).close();
	art.dialog.load(newsurl+"extend/ajax-login/template/help.php", {
		id:'help',
		width:'660px',
		//lock: true,
		title: '如何下载文档?',
		yesFn: false
	}, true);
}

function Ecms_Down(url)
{

	location.href=url;

}

function Ecms_BuyFen()
{
	location.href=newsurl+"e/member/buygroup//";
}
function  checkSubmit()
{
	return false;
}
//屏蔽错误JS
function ResumeError() {
	return true;
}
window.onerror = ResumeError;
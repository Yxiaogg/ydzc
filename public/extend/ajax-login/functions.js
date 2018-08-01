$(document).ready(function() {
	Ecms_LoginJS();
	$(".close-window").click(function(){
			$(".Login-dialog-bg").hide();
			$(".Login-dialog-1").hide(200)
	})
});

//加载登录弹窗
function OpenLogin()
{
	$(".Login-dialog-bg").show();
	$(".Login-dialog-1").show(200)
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
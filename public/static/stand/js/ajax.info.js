$(document).ready(function() {
	$("#session").change(function(){
		var classid = $(this).attr("data");
		var session = $(this).find("option:selected").val();
		if(session ==0)
		{
			 window.location.reload();
		}
        $.ajax({
            type: "post",
            url: "/extend/ajax-list-info/control.php",
            data: "classid=" + classid + "&session=" + session + "&enews=selectOnLoad",
            dataType: "json",
            success: function(json) {
            	var session = json.session;
            	var headpic = json.headpic
            	var personal =json.personal;
            	document.getElementById("magazine").innerHTML = session;
            	$(".sec-th").html(headpic);
            	$(".sec-tc").html(personal);		
            }
        })
	})

	//点击期数加载数据
	$("#magazine").delegate("li","click",function(){
		var a = $(this).attr("data");
		if(!a)
		{
			return;
		}
		data = a.split(",");
		var classid = data[0];
		var session = data[1];
        $.ajax({
            type: "post",
            url: "/extend/ajax-list-info/control.php",
            data: "classid=" + classid + "&session=" + session + "&enews=ClickOnload",
            dataType: "json",
            success: function(json) {
            	var headpic = json.headpic
            	var personal =json.personal;
            	$(".sec-th").html(headpic);
            	$(".sec-tc").html(personal);
            }
        })
	})
})
//扩展js 
function OnLoadinfo(classid,year)
{
    $.ajax({
        type: "post",
        url: "/extend/ajax-list-info/control.php",
        data: "classid=" + classid + "&year=" + year + "&enews=OnLoadinfo",
        dataType: "html",
        success: function(json) {
        	$("#magazine-wrap").html(json);
        }
    })
}
(function($){
$.fn.Slide = function(options){
var defaults = {
prev_btn: "#pb",// operation btn(prev)
next_btn: "#nb",//operation btn(next)
scroll_Number: 1,//one time scroll numben
big_zone:".img-wrap-list",//all of big img
small_zone:".small-img ul",//all of small img
scrollWidth:"118px",// the width of one small img
query_num:5,//the number of small img nav
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
  $("#magazine li").eq(0).addClass("cur");
  $(".di-slide").Slide();

  $(".sm-ewm").hover(function(){
     $(this).siblings(".show-ewm").show();
  },function(){
     $(this).siblings(".show-ewm").hide();
  });
$(".news-title").delegate("a","click",function(){
	$(this).addClass("year-cur").siblings().removeClass("year-cur");
})
  $("#magazine").delegate("li","click",function(){
     var index=$(this).index();
     $(this).addClass("cur").siblings().removeClass("cur");
     $(".tab-cont-wrap .tab-cont").eq(index).show().siblings().hide();
  });

  $(".sec-th").delegate("li","click",function(){
     var index=$(this).index();
     $(this).addClass("cur").siblings().removeClass("cur");
     $(this).parent().next(".sec-tc").find(".tc-para").eq(index).show().siblings().hide();
  });
  
  $(".career-btn").click(function(){
    var height=$(document).height();
    $(".career-mask").css({"height":height}).show();
    $(".pop-career").show();
    $('html,body').animate({scrollTop:top}, 1000);
  });

   $(".close-pop").click(function(){
    $(".career-mask").hide();
    $(".pop-career").hide();
  });
var i=0;
function slideList(){
   i++;
  if(i==$(".slide-list li").length){
     i=0;
  }
   
    $(".slide-nav a").eq(i).addClass("cur").siblings().removeClass("cur");
    $(".slide-para p").hide().eq(i).fadeIn();
    $(".slide-list li").hide().eq(i).fadeIn();

}
var sl=setInterval(function(){
  slideList(i);
},4000);
   $(".slide-nav a").click(function(){
    clearInterval(sl);
    i=$(this).index()-1;
    slideList();
    sl=setInterval(function(){
  slideList();
},4000);
   })

})
var stand = {
	previewImage: function(file,id,id2){
		var MAXWIDTH  = 260;
    	var MAXHEIGHT = 180;
    	var div = document.getElementById(id2);
      	if (file.files && file.files[0]){
			div.innerHTML ='<img id= "'+id+'" >';
			var img = document.getElementById(id);
			img.onload = function(){
				var rect = stand.clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
				img.width  =  rect.width;
				img.height =  rect.height;
				img.style.marginTop = rect.top+'px';
			}
			var reader = new FileReader();
			reader.onload = function(evt){img.src = evt.target.result;}
			reader.readAsDataURL(file.files[0]);
      	}
      	else {//兼容IE
			var sFilter='filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src="';
			file.select();
			document.getElementById('container').focus();
			var src = document.selection.createRange().text;
			div.innerHTML = '<img id="'+id+'">';
			var img = document.getElementById(id);
			img.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader()";
			img.filters.item('DXImageTransform.Microsoft.AlphaImageLoader').src = src;
			var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
			status =('rect:'+rect.top+','+rect.left+','+rect.width+','+rect.height);
			div.innerHTML = "<div id='"+id+"' style='width:"+rect.width+"px;height:"+rect.height+"px;margin-top:"+rect.top+"px;"+sFilter+src+"\"'></div>";
        }
	},
	clacImgZoomParam: function( maxWidth, maxHeight, width, height ){
	        var param = {top:0, left:0, width:width, height:height};
        if( width>maxWidth || height>maxHeight ){
            rateWidth = width / maxWidth;
            rateHeight = height / maxHeight;
            if( rateWidth > rateHeight ){
                param.width =  maxWidth;
                param.height = Math.round(height / rateWidth);
            }else{
                param.width = Math.round(width / rateHeight);
                param.height = maxHeight;
            }
        }
        param.left = Math.round((maxWidth - param.width) / 2);
        param.top = Math.round((maxHeight - param.height) / 2);
        return param;
    }
}
$(function(){
	$('.personal-center').hover(function(){
		$(this).addClass('mouse_hover')
	},function(){
		$(this).removeClass('mouse_hover')
	})
	$('.mod-pic-w').hover(function(){
		$(this).find('.input-filter').css('display','block')
		$(this).find('.mod-text').css('display','block');
	},function(){
		$(this).find('.input-filter').css('display','none')
		$(this).find('.mod-text').css('display','none');

	})
	$('#upload-img-1').change(function(){
		$("#preview-1").show("slow");
		stand.previewImage(this,"imghead-1",'preview-1')
	})
	$('#upload-img-2').change(function(){
		//stand.previewImage(this,"imghead-2",'preview-2')
		$("#preview-2").show("slow");
	})
	$('.edit.edite-btn').click(function(){
		$('.edite-dialog-bg,.edite-dialog').show();
	})
	$('#btn-submit').click(function(){
		$('.edite-dialog-bg,.edite-dialog').hide();
	})
	$('.close-window').click(function(){
		$('.edite-dialog,.edite-dialog-bg ').hide();
	})/*
		$("#submit_btn").click(function(){
		alert("ok");
	})
	*/
	$("#reset_btn").click(function(){
		setTimeout(function()
		{
			window.location.reload();
		},800)
	})
})


function uploadCallBack(enews,ecms,classid,id){
	if( ecms ==1)
	{
		alert(enews);
		var iframeres = document.getElementById('IframeResume');
		iframeres.src = "/about/resume.php?classid="+classid+"&id="+id;
		setTimeout(function()
		{
			window.location.reload();
		},800)
	}
	if( ecms ==0)
	{
		
		$('.edite-dialog,.edite-dialog-bg ').hide();
		$(".career-mask").hide();
		$(".pop-career").hide();
		alert(enews);
		var iframeres = document.getElementById('IframeResume');
		iframeres.src = "/about/resume.php?classid="+classid+"&id="+id;
		setTimeout(function()
		{
			window.location.reload();
		},800)
	}
	if( ecms ==9)
	{
		alert(enews);
		var iframeres = document.getElementById('IframeResume');
		iframeres.src = "/about/resume.php?classid="+classid+"&id="+id;	
		setTimeout(function()
		{
			window.location.reload();
		},800)
	}
}
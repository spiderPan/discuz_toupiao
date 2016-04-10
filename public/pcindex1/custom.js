$(window).load(function(){
	$('.mblist .pic').imagefit({mode:'outside',halign:'center',valign:'middle',force: false});
});

//反回顶部
var gotop=document.getElementById('rightfixed'),timer=null;
window.onscroll=function(){gotop.style.display=getX()>0?'block':'none';};
gotop.onclick=function(){
	timer=setInterval(goTo,30);
	function goTo(){
		var x=getX()*.8;
		document.documentElement.scrollTop?document.documentElement.scrollTop=x:document.body.scrollTop=x;
		x<1&&clearInterval(timer);
	}
	return false;
}
function getX(){return document.documentElement.scrollTop || document.body.scrollTop}

$(document).ready(function(){
  	$(".wx").hover(function(){
  		$(".ew").fadeToggle("slow");
  		$(".ew").animate({top:'105px'},"slow");
  	},function(){
  		$(".ew").fadeToggle("slow");
  		$(".ew").animate({top:'0px'},"slow");
		//$(".ew").html('没有二维码...看你怎么扫！');
  	});
  	
  	/*playvod();
  	$('#vodclose').click(function(){
		if($("#CuPlayer").is(":visible")){
			$('#vodclose').html('□');
			$('#CuPlayer').html('');
			$("#CuPlayer").slideToggle();
		}else{
			$('#vodclose').html('—');
			playvod();
			$("#CuPlayer").slideToggle();
		}
  	});*/
  	
  	$('.mblist li').each(function(){
		$(this).click(function(){
			var imgurl=$(this).find('img').attr('src');
			var xn=$(this).find('.xm').html();
			var ps=$(this).find('.pn').html();
			var ur=$(this).find('.ur').html();
			var xy=$(this).find('.xy').html();
			var tc=$(this).find('.tc').html();
			var str='';
			if(ur!=''){
				var UrlArr = ur.split(';');
				$.each(UrlArr, function(i,v){
					if(i==0){
						str+="<li class='on' data='"+v+"'>"+i+"</li>";
					}else{
						str+="<li data='"+v+"'>"+i+"</li>";
					}
				});
			}
			$('.ewm .n').html(xn);
			$('.ewm .ps').html(ps);
			$('.ewm .xy').html(xy);
			$('.ewm .tc').html(tc);
			$('.ewm .itemlist').html(str);
			
			$('.ewm .pics img').attr('src',imgurl);
			$('.ewm').slideToggle();
			$('.ewm .pics').imagefit({mode:'inside',halign:'center',valign:'middle',force: true});
			
			$('.ewm .itemlist>li').click(function(){
				$(this).siblings().removeClass('on');
				var imgdataurl=$(this).attr('data');
				$('.ewm .pics img').attr('src',imgdataurl);
				$(this).addClass('on');
				$('.ewm .pics').imagefit({mode:'inside',halign:'center',valign:'middle',force: true});
			});
		});
	});
	$('.ewm .close').click(function(){
		$('.ewm').slideToggle();
	});
	
});
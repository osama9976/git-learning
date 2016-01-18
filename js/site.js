 $(document).ready(function(){
		
		var cdate = new Date();
		$('.copyright:eq(0)').text("جميع الحقوق محفوظة لجامعة القصيم " + cdate.getFullYear() + " ©");
		
	   		 $('.mid_shade-right').PointSlider( {  
			ItemSelector :'.img-item',
			ControlPanel: '.ctr',  
			CreateControlPanel: true,    
			ActiveClass: "current",
		    ticTime :5000,
		    ticDuration : 500,
		    btnNext :'.nxt',
		    btnPrv :'.prv',
		    btnStop :'.stop',
		    effect : 'HSliding',  /*'fadding',*/
		    itemInPage: 1
	   		 });
 
	    /*$('.box').bind('touchstart touchend', function(e) {
	        e.preventDefault();
	        $(this).toggleClass('hover_effect');
	    });*/

		$('.bgslider').PointSlider( {  
			ControlPanel: '.ctr',  
			ItemSelector: 'a',  
			ActiveClass: "current",
			ticTime :3000,
		    ticDuration : 500,
		    ItemSelector :'.img-item',
   			CreateControlPanel: true 
		 });
		  
		 $('.bgslider .ctr').width(12 * ($('.bgslider .ctr a').length-2));    
		 
		 $('.home-page-events .event-title').each(function(){
			var x = $(this).outerHeight();
			var y = $('.home-page-events .event-title').parent().find('.event-date').outerHeight();
			var top = (y-x)/2;
			$(this).css('margin-top',top); 
		});
		
		if($('.userlogin').length > 0)
		{
			$("#ctl00_IdWelcome_ExplicitLogin").click(function (event) {
				event.preventDefault();
				event.stopPropagation();
				var url = $(this).attr('href');
				if(typeof $(".userlogin .login-content iframe").attr('src') == 'undefined')
				{
					$(".userlogin .login-content iframe").attr('src',url);
				}
				$('.userlogin').toggleClass('hide');  
			}); 
		
			$(".userlogin .close").click(function (event) {
				event.preventDefault();
				$('.userlogin').addClass('hide');  
			}); 
		
			$('.userlogin').bind("mouseenter click",function(event){
				event.stopPropagation();
			});
			$('body').bind("mouseenter click",function(event){
				$('.userlogin').addClass("hide");
			});
		}
		
	}); 
    
	function AddFavorite(elem) {
  var url = window.document.URL;
  //var url = "http://www.qu.edu.sa";
  var title = "ÌÇãÚÉ ÇáÞÕíã - " + window.document.title;
	if (window.sidebar) {
		window.sidebar.addPanel(title, url,"");
	} else if( window.external ) {
	    if (window.ActiveXObject) {
		   window.external.AddFavorite( url, title); }//IE
		else {            
            alert('áÇÖÇÝÉ ÇáÕÝÍÉ Åáì ÇáãÝÖáÉ ÇÖÛØ Úáì (Ctrl +D)'); //Google chrome
        }
		} 
	else if (window.opera && window.print) { 
    elem.setAttribute('href',url);
    elem.setAttribute('title',title);
    elem.setAttribute('rel','sidebar');
    elem.click();      
	}
	else { 
        alert('áÇÖÇÝÉ ÇáÕÝÍÉ Åáì ÇáãÝÖáÉ ÇÖÛØ Úáì (Ctrl +D)');//safri
    }
    return false;
}
$(document).ready(function () {
		if( $('#s4-ribbonrow').length < 1)
		{
			$('body #s4-workspace').css('overflow','visible');
		}
	});



/*toooooltip*/
$(document).ready(function() {
  
 $('#nav2list li')
 .mouseleave(function(event){ 	$('div.tooltip').remove();	})
 .mousemove(function(event){
 		var tooltipX = event.pageX; 
 		var w = $('div.tooltip').outerWidth();
		var w2 = parseInt(w/2);
		tooltipX -= w2; 
	    var tooltipY = event.pageY + 8;
	  	$('div.tooltip').css({top: tooltipY, left: tooltipX});
	  	})
 .mouseenter(function(event){ 	  
 	$('div.tooltip').remove();
 	var desc = $(this).text(); 
 	if(desc !== undefined && desc.length > 0) 
 	{
		$('<div class="tooltip">' + desc + '</div>').appendTo('body');  
		$('div.tooltip').show(); 
	}
 });  	
 
	
});
     
     
     
     $(document).ready(function(){
if($('.right-vote input[type=radio]').length < 2)
	$('.right-vote').hide();
});


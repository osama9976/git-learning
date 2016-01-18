		function setCookie(c_name,value,exdays)
		{   
			var exdate=new Date();
			exdate.setDate(exdate.getDate() + exdays);
			var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
			document.cookie=c_name + "=" + c_value;
		}    
		function getCookie(c_name)
		{  
			var i,x,y,ARRcookies=document.cookie.split(";");
			for (i=0;i<ARRcookies.length;i++)
			{
			  x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
			  y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
			  x=x.replace(/^\s+|\s+$/g,"");
			  if (x==c_name)
			    {
			    return unescape(y);
			    }
			  } 
		}  
		 function showLightBox() {
		 	/* document.getElementById('light').style.display='block';
		 	document.getElementById('fade').style.display='block';
		 	document.getElementById('fade').style.height = $(document).height()+"px";
			*/
			$('#light').show();
			$('#fade').show();
			$('#fade').css('height',$(document).height()+'px');
		 	var RightPos = (($(document).width())/2) - ($('#light').width() / 2);
			$('#light').css("right",RightPos);
			/*
	        var center = function () {
	            var T = $(window).height() / 2 - $('#light').height() / 2 + $(window).scrollTop(),
	                L = $(window).width() / 2 - $('#light').width() / 2;
	            $('#light').css({
	                top: T,
	                left: L
	            });
	        };
	        $(window).scroll(center);
	        $(window).resize(center);
	        center();
			*/
	
	    }
		
		function hideLightBox()
		{
			$('#light').hide();
			$('#fade').hide();
		}
		function checkStartDate(_eMinute, _eHour, _egDay, _egMonth, _egYear, _ehDay, _ehMonth, _ehYear)
		{
			var d = new Date();
			var _minute = d.getMinutes();
			var _hour = d.getHours();
			var _day = d.getDate();
			var _month = d.getMonth()+1;
			var _year = d.getFullYear();
			
			var _eDate = 1;
			var _cDate = _minute + (_hour * 60 ) + (_day * 24 * 60) + (_month * 30 * 24 * 60) + (_year * 365 * 30 *24 * 60)
			if(_cDate > 31740984000)
			{
				_eDate = _eMinute + (_eHour * 60 ) + (_egDay * 24 * 60) + (_egMonth * 30 * 24 * 60) + (_egYear * 365 * 30 *24 * 60)
			}
			else
			{
				_eDate = _eMinute + (_eHour * 60 ) + (_ehDay * 24 * 60) + (_ehMonth * 30 * 24 * 60) + (_ehYear * 365 * 30 *24 * 60)
			}

			if(_eDate >= _cDate)
				return true;
			return false;
		}

		function checkEndDate(_eMinute, _eHour, _egDay, _egMonth, _egYear, _ehDay, _ehMonth, _ehYear)
		{
			var d = new Date();
			var _minute = d.getMinutes();
			var _hour = d.getHours();
			var _day = d.getDate();
			var _month = d.getMonth()+1;
			var _year = d.getFullYear();
			
			var _eDate = 1;
			var _cDate = _minute + (_hour * 60 ) + (_day * 24 * 60) + (_month * 30 * 24 * 60) + (_year * 365 * 30 *24 * 60)
			if(_cDate > 31740984000)
			{
				_eDate = _eMinute + (_eHour * 60 ) + (_egDay * 24 * 60) + (_egMonth * 30 * 24 * 60) + (_egYear * 365 * 30 *24 * 60)
			}
			else
			{
				_eDate = _eMinute + (_eHour * 60 ) + (_ehDay * 24 * 60) + (_ehMonth * 30 * 24 * 60) + (_ehYear * 365 * 30 *24 * 60)
			}

			if(_eDate <= _cDate)
				return true;
			return false;
		}
		
	$(document).ready(function () {
   		//return;
   		  
   		//check Start Date 
		// minutes, hour, gDay, gMonth, gYear, hDay, hMonth, hYear
    	var chkDate = checkStartDate(1, 2, 28, 06, 2013, 27, 08, 1434);
		if(chkDate)
			return;

    	//check End Date 
		// minutes, hour, gDay, gMonth, gYear, hDay, hMonth, hYear   (51, 16, 13, 8, 2013, 6, 10, 1434);
    	var chkDate = checkEndDate(1, 14, 05, 08, 2014, 10, 10, 1435);
    	if(chkDate)
			return;
			
    	///////check cookies
    	if(getCookie('register') && getCookie('register') == 'ok')
    		return;
    	var lightWidth = "553px";	
		var ImgSrc = "http://www.qu.edu.sa/PublishingImages/Eid.png";
    	var lightbox = '<div id="fade" style="display:none;width:100%;height:701px;top:0;left:0;opacity:0.4;filter: alpha(opacity = 40);background:#000;position:absolute;z-index:10"></div>	<div id="light" style="width:'+ lightWidth +';display:none;top:130px;opacity:1.;position:fixed;z-index:100"><img id="popUp2Image2" src="'+ ImgSrc +'" /></div>'
		$('body').append(lightbox);
    	
    	var homepageUrl = '.sa/pages/home.aspx';
    	var homepageCurrent = document.location.href;
    	homepageCurrent = homepageCurrent.toLowerCase();
    	if(homepageCurrent.indexOf(homepageUrl) == -1)
    		return;
	   
		showLightBox();
		$('#light').click(function(){
			setCookie('register','ok',1);
			hideLightBox();
		});
		
		//$('#light').append($('<div class="site" style="background:url(/_layouts/images/blank.gif)"><a href="#" style="display:block;height:70px">&nbsp;</a><div>').click(function(){document.location.href = "#"}));
		//$('#light').append($('<div class="info" style="background:url(/_layouts/images/blank.gif)"><a href="http://www.reg.qu.edu.sa/news/Pages/%D9%86%D8%B4%D8%B1%D8%A9-%D8%A7%D9%84%D9%82%D8%A8%D9%88%D9%84.aspx" style="display:block;height:70px">&nbsp;</a><div>').click(function(){document.location.href = "http://www.reg.qu.edu.sa/news/Pages/%D9%86%D8%B4%D8%B1%D8%A9-%D8%A7%D9%84%D9%82%D8%A8%D9%88%D9%84.aspx"}));
		//$('#light').append($('<div class="register" style="background:url(/_layouts/images/blank.gif)"><a href="http://srv.qu.edu.sa/qu/init?service=typeApplicationOnline" style="display:block;height:70px">&nbsp;</a><div>').click(function(){document.location.href = "http://srv.qu.edu.sa/qu/init?service=typeApplicationOnline"}));
		
	});
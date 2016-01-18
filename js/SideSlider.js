//hard coded class 
//ss-slider-wrapper	div contain anchors
//ctr	blank div selector
//current to selcet current img or selector link
	
$.fn.PointSlider = function(options) {  
      
	var defaults = {  
	   ItemSelector: 'a',  
	   ControlPanel: '.ctr',
	   CreateControlPanel: false,    
	   ActiveClass: "current",
	   ticTime :3000,
	   ticDuration : 500,
	   btnNext :'.nxt',
	   btnPrv :'.prv',
	   btnStop :'.stop',
	   nextText:'السابق', 
	   prvText :'التالى',
	   effect : 'HSliding',
	   itemInPage: -1,
	    
	   ticFun : function(){
		    options.step();
		    options.timer = window.setTimeout(options.ticFun, options.ticTime);
		} ,
		step: function(index) {
				var currentIndex = $(options.container).find(options.ControlPanel).find('.points a').index($(options.container.selector +' '+ options.ControlPanel +' .points a.'+ options.ActiveClass));
				var step = 1;
				
				if (index == null || index === '+1') 
			    {
			    	if(currentIndex+1  == $(options.container).find(options.ControlPanel).find('.points a').length)
			    		index = 0;
			    	else
			    		index = currentIndex+ 1;
			   }
			   else if(index == '-1')
			   {
			   		step = -1;
			        if (currentIndex < 1)
			        	index = $(options.container).find(options.ControlPanel).find('.points a').length - 1;
			        else
			        	index = currentIndex - 1;
			   }
			   else
			   {
			   		step = index - currentIndex;
			   }
			    
			    if(options.effect == "HSliding" )
			    {
			    	if (step > 0) 
			    	{
				    		var newLeft = options.itemInPage * options.itemW * step;
		    				$(options.container).find(options.ItemSelector).parent().animate({ left: -1 * newLeft},function(){
				    		for(var i = 1 ; i <= options.itemInPage * step ;i++)
					    	{
								$(options.container).find(options.ItemSelector + ":first-child").appendTo($(options.container).find(options.ItemSelector).parent());
				    		}
							$(options.container).find(options.ItemSelector).parent().css('left',0);
			    		});
					}
					else if (step < 0) 
				   	{
				   		var newLeft = options.itemInPage * options.itemW * step * -1;
				   		for(var i = 1 ; i <= options.itemInPage * step * -1;i++)
				    	{
				    		var item = $(options.container).find(options.ItemSelector + ":last-child").detach();
				    		$(options.container).find(options.ItemSelector).parent().prepend(item);
				    	}
				    	$(options.container).find(options.ItemSelector).parent().css('left', -1 * newLeft);
				    	$(options.container).find(options.ItemSelector).parent().animate({ left: 0  });
				   	}
				   	else
				   	{
				   		return;
				   	}
				    $(options.container).find(options.ControlPanel).find('.points a').removeClass(options.ActiveClass);
				    $(options.container).find(options.ControlPanel +' .points a:eq(' + index + ')').addClass(options.ActiveClass);

			    }
			    else
			    {
				    $(options.container).find(options.ControlPanel).find('.points a').removeClass(options.ActiveClass);
				    $(options.container).find(options.ControlPanel +' .points a:eq(' + index + ')').addClass(options.ActiveClass);
					$(options.container).find(options.ItemSelector).filter('.' + options.ActiveClass).removeClass(options.ActiveClass).animate({ opacity: 0 },{ queue : false , duration: options.ticDuration});
					$(options.container).find(options.ItemSelector).filter(':eq(' + index + ')').addClass(options.ActiveClass).animate({ opacity: 1 },options.ticDuration,function(){
						$(options.container).find(options.ItemSelector).css('z-index',0);$(this).css('z-index',10);
					});			
				}
		} 
	  };  

			var options = $.extend(defaults, options); 
			options.timer = null;
			options.container = $(this);
		    options.ItemCount = $(this).find(options.ItemSelector).length;
			options.itemW = $(this).find(options.ItemSelector).width();
			var containerW = $(this).find(options.ItemSelector).parent().parent().width();
			if(options.itemInPage < 0)
				options.itemInPage = parseInt(containerW / options.itemW);

		    if( options.ItemCount / options.itemInPage <= 1 )
			{
				return;
			}
			$(this).find(options.ControlPanel).html('');
					
			//Create Control panel
			if(options.CreateControlPanel)
				$(this).append('<div class="' + options.ControlPanel.replace('.','') + '"></div>');
				
			$(this).find(options.ControlPanel).append('<div class="' + options.btnPrv.replace('.','') + '"><a href="#">' + options.nextText + '</a></div>');	
			
			$(this).find(options.ControlPanel).append('<div class="points"></div>');
			options.points = $(this).find('.points');
				
		    for(var i= 1; i < (options.ItemCount/options.itemInPage)+1; i++)
		    {
		    	$(options.points).append('<a href="#">' + i + '</a>');
		    }

		    $(this).find(options.ControlPanel).append('<div class="' + options.btnNext.replace('.','') + '"><a href="#">'+ options.prvText +'</a></div>');	
		    
    		//initialize effect
    		
    		if(options.effect == "HSliding")
    		{
				$(this).find(options.ItemSelector).wrapAll('<div class="inner-items" />');
    			$(this).find(options.ItemSelector).parent().width( (options.ItemCount * 100 / options.itemInPage) + '%').css('position','absolute').css('left','0');
				$(this).find(options.ItemSelector).parent().parent().css('overflow','hidden')/*.width("100%")*/.css('position','relative');
				$(this).find(options.ItemSelector).width( (100/options.ItemCount)+'%');
				$(this).find(options.ItemSelector).css('position','relative').css('float','left');
    		}
    		else
    		{
    			$(this).find(options.ItemSelector).css('position','absolute');
		    	$(this).find(options.ItemSelector).css('opacity',0).first().css('opacity',1).css('z-index',10).addClass(options.ActiveClass);
    		}
		    $(this).find(options.ControlPanel).find('.points a').first().addClass(options.ActiveClass);
		    
		    options.timer = window.setTimeout(options.ticFun, options.ticTime);
			
		
		$(this).find(options.ControlPanel).find('.points a').click(function (event) {
				event.preventDefault();
				clearTimeout(options.timer);
				$(options.container).find(options.ItemSelector).find('.'+options.ActiveClass).stop();
				options.timer = window.setTimeout(options.ticFun, options.ticTime);
		        options.step($(this).text()-1);
		});
		 
		 $(this).find(options.ControlPanel).find(options.btnPrv).click(function (event) {
					event.preventDefault();
					var currentIndex = $(options.container).find(options.ControlPanel).find('.points a').index($(options.container.selector + ' ' +options.ControlPanel +' .points a.'+ options.ActiveClass));
					clearTimeout(options.timer);
					$(options.container).find(options.ItemSelector).find('.'+options.ActiveClass).stop();
					options.timer = window.setTimeout(options.ticFun, options.ticTime);
					options.step('-1');
			});
		  
		  $(this).find(options.ControlPanel).find(options.btnNext).click(function (event) {
					event.preventDefault();
					var currentIndex = $(options.container).find(options.ControlPanel).find('.points a').index($(options.container.selector + ' ' + options.ControlPanel +' .points a.'+ options.ActiveClass));
					clearTimeout(options.timer);
					$(options.container).find(options.ItemSelector).find('.'+options.ActiveClass).stop();
					options.timer = window.setTimeout(options.ticFun, options.ticTime);
					options.step('+1');
			});


		    
	    
	};


// ==========================================================================
// Javascript
// ==========================================================================

//Collapse and Restore mobile nav

$('#toggle').click(function() {
          $(this).next('.nav').toggleClass("is-collapsed-mobile");
      });


//Header Text appear

$(".hero__callout").hide().fadeIn(3000);


//Body Text slide in

  //Slide In on scroll
	
	$(window).scroll(function() {
		
		//Determine heights where scroll will activate
	    
	    winHgtAdm = $(window).innerHeight();
	    percentAdm = winHgtAdm - 211.5; //70%  
	    winHgtNews =  $(window).innerHeight() + 1024;
	    percentNews = percentAdm + 380;
	    percentAlumni = percentNews + 410;
	    
	//Funtion for Scroll Animation
	    
	    //Admission Section
	    
	    if ($(window).scrollTop() > percentAdm ) { 
	    	$('#admission').animate({
		    	opacity : 1 , 
		    	left : 0
		    	}, 
		    	{
		    	duration: 1250, 
		    	specialEasing: { 
			    	opacity:'easeInQuint',
			    	left: 'easeOutSine' 
			    	}
		    	}
		    	);
	  	    } 
	  	 
	  	 
	  	 //News Section
	  	   
	  	if ($(window).scrollTop() > percentNews ) { 
	    	$('#news-slide').animate({
		    	opacity : 1 , 
		    	left : 0
		    	}, 
		    	{
		    	duration: 1250, 
		    	specialEasing: { 
			    	opacity:'easeInQuint',
			    	left: 'easeOutSine' 
			    	}
		    	}
		    	);
		}
		
		 //Alumni Section
		
		if ($(window).scrollTop() > percentAlumni ) { 
	    	$('#alumni-spotlight-slide').animate({
		    	opacity : 1 , 
		    	left : 0
		    	}, 
		    	{
		    	duration: 1250, 
		    	specialEasing: { 
			    	opacity:'easeInQuint',
			    	left: 'easeOutSine' 
			    	}
		    	}
		    	);
		}
			
	})
	
//Accordian Menu

$(".accordion__description").hide();

$('.accordion-icon').click(function() {
    if ($(this).hasClass('plus')) {
	    event.preventDefault();	
        $(this).removeClass('plus');
        $(this).addClass('cross');
        $(this).html('&#735;');
        $(this).parent().siblings(".accordion__description").slideDown(500);	      
    } else if($(this).hasClass('cross')){
	    event.preventDefault();	
        $(this).addClass('plus');
        $(this).removeClass('cross');
        $(this).html('&#43;');
        $(this).parent().siblings(".accordion__description").slideUp(500);
    }
    
});





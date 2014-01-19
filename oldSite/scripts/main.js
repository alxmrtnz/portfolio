$(document).ready(function() {

  // get the action filter option item on page load
  var $filterType = $('#filterOptions li.active a').attr('class');
	
  // get and assign the ourHolder element to the
	// $holder varible for use later
  var $holder = $('ul.ourHolder');

  // clone all items within the pre-assigned $holder element
  var $data = $holder.clone();

  // attempt to call Quicksand when a filter option
	// item is clicked
	$('#filterOptions li a').click(function(e) {
		// reset the active class on all the buttons
		$('#filterOptions li').removeClass('active');
		
		// assign the class of the clicked filter option
		// element to our $filterType variable
		var $filterType = $(this).attr('class');
		$(this).parent().addClass('active');
		
		if ($filterType == 'all') {
			// assign all li items to the $filteredData var when
			// the 'All' filter option is clicked
			var $filteredData = $data.find('li');
		} 
		else {
			// find all li elements that have our required $filterType
			// values for the data-type element
			var $filteredData = $data.find('li[data-type=' + $filterType + ']');
		}
		
		// call quicksand and assign transition parameters
		$holder.quicksand($filteredData, {
			duration: 600,
			easing: 'easeInOutQuad'
		},
		function() {
			$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			


			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

		});
		});
		return false;
	});
	

$(document).ready(function(){
        $("a[data-fancybox-group=quicksandGallery]").fancybox({
                'transitionIn'      : 'none',
                'transitionOut'     : 'none',
                'type'              : 'iframe'
            });
            
   });



     
     /* Begin Smoothscroll Script */
   
 
    
    
    
    $(document).ready(function() {

      $('ul.navUL a').smoothScroll();
      $('p.subnav a').click(function(event) {
        event.preventDefault();
        var link = this;
        $.smoothScroll({
          scrollTarget: link.hash
        });
      });

    });
	
	$(document).ready(function() {

      $('a#mustache').smoothScroll();
      $('a#mustache').click(function(event) {
        event.preventDefault();
        var link = this;
        $.smoothScroll({
          scrollTarget: link.hash
        });
      });

    });


  
  /* End Smoothscroll Script */
  
  
  
    /* Begin Quicksand script */
    
	
	
	
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-18689230-4']);
      _gaq.push(['_trackPageview']);
    
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    
    
    $('#source').quicksand( $('#destination li') );
    $('#source').quicksand( $('#destination li'), function() {
        // callback code
    });
    
    $(document).ready(function(){
    $("ul.ourHolder li").hover(
    function() {
    $(this).stop().animate({"opacity": "1"}, "fast");
    },
    function() {
    $(this).stop().animate({"opacity": "1"}, "medium");
    });
    }); 
    
    
    
    /* End Quicksand Script */
   	
		

	/*-- Begin Menu Emphasis Changing Script */
		
		$(function() {
			
			var nav2 = $('#nav2');
			var nav3 = $('#nav3');
			var nav4 = $('#nav4');
			
			
			
			$(window).scroll(function() {
				
				
				
				
				if($(this).scrollTop() >=0 && $(this).scrollTop() <1135 ) {
					nav2.addClass("current");
				}
				else {
					nav2.removeClass("current");
				}
				
				if($(this).scrollTop() >=1135 && $(this).scrollTop() <2135) {
					nav3.addClass("current");
				}
				else {
					nav3.removeClass("current");
				}
				
				if($(this).scrollTop() >=2135) {
					nav4.addClass("current");
				}
				else {
					nav4.removeClass("current");
				}
				
				
				
			});
		});
		
	/*-- End Menu Emphasis Changing Script */
	
	
   /*-- Begin Filter Menu Emphasis Changing Script --*/
			$('ul#filterOptions li a').click(function() {
    			var parent = $(this).parent();
        		siblings = parent.siblings(),
        		isOn = parent.toggleClass('on').hasClass('on');

    			siblings.toggleClass('on', !isOn);
			});
	/*-- Begin Filter Menu Emphasis Changing Script --*/

});
		// *** TO BE CUSTOMISED ***

		var style_cookie_name = "blue" ;
		var style_cookie_duration = 30 ;

		// *** END OF CUSTOMISABLE SECTION ***

		function switch_style ( css_title )
		{
		  var i, link_tag ;
		  for (i = 0, link_tag = document.getElementsByTagName("link") ;
			i < link_tag.length ; i++ ) {
			if ((link_tag[i].rel.indexOf( "stylesheet" ) != -1) &&
			  link_tag[i].title) {
			  link_tag[i].disabled = true ;
			  if (link_tag[i].title == css_title) {
				link_tag[i].disabled = false ;
			  }
			}
			set_cookie( style_cookie_name, css_title,
			  style_cookie_duration );
		  }
		}
		function set_style_from_cookie()
		{
		  var css_title = get_cookie( style_cookie_name );
		  if (css_title.length) {
			switch_style( css_title );
		  }
		}
		function set_cookie ( cookie_name, cookie_value,
			lifespan_in_days, valid_domain )
		{
			var domain_string = valid_domain ?
							   ("; domain=" + valid_domain) : '' ;
			document.cookie = cookie_name +
							   "=" + encodeURIComponent( cookie_value ) +
							   "; max-age=" + 60 * 60 *
							   24 * lifespan_in_days +
							   "; path=/" + domain_string ;
		}
		function get_cookie ( cookie_name )
		{
			var cookie_string = document.cookie ;
			if (cookie_string.length != 0) {
				var cookie_value = cookie_string.match (
								'(^|;)[\s]*' +
								cookie_name +
								'=([^;]*)' );
				return decodeURIComponent ( cookie_value[2] ) ;
			}
			return '' ;
		}


		// *** PrettyGallery ***
		$(document).ready(function(){
			$('.prettyGallery:first').prettyGallery({
				'itemsPerPage':4
			});
		});
		
		
		// *** Navigation Menu ***
		$(document).ready(function(){ 
			$("#nav ul").superfish(); 
		}); 
		
		
		// *** PrettyPhoto ***
		$(document).ready(function(){
			$("a[rel^='prettyPhoto']").prettyPhoto();
		});
		
		// *** tinyNav ***
		jQuery(function($){
			$("#nav").tinyNav();
		});
		
		// *** Twitter Posts Importer ***
		jQuery(function($){
			$(".tweet").tweet({
				username: "envato",
				join_text: "auto",
				avatar_size: 32,
				count: 2,
				auto_join_text_default: '', 
				auto_join_text_ed: '',
				auto_join_text_ing: '',
				auto_join_text_reply: '',
				auto_join_text_url: '',
				loading_text: "loading tweets...",
				template: "{text}{time}",
			});
		});
		
		jQuery(document).ready(function(){

			// jQuery Tab Script
			jQuery(".tab-content").hide(); //Hide all content
			jQuery("ul.tabs li:first").addClass("active").show(); //Activate first tab
			jQuery(".tab-content:first").show(); //Show first tab content
			//On Click Event
			jQuery("ul.tabs li").click(function() {
				jQuery("ul.tabs li").removeClass("active"); //Remove any "active" class
				jQuery(this).addClass("active"); //Add "active" class to selected tab
				jQuery(".tab-content").hide(); //Hide all tab content
				var activeTab = jQuery(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
				jQuery(activeTab).fadeIn(200); //Fade in the active content
				return false;
			});
			
			// jQuery Toggle Script
			jQuery(".toggle_container").hide();
			jQuery("p.trigger").click(function(){
				jQuery(this).toggleClass("active").next().slideToggle("slow");
			});
			
			if (jQuery.browser.msie && jQuery.browser.version < 7) return; // Don't execute code if it's IE6 or below cause it doesn't support it.
				
			jQuery('.ts-display-pf-img').hover(
				function() {
					jQuery(this).find('.rollover').stop().fadeTo(500, 0.60);
				},
				function() {
					jQuery(this).find('.rollover').stop().fadeTo(500, 0);
				}
			);
		});
		
		// jQuery back-top script
		$(document).ready(function(){
			// scroll body to 0px on click
			$('#back-top a').click(function () {
				$('body,html').animate({
					scrollTop: 0
				}, 800);
				return false;
			});
		});
		
		// jQuery testimonials jquery
		$(document).ready(function() {
			$('.testimonials')
			.cycle({
				fx: 'fade', // choose your transition type, ex: fade, scrollUp, scrollRight, shuffle
			 });
		});
		
		$(document).ready(function(){
		  SyntaxHighlighter.all();
		});
		$(window).load(function(){  
		  
		  // Vimeo API nonsense
		  var player = document.getElementById('player_1');
		  $f(player).addEvent('ready', ready);
		  
		  function addEvent(element, eventName, callback) {
			(element.addEventListener) ? element.addEventListener(eventName, callback, false) : element.attachEvent(eventName, callback, false);
		  }
		  
		  function ready(player_id) {
			var froogaloop = $f(player_id);
		  
			froogaloop.addEvent('play', function(data) {
			  $('.flexslider').flexslider("pause");
			});
			
			froogaloop.addEvent('pause', function(data) {
			  $('.flexslider').flexslider("play");
			});
		  }
		
		  
		  // Call fitVid before FlexSlider initializes, so the proper initial height can be retrieved.
		  $(".flexslider")
			.fitVids()
			.flexslider({
			  animation: "slide",
			  useCSS: false,
			  animationLoop: false,
			  smoothHeight: true,
			  start: function(slider){
				$('body').removeClass('loading');
			  },
			  before: function(slider){
				$f(player).api('pause');
			  }
		  });
		});
		
		
		$(document).ready(function() {
        //move he last list item before the first item. The purpose of this is if the user clicks to slide left he will be able to see the last item.
        $('#carousel_ul li:first').before($('#carousel_ul li:last')); 
        
        
			//when user clicks the image for sliding right        
			$('#right_scroll img').click(function(){
			
				//get the width of the items ( i like making the jquery part dynamic, so if you change the width in the css you won't have o change it here too ) '
				var item_width = $('#carousel_ul li').outerWidth() + 10;
				
				//calculae the new left indent of the unordered list
				var left_indent = parseInt($('#carousel_ul').css('left')) - item_width;
				
				//make the sliding effect using jquery's anumate function '
				$('#carousel_ul:not(:animated)').animate({'left' : left_indent},500,function(){    
					
					//get the first list item and put it after the last list item (that's how the infinite effects is made) '
					$('#carousel_ul li:last').after($('#carousel_ul li:first')); 
					
					//and get the left indent to the default -210px
					$('#carousel_ul').css({'left' : '-330px'});
				}); 
			});
			
			//when user clicks the image for sliding left
			$('#left_scroll img').click(function(){
				
				var item_width = $('#carousel_ul li').outerWidth() + 10;
				
				/* same as for sliding right except that it's current left indent + the item width (for the sliding right it's - item_width) */
				var left_indent = parseInt($('#carousel_ul').css('left')) + item_width;
				
				$('#carousel_ul:not(:animated)').animate({'left' : left_indent},500,function(){    
				
				/* when sliding to left we are moving the last item before the first list item */            
				$('#carousel_ul li:first').before($('#carousel_ul li:last')); 
				
				/* and again, when we make that change we are setting the left indent of our unordered list to the default -210px */
				$('#carousel_ul').css({'left' : '-330px'});
				});
				
				
			});
	  });

$(document).ready(function() {
   
  	$('a.page-scroll').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top - 40
            }, 500);
            return false;
          }
        }
      });


    // Show Menu on Book
    $(window).bind('scroll', function() {
        var navHeight = $(window).height() - 500;
        if ($(window).scrollTop() > navHeight) {
            $('.navbar-default').addClass('on');
        } else {
            $('.navbar-default').removeClass('on');
        }
    });

    $('body').scrollspy({ 
        target: '.navbar-default',
        offset: 80
    });
	
	$(".popup").click(function () {
    var $this = $(this);
    var $iframe = $("<iframe>").attr("src", $this.data("link")).css({"width": 400, "height": 300});
    var $title = $("<h1>").text($this.data("title"));
    $("#video-view").html($title).append($iframe);
    $iframe.wrap("<div class='class-video'>");
	});

  	// Portfolio isotope filter
    $(window).load(function() {
        var $container = $('.portfolio-items');
        $container.isotope({
            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
        $('.cat a').click(function() {
            $('.cat .active').removeClass('active');
            $(this).addClass('active');
            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        });

    });
	
	/* Back top
  -----------------------------------------------*/
  $("#toggle").click(function() {

      $(this).toggleClass('on');
	  $('#resize').toggleClass('active');

	 });
  
  $(window).scroll(function() {
			if ( $('#toggle').hasClass('on') ) {
			  $('#toggle').toggleClass('on');
			}
			if ( $('#resize').hasClass('active') ) {
				$('#resize').toggleClass('active');
			}
        if ($(this).scrollTop() > 200) {
        $('.go-top').fadeIn(200);
		$('#toggle').fadeIn(1000);
		
        
        } 
		else {
          $('.go-top').fadeOut(200);
		  $('#toggle').fadeOut(400);
		  if ( $('#toggle').hasClass('on') ) {
			$('#toggle').toggleClass('on');
			$('#resize').toggleClass('active');
			} 
        }
        });

		
        // Animate the scroll to top
      $('.go-top').click(function(event) {
        event.preventDefault();
      $('html, body').animate({scrollTop: 0}, 300);
      })


});



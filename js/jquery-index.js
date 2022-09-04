// JavaScript Document
$('.openBtn').click(function(){
		
		$('#myNav').addClass('openOverlay app-custom-animation');
		$('body').addClass('apply-to-body');
		
	});
	$('.closeBtn').click(function(){
		
		$('#myNav').addClass('animated flipOutX');
		$('body').removeClass('apply-to-body');
		
		setTimeout(function(){
		 $('#myNav').removeClass('openOverlay animated jello flipOutX');
			
		}, 1000);
		
	});
	$('.overlay_content').click(function(){
		$('#myNav').addClass('animated flipOutX');
		$('body').removeClass('apply-to-body');
		 $('#myNav').removeClass('openOverlay animated jello flipOutX');
		
		
	});
      $(document).ready(function() {

          $("#projects-img-slider").owlCarousel({

              autoPlay: 4000, //Set AutoPlay to 4 seconds

              items : 2,
              itemsDesktop : [1199,2],
              itemsDesktopBig : [1199,1]

          });

          $(".close-img").click(function(){
              $(".mobile-menu").fadeOut();
          });

          $(".nav-btn").click(function(){
              $(".mobile-menu").fadeIn();
          });

          $(".row.gallery img").hover(function(){
              var src = $(this).attr('src');
              $(this).closest(".gallery").siblings(".banner").find("img").attr("src", src);
          });
          $(".row.gallery img").click(function(){
              var src = $(this).attr('src');
              $(this).closest(".gallery").siblings(".banner").find("img").attr("src", src);
          });

          $(window).scroll(function () {
               $('header').addClass('posi');
              
          });

          $(".menu-item").click(function() {
              var offset = 5; //Offset of 20px
              var link = $(this).find("a").attr("data-href");
              $(".mobile-menu").fadeOut();
              $('html, body').animate({
                  scrollTop: $(link).offset().top + offset
              }, 1000);
          });
      });
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments);},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m);
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-88002042-1', 'auto');
        ga('send', 'pageview');
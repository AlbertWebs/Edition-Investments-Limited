<!DOCTYPE html>
<html lang="">
<?php $SiteSettings = DB::table('sitesettings')->get();?>
@foreach($SiteSettings as $Settings)
    <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		{!!html_entity_decode($SEO)!!}

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('theme/css/bootstrap.min.css')}}">
		<!-- Font -->
		<link rel="stylesheet" href="{{asset('theme/css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('theme/css/elegant-font.css')}}">
		<link rel="stylesheet" href="{{asset('theme/css/linearicons.css')}}">
		<!-- REVOLUTION STYLE SHEETS -->
		<link rel="stylesheet" type="text/css" href="{{asset('theme/revolution/css/settings.css')}}">
		<!-- REVOLUTION LAYERS STYLES -->
		<link rel="stylesheet" type="text/css" href="{{asset('theme/revolution/css/layers.css')}}">
		<!-- REVOLUTION NAVIGATION STYLES -->
		<link rel="stylesheet" type="text/css" href="{{asset('theme/revolution/css/navigation.css')}}">
		<!-- OWL CAROUSEL
	  	================================================== -->
	  	<link rel="stylesheet" href="{{asset('theme/css/owl.carousel.css')}}">
	  	<!-- SCROLL BAR MOBILE MENU
  		================================================== -->
          <link rel="stylesheet" href="{{asset('theme/css/jquery.mCustomScrollbar.css')}}" />

        <link href="{{asset('theme/vendors/owl-carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
        <!-- Owlcarousel CSS-->
    	<link rel="stylesheet" type="text/css" href="{{asset('theme/vendors/owl_carousel/owl.carousel.css')}}" media="all">

		<!-- Main Style -->
		<link rel="stylesheet" href="{{asset('theme/style.css')}}">

		<!-- Headline  -->
		<!-- <link rel="stylesheet" href="headline/css/reset.css">  -->
		<link rel="stylesheet" href="{{asset('theme/headline/css/style.css')}}">


		<script src="{{asset('theme/headline/js/modernizr.js')}}"></script>

		  <!-- Headline -->
		<!-- Favicons
		  ================================================== -->

		  @include('favicon')
		  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
		  <style>
			body {
				font-family: 'Montserrat';
			}
			</style>

			<!-- google tag -->
			<!-- Global site tag (gtag.js) - Google Analytics -->
			<script async src="https://www.googletagmanager.com/gtag/js?id=UA-162810531-1">
			</script>
			<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-162810531-1');
			</script>
			<!-- google tag -->
			<!-- Global site tag (gtag.js) - Google Analytics -->
			<script async src="https://www.googletagmanager.com/gtag/js?id=UA-162810531-2"></script>
			<script>
			  window.dataLayer = window.dataLayer || [];
			  function gtag(){dataLayer.push(arguments);}
			  gtag('js', new Date());

			  gtag('config', 'UA-162810531-2');
			</script>
			{{--  --}}
			<link href="{{asset('lightGallery/dist/css/lightgallery.css')}}" rel="stylesheet">
			{{-- <style type="text/css">
				body{
					background-color: #152836
				}
				.demo-gallery > ul {
				  margin-bottom: 0;
				}
				.demo-gallery > ul > li {
					float: left;
					margin-bottom: 15px;
					margin-right: 20px;
					width: 200px;
				}
				.demo-gallery > ul > li a {
				  border: 3px solid #FFF;
				  border-radius: 3px;
				  display: block;
				  overflow: hidden;
				  position: relative;
				  float: left;
				}
				.demo-gallery > ul > li a > img {
				  -webkit-transition: -webkit-transform 0.15s ease 0s;
				  -moz-transition: -moz-transform 0.15s ease 0s;
				  -o-transition: -o-transform 0.15s ease 0s;
				  transition: transform 0.15s ease 0s;
				  -webkit-transform: scale3d(1, 1, 1);
				  transform: scale3d(1, 1, 1);
				  height: 100%;
				  width: 100%;
				}
				.demo-gallery > ul > li a:hover > img {
				  -webkit-transform: scale3d(1.1, 1.1, 1.1);
				  transform: scale3d(1.1, 1.1, 1.1);
				}
				.demo-gallery > ul > li a:hover .demo-gallery-poster > img {
				  opacity: 1;
				}
				.demo-gallery > ul > li a .demo-gallery-poster {
				  background-color: rgba(0, 0, 0, 0.1);
				  bottom: 0;
				  left: 0;
				  position: absolute;
				  right: 0;
				  top: 0;
				  -webkit-transition: background-color 0.15s ease 0s;
				  -o-transition: background-color 0.15s ease 0s;
				  transition: background-color 0.15s ease 0s;
				}
				.demo-gallery > ul > li a .demo-gallery-poster > img {
				  left: 50%;
				  margin-left: -10px;
				  margin-top: -10px;
				  opacity: 0;
				  position: absolute;
				  top: 50%;
				  -webkit-transition: opacity 0.3s ease 0s;
				  -o-transition: opacity 0.3s ease 0s;
				  transition: opacity 0.3s ease 0s;
				}
				.demo-gallery > ul > li a:hover .demo-gallery-poster {
				  background-color: rgba(0, 0, 0, 0.5);
				}
				.demo-gallery .justified-gallery > a > img {
				  -webkit-transition: -webkit-transform 0.15s ease 0s;
				  -moz-transition: -moz-transform 0.15s ease 0s;
				  -o-transition: -o-transform 0.15s ease 0s;
				  transition: transform 0.15s ease 0s;
				  -webkit-transform: scale3d(1, 1, 1);
				  transform: scale3d(1, 1, 1);
				  height: 100%;
				  width: 100%;
				}
				.demo-gallery .justified-gallery > a:hover > img {
				  -webkit-transform: scale3d(1.1, 1.1, 1.1);
				  transform: scale3d(1.1, 1.1, 1.1);
				}
				.demo-gallery .justified-gallery > a:hover .demo-gallery-poster > img {
				  opacity: 1;
				}
				.demo-gallery .justified-gallery > a .demo-gallery-poster {
				  background-color: rgba(0, 0, 0, 0.1);
				  bottom: 0;
				  left: 0;
				  position: absolute;
				  right: 0;
				  top: 0;
				  -webkit-transition: background-color 0.15s ease 0s;
				  -o-transition: background-color 0.15s ease 0s;
				  transition: background-color 0.15s ease 0s;
				}
				.demo-gallery .justified-gallery > a .demo-gallery-poster > img {
				  left: 50%;
				  margin-left: -10px;
				  margin-top: -10px;
				  opacity: 0;
				  position: absolute;
				  top: 50%;
				  -webkit-transition: opacity 0.3s ease 0s;
				  -o-transition: opacity 0.3s ease 0s;
				  transition: opacity 0.3s ease 0s;
				}
				.demo-gallery .justified-gallery > a:hover .demo-gallery-poster {
				  background-color: rgba(0, 0, 0, 0.5);
				}
				.demo-gallery .video .demo-gallery-poster img {
				  height: 48px;
				  margin-left: -24px;
				  margin-top: -24px;
				  opacity: 0.8;
				  width: 48px;
				}
				.demo-gallery.dark > ul > li a {
				  border: 3px solid #04070a;
				}
				.home .demo-gallery {
				  padding-bottom: 80px;
				}
			</style> --}}
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

	</head>
	<body class="mainbody">
	<!-- <main> -->

		@include('front.mobile')
		<!-- End Mobile Menu -->
		<div class="modal fade modal-search" id="myModal" tabindex="-1" role="dialog"   aria-hidden="true">
		  	<button type="button" class="close" data-dismiss="modal">×</button>
		  	<div class="modal-dialog myModal-search">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body">
                    <form role="search" method="get" class="search-form"  >
                        <input class="search-field" placeholder="Search Service" value="" title="" type="search">
                        <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
          </div>
		</div>
		<!-- End Modal Search-->
	    <div id="page">
	    	<div id="skrollr-body">
	    		<div class="topbar">
	    			<div class="container">
						<div class="row">
							<div class="col-md-6">

							</div>

						</div>
	    			</div>
	    		</div>
		    	<!-- End top Bar -->
				    @include('front.header')
					<!-- End  Header -->

					<!-- Page Content -->
                      @yield('content')
					<!-- Page Content -->



				@include('front.footer')


				<section class="copyright">
					<p><span class="left">THE <a href="{{url('/copyright')}}">{{$Settings->sitename}}</a> © <?php echo date('Y') ?> All rights reserved.</span> <span class="right"> <a href="{{url('/terms-and-conditions')}}">Terms of Service</a> and <a href="{{url('/privacy-policy')}}">Privacy Policy</a></span></p>
				</section>
			</div>
		</div>
		<!-- End page -->

		<a id="to-the-top"><i class="fa fa-angle-up"></i></a>
		<!-- Back To Top -->
	<!-- SCRIPT -->
    <script src="{{asset('theme/js/vendor/jquery.min.js')}}"></script>
    <script src="{{asset('theme/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('theme/js/plugins/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('theme/js/plugins/wow.min.js')}}"></script>
    <script src="{{asset('theme/js/plugins/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('theme/js/plugins/skrollr.min.js')}}"></script>

    <!-- Switcher
    ================================================== -->
    <script src="{{asset('theme/switcher/demo.js')}}"></script>

	<!-- REVOLUTION JS FILES -->
	<script type="text/javascript" src="{{asset('theme/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('theme/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

	<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
		(Load Extensions only on Local File Systems !
		The following part can be removed on Server for On Demand Loading) -->
	<script type="text/javascript" src="{{asset('theme/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('theme/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('theme/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('theme/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('theme/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('theme/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('theme/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('theme/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('theme/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
	<!-- Intializing Slider-->
	<script type="text/javascript" src="{{asset('theme/js/plugins/slider.js')}}"></script>

	 <!-- Mobile Menu
    ================================================== -->
     <script src="{{asset('theme/js/plugins/jquery.mobile-menu.js')}}"></script>

	  <!-- Initializing the isotope
    ================================================== -->
    <script src="{{asset('theme/js/plugins/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('theme/js/plugins/custom-isotope.js')}}"></script>
    <!-- Initializing Owl Carousel
    ================================================== -->
    <script src="{{asset('theme/js/plugins/owl.carousel.js')}}"></script>
    <script src="{{asset('theme/js/plugins/custom-owl.js')}}"></script>
    <!-- Initializing Counter Up
    ================================================== -->
 	<script src="{{asset('theme/js/plugins/jquery.counterup.min.js')}}"></script>
    <!-- PreLoad
    ================================================== -->
    {{-- <script type="text/javascript" src="{{asset('theme/js/plugins/royal_preloader.min.js')}}"></script>
	<script type="text/javascript">
		(function($) { "use strict";
					Royal_Preloader.config({
						mode:           'text', // 'number', "text" or "logo"
						text: 'The Edition Investments Limited',
						timeout:       1,
						showInfo:       false,
						opacity:        1,
						background:     ['#FFFFFF']
					});
		})(jQuery);

	</script> --}}

	<script>
		$(window).load(function(){
			$('.mainbody').show();
			$(".mainbody").css("visibility","visible");
			$('.preloader').fadeOut(500);
		});
	</script>

 	<!-- Global Js
    ================================================== -->
    <script src="{{asset('theme/js/plugins/custom.js')}}"></script>
	<script src="{{asset('theme/js/plugins/custom-h4.js')}}"></script>
    <script src="{{asset('theme/headline/js/main.js')}}"></script> <!-- Resource jQuery -->

    <script src="{{asset('theme/vendors/owl_carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('theme/js/theme.js')}}"></script>
	<!-- hide widget -->
     <script>
	     $("#button2").click(function(){
			// $("#widget1").hide();
			// $("#widget1").css("visibility", "hidden");
			// $("#widget1").css({opacity: 1.0, visibility: "hidden"}).animate({opacity: 0.5}, 5000);
			$("#widget1").animate({opacity: 0.0}, 1000, function(){
				$("#"+widget1).css("visibility","hidden");
			});

		})
	 </script>
	<!-- hide widget -->

	{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> --}}
	<!-- Submit comment -->
    <script type="text/javascript">
	   //
	   $(document).ready(function(){


		});
	   // this is the id of the form
		$("#commentform").submit(function(e) {
			$("#commentbtn").html('Working...')
			e.preventDefault(); // avoid to execute the actual submit of the form.

			var form = $(this);
			var url = form.attr('action');

			$.ajax({
				type: "POST",
				url: url,
				data: form.serialize(), // serializes the form's elements.
				success: function(data)
				{
					// Show success
					$("#alert-success").show();
					// clear Form
					$('#commentform')[0].reset();
					// return message
					$("#alert-success").html(data)
					$("#commentbtn").html('Subnit')



					$("#alert-success").animate({opacity: 0.0}, 5000, function(){
						 $("#"+alert-success).css("visibility","hidden");
					 });


				}
				});


		});
	</script>
	<!-- </Submit comment -->

	{{-- Get Quote --}}

	<script type="text/javascript">
		// this is the id of the form
		 $("#quote-form").submit(function(e) {
			 $("#quoteBtn").html('Sending...')
			 e.preventDefault(); // avoid to execute the actual submit of the form.

			 var form = $(this);
			 var url = form.attr('action');

			 $.ajax({
				 type: "POST",
				 url: url,
				 data: form.serialize(), // serializes the form's elements.
				 success: function(data)
				 {
					 // Show success
					 $("#alert-success").show();
					 // clear Form
					 $('#quote-form')[0].reset();
					 // return message
					 $("#alert-success").html(data)
					 $("#quoteBtn").html('Submit')

					 $("#widget1").animate({opacity: 0.0}, 5000, function(){
						$("#"+widget1).css("visibility","hidden");
					});

				 }
				 });


		 });
	 </script>
	{{-- Get Quote --}}
		{{-- Subscribe --}}

		<script type="text/javascript">
			// this is the id of the form
			 $(".newsletter-form").submit(function(e) {
				 $("#subscribe-btn").html('Sending...')
				 e.preventDefault(); // avoid to execute the actual submit of the form.

				 var form = $(this);
				 var url = form.attr('action');

				 $.ajax({
					 type: "POST",
					 url: url,
					 data: form.serialize(), // serializes the form's elements.
					 success: function(data)
					 {
						 // Show success
						 $("#alert-subscriber").show();
						 // clear Form
						 $('.newsletter-form')[0].reset();
						 // return message
						 $("#alert-subscriber").html(data)

						 $("#subscribe-btn").html('Subscribe')

						 $("#alert-subscriber").animate({opacity: 0.0}, 3000, function(){
							$("#"+widget1).css("visibility","hidden");
						});

					 }
					 });


			 });
		 </script>
		{{-- Get Quote --}}

		{{-- Schema --}}
		<script type='application/ld+json'>
			{
			  "@context": "http://www.schema.org",
			  "@type": "ProfessionalService",
			  "name": "Edition Investments Limited",
			  "url": "https://editioninvestments.com",
			  "logo": "https://editioninvestments.com/uploads/logo/Edition%201-01.png",
			  "sameAs": [
				"https://web.facebook.com/EditioninvestmentKenya",
				"https://www.instagram.com/editioninvestments_ke",
				"https://www.linkedin.com/company/the-edition-investments-limited",
				"https://twitter.com/EditionInteriors_ke",
				"https://www.youtube.com/channel/UCdorJ8vefWJxSOSNXVWOSbg"
			  ],
			  "priceRange": "$$$$",
			  "image": "https://editioninvestments.com/uploads/logo/Edition%201-01.png",
			  "description": "Edition Investments | premier supplier of quality wood based building.",
			  "address": {
				 "@type": "PostalAddress",
				 "streetAddress": "23 Bamburi Rd, Nairobi",
				 "addressLocality": "Nairobi",
				 "addressRegion": "Kenya",
				 "postalCode": "00100",
				 "addressCountry": "Kenya"
			  },
			   "openingHours": "Mo 01:00-01:00 Tu 01:00-01:00 We 01:00-01:00 Th 01:00-01:00 Fr 01:00-01:00 Sa 01:00-01:00 Su 01:00-01:00",
			   "telephone": "0722 626626"
			}
		</script>
		{{-- Schema --}}
		<script type="text/javascript">
			$(document).ready(function(){
				$('#lightgallery').lightGallery();
			});
		</script>
		<script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
        <script src="{{asset('lightGallery/dist/js/lightgallery-all.min.js')}}"></script>
        <script src="{{asset('lightGallery/lib/jquery.mousewheel.min.js')}}"></script>
		{{-- Master Submit Form --}}

		<script>

			$("#contact").submit(function(e) {
				e.preventDefault(); // prevent actual form submit
				$("#Loading").html("Working...");
				var form = $(this);
				var url = form.attr('action'); //get submit url [replace url here if desired]
				$.ajax({
					type: "POST",
					url: url,
					data: form.serialize(), // serializes form input
					success: function(data){
						console.log(data);
						$("#Loading").html("Done!");
						$('#name').val('');
						$('#email').val('');
						$('#phone').val('');
						$('#yourEmail').val('');
						$('#textarea').val('');
						// Refresh
						// setTimeout(function() {
						// 	location.reload();
						// }, 1000);
						// Success
					}
				});
			});
		</script>
		{{-- Master Submit Form --}}
		{{--  --}}
	<!-- </main> -->
	</body>

@endforeach
</html>

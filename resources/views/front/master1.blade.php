<!DOCTYPE html>
<html lang="">
<?php $SiteSettings = DB::table('sitesettings')->get();?>

@foreach($SiteSettings as $Settings)

    <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Edition Investments | Interior Design Company In Kenya</title>

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
		<!-- color scheme -->
	  	<link rel="stylesheet" href="{{asset('theme/switcher/demo.css')}}" type="text/css">
		<link rel="stylesheet" href="{{asset('theme/switcher/colors/yellow.css')}}" type="text/css" id="colors">   
		  <!-- Headline  -->
		  <!-- <link rel="stylesheet" href="headline/css/reset.css')}}">  -->
			<link rel="stylesheet" href="{{asset('theme/headline/css/style.css')}}">
			<script src="{{asset('theme/headline/js/modernizr.js')}}"></script>
				
		  <!-- Headline -->
		<!-- Favicons
		  ================================================== -->
	  	<link rel="shortcut icon" href="favicon.png">
	</head>
	<body>

		<div class="mobile-menu-first">
	        	<div id="mobile-menu" class="mobile-menu">
	        		<div class="header-mobile-menu">
	                  <a href="#">TOLL FREE: +254723014032</a>
	                  	<div class="mm-toggle">
	                		<span aria-hidden="true" class="icon_close"></span>
	                	</div> 
	              	</div> <!-- Mobile Menu -->
	          		<div class="mCustomScrollbar light" data-mcs-theme="minimal-dark">
	              
	                    <ul>

							<!--  -->
							<li><a href="index.php"><span class="active">Home</span></a>
		                           
							</li>
							<li class="has-sub"><a href="#"><span>About Us</span></a>
								  
							</li>
							<li class="has-sub"><a href="#"><span>Services</span></a>
							   
							</li>
							<li><a href="#"><span>Projects</span></a>
								<ul>
									 <li><a href="#">Project One</a></li>
									 <li><a href="#">Project Two</a></li>
									 <li><a href="#">Project Three</a></li>
									 <li><a href="#">Portfolio Four</a></li>
					
								 </ul>
							 </li>
							
							<li ><a href="#"><span>News & Blog</span></a>
								 
							</li>
							
						
							 
							<li><a href="#"><span>Contact Us</span></a>
							
							</li>
							
	              		</ul>
	              <div class="footer-mobile-menu">
	                  <ul class="social">
	                      <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
	                      <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
	                      <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
	                      <li class="youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
	                      <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
	                  </ul>

	                  <ul class="address-footer-mobile">
	                    <li><p> 8th floor, 379 Kimathi St, Nairobi, NBI 101018</p></li>
	                    <li><p>+254723014032 </p></li>
	                    <li><p> contact@designekta.com</p></li>
	                    
	                  </ul>
	              </div>
	          		</div> <!-- /#rmm   -->
	        	</div>
	    </div><!-- End Mobile Menu -->

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
	    		<div class="topbar topbar-dark">
	    			<div class="container">
	    			<div class="row">
	    				<div class="col-md-12">
	    					<p class="text-cap hidden-xs">TOLL FREE: 800 345 6889</p>
		    				<p class="text-cap">E-mail: contact@arc.com</p>
		    				<div class="language">
		    					<a href="#" class="active">EN</a>
		    					<a href="#">FR</a>
		    					<a href="#">PT</a>
		    				</div>
	    				</div>
	    			</div>
	    			</div>
	    		</div>
		    	<!-- End top Bar -->
					<header id="mainmenu" class="header-v2 header-v4 header-border header-fix header-bg-white " data-0="padding:10px;padding-left:40px;padding-right:40px;" data-251="padding:10px; padding-left:40px;padding-right:40px;top:0;">
					<div id="info" class="topbar topbar-position topbar-dark hide-topbar" data-0="height:30px" data-251="height:0;">
			    		<div class="container">
			    			<div class="row">
			    				<div class="col-md-12">
									<p class="text-cap hidden-xs">TOLL FREE: 800 345 6889</p>
				    				<p class="text-cap">E-mail: contact@arc.com</p>
				    				<div class="language">
				    					<a href="#" class="active">EN</a>
				    					<a href="#">FR</a>
				    					<a href="#">PT</a>
				    				</div>
								</div>
			    			</div>
			    		</div>
			    	</div>
					<div class="container">
						<div class="left-header">
							<ul class="navi-level-1">
								<li><a href="index.php" class="logo"><img src="{{asset('theme/images/Header/logo.png')}}" class="img-responsive" alt="High Res Logo"></a></li>
							</ul>
						</div><!-- End Left Header -->
						<nav>
							<ul id="main-navi" class="navi-level-1 hover-style-2 main-navi">
		                        <li class="has-sub"><a href="index.php"><span style="color:#f15825" class="active">Home</span></a>
		                           
								</li>
								
		                        <li class="has-sub"><a href="#"><span>About Us</span></a>
		                              
		                        </li>
		                        <li class="has-sub"><a href="#"><span>Services</span></a>
		                           
		                        </li>
		                       	<li class="has-sub"><a href="#"><span>Portfolio </span></a>
		                       	
		                       	</li>
		                        
		                        <li class="has-sub"><a href="#"><span>News & Blog</span></a>
		                             
                                </li>
                                
                            
		                     	
		                        <li class="has-sub"><a href="#"><span>Contact Us</span></a>
		                        
		                        </li>

	               		 	</ul>
	               		 	
						</nav><!-- End Nav -->
						<!--  -->
						<div class="right-header hide-mobile-menu">
							<ul class="navi-level-1 sub-navi seperator-horizonal-line hover-style-4">	
								<!-- <li><a href="#"><span aria-hidden="true" class="icon_bag_alt"></span>
									</a>
								</li>	 -->
								 <li>
									<a  href="#" data-toggle="modal" data-target="#myModal" id="btn-search" class="reset-btn btn-in-navi"><span aria-hidden="true" class="icon_search"></span></a>
								</li>
								<li>
									<a href="#/"  class="mm-toggle">
										<span aria-hidden="true" class="icon_menu"></span>
									</a> 
								</li>
							</ul>

						</div><!-- End Right Header -->
						<!--  -->
						
					</div>
					</header> 
				<!-- End  Header -->

                <!-- Page Content -->
                    <section style="background-image: url('{{asset('theme/images/Slider/h4-2.jpg')}}'); " class="hero-now">
                    <!--  -->
                        <!-- BEGIN: SEARCH SECTION -->
                        <div class="row">
                            <div class="container">
                                <div class="col-md-8 col-sm-6 text-center">
                                    <div>
                                        <div class="hotel-tagline  cd-intro">
                                            
                                            <h1 class="cd-headline letters type">
                                                    <span>Inspiring <br> and <br></span> 
                                                    <span class="cd-words-wrapper waiting">
                                                    <b class="is-visible">Warm Interiors</b>
                                                    <b class="is-visible">Elegant Interiors</b>
                                                    <b>Awesome Interiors</b>
                                                </span>
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4 col-sm-6">
                                    <div class="room-check">
                                        <h4 class="">GET A QUOTE</h4>
                                        <div class="room-check-body">
                                            <form >
                                                
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                                                    <input style="border-left-style: hidden;" type="text" id="check_in" name="name" class="form-control" placeholder="Your Name" required>
                                                    
                                                </div>

                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-mobile fa-fw"></i></span>
                                                    <input style="border-left-style: hidden;" type="text" id="check_in" name="phone" class="form-control" placeholder="Your Phone" required>
                                                    
                                                </div>

                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span>
                                                    <input style="border-left-style: hidden;" type="text" id="check_in" name="name" class="form-control" placeholder="Your e-mail" required>
                                                    
                                                </div>

                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-home fa-fw"></i></span>
                                                    <input style="border-left-style: hidden;" type="text" id="check_in" name="name" class="form-control" placeholder="Your Name" required>
                                                    
                                                </div>

                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-wrench fa-fw"></i></span>
                                                    <input style="border-left-style: hidden;" type="text" id="check_in" name="name" class="form-control" placeholder="Your Name" required>
                                                    
                                                </div>

                                                <div class="input-group">
                                                    <span  class="input-group-addon"><i class="fa fa-comment fa-fw"></i></span>
                                                    <textarea id="check_in" name="meaage" class="form-control" placeholder="Your Message" required></textarea>
                                                    
                                                </div>
                                                
                                            
                                                
                                                <div class="text-caenter">
                                                    <button type="submit">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: SEARCH SECTION -->
                        <!--  -->
                    </section>
                    <!-- End Section Slider -->

                        
                    
                    <!-- About -->
                    <section class="service padding">
                        <div class="container">
                            <div class="service-wrap">
                                <div class="col-md-4 col-sm-6 col-lg-4">

                                    <div class="service__item-1 service__intro" style="background-image: url('{{asset('theme/img/service-01.jpg')}}');">
                                        <div class="service__item-inner">
                                            <div class="room-checks">
                                            <h4 class="">GET TO KNOW US</h4>
                                            </div>
                                            <p>
                                            Some text goes here, Some text goes here Some text goes here Some text goes here Some text goes here Some text goes here Some text goes here Some text goes here Some text goes here<br>
                                            Some text goes here<br>Some text goes hereSome text goes hereSome text goes hereSome text goes here
                                            <br> Ut enim ad minim veniam, quis nostrud exercitat ullamco laboris nisi ut aliquip ex ea com consequat realzonal.
                                            </p>
                                            <div>
                                            <a href="about-us#" class="au-btn au-btn--big au-btn--pill au-btn--white au-btn--border au-btn--big">Read More</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                
                                <div class="col-md-4 col-sm-6 col-lg-4" style="padding-top:100px;">

                                    <!--  -->
                                    <div class="overlay-container">
                                        <img class="about-img" src="{{asset('theme/img/foto-pattern-desert-oak-swing06.jpg')}}" alt="#">
                                        <div class="content-container">
                                            <div class="room-checks-1">
                                            <h4 class="">Our Mision</h4>
                                            </div>
                                            <p>A small Vision text goes here, Here and Here, the mission statement here here here here</p>
                                            
                                        </div>
                                    </div> 
                                    <!--  -->
                                    <!--  -->
                                    <div class="about-btn-container">
                                    <center><a href="about-us#" class="au-btn-2 au-btn--big au-btn--pill au-btn--white au-btn--border au-btn--big">Read More</a></center>
                                    </div>
                                    <!--  -->

                                </div>

                                <div class="col-md-4 col-sm-6 col-lg-4" style="padding-top:100px;">

                                    <!--  -->
                                    <div class="overlay-container">
                                        <img class="about-img" src="{{asset('theme/img/rustic-front-door-with-tiny-panes.jpg')}}" alt="#">
                                        <div class="content-container">
                                            <div class="room-checks-1">
                                            <h4 class="">Our Mision</h4>
                                            </div>
                                            <p>A small Vision text goes here, Here and Here, the mission statement here here here here</p>
                                            
                                        </div>
                                    </div> 
                                    <!--  -->
                                    <!--  -->
                                    <div class="about-btn-container">
                                    <center><a href="about-us#" class="au-btn-2 au-btn--big au-btn--pill au-btn--white au-btn--border au-btn--big">Read More</a></center>
                                    </div>
                                    <!--  -->

                                </div>




                            </div>
                        </div>
                    </section>
                    <!-- </About> -->

                    <!-- Services -->

					<!-- breadcrumbs --> 
					<section>
						<div class="sub-header sub-header-1 sub-header-portfolio-grid-1 fake-position">
							<div class="services-now">
								<h3>Product And Services</h3>
							</div>
						</div>
					</section>
					<!-- breadcrumbs -->
					<section class="padding-2">
						<div class="container">
							<div class="row">
								<!-- Page Content -->
								<div class="col-md-4 col-sm-6 col-lg-2 theServiceImage" >
									<div class="icon-holder">
									<img class="icon-img" src="{{asset('theme/img/icon.png')}}" alt="#">
									</div>
									
									<div class="overlay-container-services">
										<img class="about-img-services" src="{{asset('theme/img/rustic-front-door-with-tiny-panes.jpg')}}" alt="#">
										<div class="content-container-services">
											
												<h4 class="text-center">Kitchens.</h4>
											
											
										</div>
									</div> 
									<!--  -->
								</div>
								
								<div class="col-md-4 col-sm-6 col-lg-2 theServiceImage" >
									<div class="icon-holder">
									<img class="icon-img" src="{{asset('theme/img/icon.png')}}" alt="#">
									</div>
									<div class="overlay-container-services">
										<img class="about-img-services" src="{{asset('theme/img/rustic-front-door-with-tiny-panes.jpg')}}" alt="#">
										<div class="content-container-services">
											
												<h4 class="text-center">Wardobes.</h4>
											
											
										</div>
									</div> 
									<!--  -->
								</div>

								<div class="col-md-4 col-sm-6 col-lg-2 theServiceImage">
									<div class="icon-holder">
									<img class="icon-img" src="{{asset('theme/img/icon.png')}}" alt="#">
									</div>
									<div class="overlay-container-services">
										<img class="about-img-services" src="{{asset('theme/img/rustic-front-door-with-tiny-panes.jpg')}}" alt="#">
										<div class="content-container-services">
											
												<h4 class="text-center">Flooring.</h4>
											
											
										</div>
									</div> 
									<!--  -->
								</div>
								
								<div class="col-md-4 col-sm-6 col-lg-2 theServiceImage">
									<div class="icon-holder">
									<img class="icon-img" src="{{asset('theme/img/icon.png')}}" alt="#">
									</div>
									<div class="overlay-container-services">
										<img class="about-img-services" src="{{asset('theme/img/rustic-front-door-with-tiny-panes.jpg')}}" alt="#">
										<div class="content-container-services">
											
												<h4 class="text-center">Doors.</h4>
											
											
										</div>
									</div> 
									<!--  -->
								</div>
								
								<div class="col-md-4 col-sm-6 col-lg-2 theServiceImage">
									<div class="icon-holder">
									<img class="icon-img" src="{{asset('theme/img/icon.png')}}" alt="#">
									</div>
									<div class="overlay-container-services">
										<img class="about-img-services" src="{{asset('theme/img/rustic-front-door-with-tiny-panes.jpg')}}" alt="#">
										<div class="content-container-services">
											
												<h4 class="text-center">Fittings.</h4>
											
										</div>
									</div> 
									<!--  -->
								</div>

							</div>
							
						</div>
						<!-- <div class="dividers"></div> -->
						<div class="dotted"></div>
						<!--  -->
						<section>
							<div class="sub-header sub-header-1 sub-header-portfolio-grid-1 fake-position" style="max-height:60px">
								<div class="container services-now">
									<a class="au-btn au-btn--big au-btn--pill au-btn--white au-btn--border au-btn--big" href="">Read More</a>
								</div>
							</div>
						</section>
						<!--  -->
					</section>
                
                    <!-- Services -->

                    <!-- portfolio -->
                <!-- End Section Sub Header -->
                <section class="padng  padding-bottom-0" >
					<!--  -->
					<div class="portfolio-now">
						<h3>Our Portfolio</h3>
					</div>
					<!--  -->
					<div class="lastest-project-warp portfolio-grid-v2-3-col-warp clearfix">
						  <div class="projectFilter project-terms line-effect-2">
										<a href="#" data-filter="*" class="current text-cap"><h4>All Projects</h4></a>
										<a href="#" data-filter=".Residential" class="text-cap"><h4>Residential</h4></a>
										<a href="#" data-filter=".Ecommercial" class="text-cap"><h4>Ecommercial</h4></a>
										<a href="#" data-filter=".Office" class="text-cap"><h4>Office</h4></a>
										<a href="#" data-filter=".Hospital" class="text-cap"><h4>Hospital</h4></a>
						  </div> <!-- End Project Fillter -->
						  <center><div id="box"></div></center>
						<!-- <div class="container"> -->
							<div class="bg-grey clearfix projectContainer portfolio-grid-v2-3-col-container">
					
									<div class="element-item  Residential">
											
											<a class="portfolio-img-demo" href="portfolioDetail_1.html"><img src="{{asset('theme/images/Project/1.jpg')}}" class="img-responsive" alt="Image"></a>
										<div class="project-info">
												<a href="portfolioDetail.html"><h4 class="title-project text-cap text-cap">Dream House</h4></a>
												<a href="portfolioDetail.html" class="cateProject">Residential</a>
												<a href="portfolioDetail.html"><h5 class="title-project text-cap text-cap">Interior Design</h5></a>
											</div>
									</div>
								
									<div class="element-item Residential ">
											
											<a class="portfolio-img-demo" href="portfolioDetail_1.html"><img src="{{asset('theme/images/Project/2.jpg')}}" class="img-responsive" alt="Image"></a>
							
											<div class="project-info">
											<a href="portfolioDetail.html"><h4 class="title-project text-cap">Wood Wall City</h4></a>
												<a href="portfolioDetail.html" class="cateProject">Ecommercial</a>
										</div>
									</div>    
								
									<div class="element-item Ecommercial">
											
											<a class="portfolio-img-demo" href="portfolioDetail_1.html"><img src="{{asset('theme/images/Project/3.jpg')}}" class="img-responsive" alt="Image"></a>
											
											<div class="project-info">
											<a href="portfolioDetail.html"><h4 class="title-project text-cap">Bathroom furniture</h4></a>
											<a href="portfolioDetail.html" class="cateProject">Residential</a>
											</div>
									</div>
									
									<div class="element-item Ecommercial ">
											
											<a class="portfolio-img-demo" href="portfolioDetail_1.html"><img src="{{asset('theme/images/Project/4.jpg')}}" class="img-responsive" alt="Image"></a>
											
											
											<div class="project-info">
											<a href="portfolioDetail.html"><h4 class="title-project text-cap">Living Room Decor</h4></a>
												<a href="portfolioDetail.html" class="cateProject">Resident</a>
											</div>
									</div>
								
									<div class="element-item Office">
											
											<a class="portfolio-img-demo" href="portfolioDetail_1.html"><img src="{{asset('theme/images/Project/5.jpg')}}" class="img-responsive" alt="Image"></a>
											
											<div class="project-info">
											<a href="portfolioDetail.html"><h4 class="title-project text-cap">open Space House</h4></a>
												<a href="portfolioDetail.html" class="cateProject">Residential</a>
											</div>
									</div>
								
									<div class="element-item Office">
											
											<a class="portfolio-img-demo" href="portfolioDetail_1.html"><img src="{{asset('theme/images/Project/6.jpg')}}" class="img-responsive" alt="Image"></a>
											
											<div class="project-info">
											<a href="portfolioDetail.html"><h4 class="title-project text-cap">Sky Hotel</h4></a>
												<a href="portfolioDetail.html" class="cateProject">Ecommercial</a>
											</div>
											
									</div>
								
								
							</div>  <!-- End project Container -->
                        <!-- </div> -->
					</div> <!-- End  -->
					<div class="clearfix mgt60"></div>
					
				</section>
				<!-- End Section Isotop Lastest Project -->
                    <!-- portfolio -->

                    <!-- team and testimonial -->
                    <section class="padding news-letter">
                <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="news-letter-title">
                            <h2 class="text-cap">Dare To Choose Us Today!</h2>
                            <p>Get latest news on our products and Services Delivered to you daily</p>
                        </div>
                    </div>
                    
                    <!-- End Title -->
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="form-subcribe">

                           
                            <form  method="post">
							<div class="input-group">
								<span style="border: 5px solid #ffffff; border-right:none;" class="input-group-addon"><i class="fa fa-envelope"></i></span>
								<input style="border: 5px solid #ffffff; border-left:none;" class="newsletter-email input-text" placeholder="email@example.com" type="email">
                                <button class="ot-btn btn-main-color text-cap newsletter-form-btn" type="submit">Subscribe</button>
							</div>            
							    
                              
                            </form>
                        </div>
                    </div>
                </div>
                </div>
            </section>
            <!-- End Section subcribe -->
            <!-- Our Testimonial Area -->
            <section class="testimonial_area row padding" style="background-image:url('{{asset('theme/img/service-01.jpg')}}'); background-position:center center;">
                <div class="container">
                    <div class="tittle wow fadeInUp">
                        <h3>WHAT OUR CLIENT SAY</h3>
                      
                    </div>
                    <div class="testimonial_carosel ">
                        <!--  -->

                        <!--  -->
                        <div class="item">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="{{asset('theme/images/testimonial-2.jpg')}}" alt="">
                                    </a>
                                </div>
                            
                            </div>
							<p>Some testimonials text goes here, Some testimonials text goes here, Some testimonials text goes here, Some testimonials text goes here, Some testimonials text goes here,</p>
							<h3>Jane Mwikali</h3>
						</div>
						
						<div class="item">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="{{asset('theme/images/testimonial-2.jpg')}}" alt="">
                                    </a>
                                </div>
                            
                            </div>
							<p>Some testimonials text goes here, Some testimonials text goes here, Some testimonials text goes here, Some testimonials text goes here, Some testimonials text goes here,</p>
							<h3>Jane Mwikali</h3>
						</div>
						
						<div class="item">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="{{asset('theme/images/testimonial-2.jpg')}}" alt="">
                                    </a>
                                </div>
                            
                            </div>
							<p>Some testimonials text goes here, Some testimonials text goes here, Some testimonials text goes here, Some testimonials text goes here, Some testimonials text goes here,</p>
							<h3>Jane Mwikali</h3>
						</div>
						
						<div class="item">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="{{asset('theme/images/testimonial-2.jpg')}}" alt="">
                                    </a>
                                </div>
                            
                            </div>
							<p>Some testimonials text goes here, Some testimonials text goes here, Some testimonials text goes here, Some testimonials text goes here, Some testimonials text goes here,</p>
							<h3>Jane Mwikali</h3>
						</div>
						
						<div class="item">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="{{asset('theme/images/testimonial-2.jpg')}}" alt="">
                                    </a>
                                </div>
                            
                            </div>
							<p>Some testimonials text goes here, Some testimonials text goes here, Some testimonials text goes here, Some testimonials text goes here, Some testimonials text goes here,</p>
							<h3>Jane Mwikali</h3>
                        </div>
                       
                       
                    </div>
                </div>
            </section>
			<!-- End Our testimonial Area -->
                
            	<!--================Our Team Area =================-->
			<section class="our_team_area2 padding">
					<div class="container">
						<div class="main_b_r_title">
							<!--  -->
								<div class="portfolio-now">
									<h3>The Edition Team</h3>
								</div>
								<p class="team-meta">Our multidisciplinary team of experts is commited to delivering effective and inovative solutions for major commercial residential, corporate, industrial and multi-dwelling projects</p>
							<!--  -->
                        </div>
                        <div class="dotted"></div>
						<div class="row">
							<div class="team_slider2_inner owl-carousel">
									<!--  -->
									<div class="item">
										<div class="team_item">
											<div class="team_image">
												<img src="{{asset('theme/img/team/team-3.jpg')}}" alt="">
												<ul>
													<li><a href="#"><i class="fa fa-facebook"></i></a></li>
													<li><a href="#"><i class="fa fa-twitter"></i></a></li>
													<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
													<li><a href="#"><i class="fa fa-instagram"></i></a></li>
												</ul>
											</div>
											<div class="member_name">
												<a href="#"><h4>Ogallo Joshua</h4></a>
												<h5>Founder, Managing Director</h5>
											</div>
										</div>
									</div>
									<!--  -->
									<!--  -->
									<div class="item">
										<div class="team_item">
											<div class="team_image">
												<img src="{{asset('theme/img/team/team-3.jpg')}}" alt="">
												<ul>
													<li><a href="#"><i class="fa fa-facebook"></i></a></li>
													<li><a href="#"><i class="fa fa-twitter"></i></a></li>
													<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
													<li><a href="#"><i class="fa fa-instagram"></i></a></li>
												</ul>
											</div>
											<div class="member_name">
												<a href="#"><h4>Wambugu Elsie</h4></a>
												<h5>Sales Manager</h5>
											</div>
										</div>
									</div>
									<!--  -->
									<!--  -->
									<div class="item">
										<div class="team_item">
											<div class="team_image">
												<img src="{{asset('theme/img/team/team-3.jpg')}}" alt="">
												<ul>
													<li><a href="#"><i class="fa fa-facebook"></i></a></li>
													<li><a href="#"><i class="fa fa-twitter"></i></a></li>
													<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
													<li><a href="#"><i class="fa fa-instagram"></i></a></li>
												</ul>
											</div>
											<div class="member_name">
												<a href="#"><h4>Mwikali Jane</h4></a>
												<h5>Lead Designer</h5>
											</div>
										</div>
									</div>
									<!--  -->
									<!--  -->
									<div class="item">
										<div class="team_item">
											<div class="team_image">
												<img src="{{asset('theme/img/team/team-3.jpg')}}" alt="">
												<ul>
													<li><a href="#"><i class="fa fa-facebook"></i></a></li>
													<li><a href="#"><i class="fa fa-twitter"></i></a></li>
													<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
													<li><a href="#"><i class="fa fa-instagram"></i></a></li>
												</ul>
											</div>
											<div class="member_name">
												<a href="#"><h4>Omullo Hezborn</h4></a>
												<h5>Factor Manager</h5>
											</div>
										</div>
									</div>
									<!--  -->
									<!--  -->
							</div>
						</div>
					</div>
            </section>
            <!--================End Our Team Area =================-->
                    

            	<!-- End Section Sub Header -->
				<section class="padding bg-grey padding-bottom-0 hide-blog" >
					<!--  -->
					<div class="portfolio-now">
						<h3>NEWS AND BLOG</h3>
					</div>
					<!--  -->
					<div class="container">
						<div class="lastest-blog-container">
							<!--  -->
								<!-- End Section Sub Header -->
								<section class="paddinga">
									<div class="container">
										<div class="row">
											<div class="blog-warp blog-grid-3-col clearfix">
												<div class="clearfix blogContainer blog-grid-3-col-container">
										
														<div class="element-item  interior">
																
																<article>
																	<figure class="latest-blog-post-img">
																		<a href="blogDetail.html">
																			<img src="{{asset('theme/images/Blog/1.jpg')}}" class="img-responsive" alt="Image">
																		</a>
																		
																	</figure>
																	<div class="latest-blog-post-description">
																		<a href="blogDetail.html"><h3>Color Pellettes to transform your space</h3></a>
																		
																		<div class="latest-blog-post-date-2  text-cap blog-date">
																			<span class="month">May</span>
																			<span class="day">21,</span>
																			<span class="year">2016</span>
																		</div>
																		&nbsp;&nbsp;&nbsp;
																		<div class="latest-blog-post-data">
																			<p class="tags text-cap">
																				<i>By<a href="#"> Steve Mwangi </a></i>,
																				.<a href="#">Interior Design </a>.
																				
																				
																			</p>
																		</div>
																		<p>Some Content For The Blog Here, Some Meta Content For the Blog Here</p>
																		
																	</div>
															</article>
														</div>
													
														<div class="element-item  interior">
																
															<article>
																<figure class="latest-blog-post-img">
																	<a href="blogDetail.html">
																		<img src="{{asset('theme/images/Blog/2.jpg')}}" class="img-responsive" alt="Image">
																	</a>
																	
																</figure>
																<div class="latest-blog-post-description">
																	<a href="blogDetail.html"><h3>Interior Design Trends For Your Commerce Space</h3></a>
																	
																	<div class="latest-blog-post-date-2  text-cap blog-date">
																		<span class="month">May</span>
																		<span class="day">21,</span>
																		<span class="year">2016</span>
																	</div>
																	&nbsp;&nbsp;&nbsp;
																	<div class="latest-blog-post-data">
																		<p class="tags text-cap">
																			<i>By<a href="#"> Steve Mwangi </a></i>,
																			.<a href="#">Interior Design </a>.
																			
																			
																		</p>
																	</div>
																	<p>Some Content For The Blog Here, Some Meta Content For the Blog Here</p>
																	
																</div>
														</article>
													</div>

													<div class="element-item  interior">
																
														<article>
															<figure class="latest-blog-post-img">
																<a href="blogDetail.html">
																	<img src="{{asset('theme/images/Blog/3.jpg')}}" class="img-responsive" alt="Image">
																</a>
																
															</figure>
															<div class="latest-blog-post-description">
																<a href="blogDetail.html"><h3>5 Reasonns You need a Mordern wardrobe</h3></a>
																
																<div class="latest-blog-post-date-2  text-cap blog-date">
																	<span class="month">May</span>
																	<span class="day">21,</span>
																	<span class="year">2016</span>
																</div>
																&nbsp;&nbsp;&nbsp;
																<div class="latest-blog-post-data">
																	<p class="tags text-cap">
																		<i>By<a href="#"> Steve Mwangi </a></i>,
																		.<a href="#">Interior Design </a>.
																		
																		
																	</p>
																</div>
																<p>Some Content For The Blog Here, Some Meta Content For the Blog Here</p>
																
															</div>
													</article>
												</div>
														
														
												</div>
										<!-- End project Container -->
											</div> <!-- End  -->
										</div>
									</div>
								</section>
								<!-- End Section Isotop Lastest Project -->
							<!--  -->
						</div>
					</div>
					<div class="clearfix mgt60"></div>
					
				</section>
                <!-- End Section Isotop Lastest Project -->
                
                <!-- contact -->
               <!-- breadcrumbs -->
                <section class="padding-bottom-0">
                    
                    <div class="sub-header sub-header-2 sub-header-portfolio-grid-1 fake-positiona">
                        <div class="container">
                            <div class="col-lg-8 col-md-12 col-sm-12">
                            <h3>Visit US Today.</h3>
                            </div>
                            <!-- Social Media -->
                            <div class="col-lg-4 col-md-12 col-sm-12">
                            <ul class="social">
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                            </div>
                            <!-- Social Media -->
                        </div>
                    </div>
                </section>
                <!-- breadcrumbs -->
                <!-- Map -->
                <section class="no-padding-bot" style="line-height: 0;">
        
                        

                        <div class="row">
                            
                        <div class="col-md-12">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.16735573576!2d36.8422951!3d-1.2997084!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xabd97dc83bb23b31!2sThe%20Edition%20Investments%20Limited!5e0!3m2!1sen!2ske!4v1591361775583!5m2!1sen!2ske" width="100%" height="255" frameborder="0" style="border:0;" allowfullscreen aria-hidden="false" tabindex="0"></iframe>
                        </div>
                        </div>

                </section>
                <!-- End Section -->
                <!-- contact -->
                <!-- Page Content -->


            

		


            @include('front.footer')
			<!-- End Footer -->

			<section class="copyright">
				<p><span class="left">THE EDITION INVESTMENTS © 2020 All rights reserved.</span> <span class="right"> <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></span></p>
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
    <script type="text/javascript" src="{{asset('theme/js/plugins/royal_preloader.min.js')}}"></script>
	<script type="text/javascript">
	(function($) { "use strict";
	            Royal_Preloader.config({
	                mode:           'logo', // 'number', "text" or "logo"
	                logo:           '{{asset('theme/images/Header/logo.png')}}',
	                timeout:       1,
	                showInfo:       false,
	                opacity:        1,
	                background:     ['#FFFFFF']
	            });
	})(jQuery);
	</script>

 	<!-- Global Js
    ================================================== --> 
    <script src="{{asset('theme/js/plugins/custom.js')}}"></script>
	<script src="{{asset('theme/js/plugins/custom-h4.js')}}"></script>
    <script src="{{asset('theme/headline/js/main.js')}}"></script> <!-- Resource jQuery -->

    <script src="{{asset('theme/vendors/owl_carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('theme/js/theme.js')}}"></script>
	</body>

@endforeach
</html>
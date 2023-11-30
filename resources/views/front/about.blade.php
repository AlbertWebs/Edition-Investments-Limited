@extends('front.master-pages') 
@section('content')
<?php $Page = DB::table('page')->where('page_name','About')->get(); ?>
@foreach($Page as $page)
   
	@foreach($About as $about)
<div class="clear"></div>
<!--  -->
            <section>
               <div class="rev_slider_wrapper" style=" background:linear-gradient(rgba(6, 43, 49, 0.45),rgba(6, 43, 49, 0.65)),url('{{url('/')}}/uploads/pages/{{$page->page_featured_image_four}}');background-position: center top; background-size: cover; background-repeat: no-repeat;">
                  <!-- START REVOLUTION SLIDER 5.0 auto mode -->
                  <div id="slider-h3" class="rev_slider slider-home-3" data-version="5.0">
                     <ul>
                        <!-- SLIDE  -->
                        <li data-transition="slideup" data-masterspeed="1000" >
                           <!-- MAIN IMAGE -->
                           <!-- <img class="tint-about" src="{{url('/')}}/uploads/pages/{{$page->page_featured_image_four}}"  alt="" data-bgposition="center center">							 -->
                           
                           <!-- LAYER NR. 2 -->
                           <div  class="tp-caption heading-2 white-text text-cap breadcrumb-banner" 						
                              data-x="center" 
                              data-y="center" 	
                              data-transform_in="y:[150%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power3.easeInOut;" 
                              data-start="900" 
                              
                              >GET TO KNOW US
						   </div>

						   <!--  -->
						   <div class="tp-caption white-text breadcrumb-banner-text" 							
                              data-x="center" 
                              data-y="center"  data-voffset="77" 	
                              data-transform_in="y:[200%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power3.easeInOut;" 				 
                              data-start="700" 
							  >The Edition Investments Limited is the premier fit out company in the region<br>
							  We are known for articulate manufacture and installation of wood based<br>
							   interiors using morden machinery and equipment however maintaining a timeless<br> elegance
                           </div>
						   <!--  -->
						  
                           <!-- LAYER NR. 3 -->
                           <div class="tp-caption btn-1" 							
                              data-x="center"  
                              data-y="center"  data-voffset="152" 
                              data-transform_in="y:[200%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power3.easeInOut;" 
                              data-start="1100" 	
                              >	
                              <a style="color:#ffffff; font-weight:900" href="#about" class="ot-btn btn-main-color text-cap ">About Us</a>  
                           </div>
                           
                           
                        </li>
                       
                     </ul>
                  </div>
                  <!-- END REVOLUTION SLIDER -->
               </div>
               <!-- END REVOLUTION SLIDER WRAPPER -->	
            </section>
<!--  -->
	      
			   <!--  -->
	
			    <section class="padding-edition bg-edition">
					<div class="">
						<div class="row">
							<div class="about-intro">
								<div class="about-intro-img wow fadeInLeft" data-wow-delay=".55s">
									<img style="max-height:400px; width:100%;" src="{{url('/uploads/pages')}}/{{$page->page_featured_image_one}}" class="img-responsive" alt="Image">
								</div>
								<div class="about-intro-text wow fadeInRight" data-wow-delay=".55s">
								<div class="">
									<br>
									<div class="about-now">
										<h3>Who we are</h3>
									</div>
								</div>
									<p class="about-text">{!!html_entity_decode($about->content)!!}</p>
						
									<div class="clearfix mgb20"></div>
									</div>
							</div>
						</div>
					</div>
				</section>	
				<!--  -->
				<section class="padding-edition bg-grey section-height">
					<div class="container">
						<div class="row">
							<div class="col-lg-12 col-md-6 col-sm-12 text-center">
								<!--  -->
								<div class="col-lg-6 col-md-6 col-sm-12">  
									<div class="about-intro-text wow fadeInLeft text-center vision-section" data-wow-delay=".55s">
										
										
											<div class="vision-now">
												<h3 style="color:#062b31;">Our Vision</h3>
											</div>
										
											<p class="vision-text">To be the renowned creator of artful wooden and wood based interiors in the region</p>
										
									</div>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-12"> 
									

									<div class="about-intro-text wow fadeInRight vision-section" data-wow-delay=".55s">
							
											<div class="vision-now">
												<h3 style="color:#062b31;">Our Mision</h3>
											</div>
									
										<p class="vision-text">To achieve sustainable growth through customer satisfaction. We aim to set the standards of excellence in wood products manufacture and installation.</p>
							
										
									</div>

								</div>
								<!--  -->
							</div>
						</div>
					</div>
				</section>
				<!--  -->

            
	@endforeach
	<!--  -->
	<!-- Container -->
	<div class="row" style="min-height:550px; background:linear-gradient(rgba(6, 43, 49, 0.65),rgba(6, 43, 49, 0.65)),url('{{url('/')}}/uploads/pages/{{$page->page_featured_image_three}}');background-position: center top; background-size: contain, cover; ;background-repeat: no-repeat;">
			<!--  -->
				<div class="portfolio-now wow fadeInUp" data-wow-delay=".25s">
					<h3 style="color:#ffffff; font-size:19px;">Our Core Values</h3>
				</div>
			    <div class="dotted"></div>
			<!--  -->
			<br><br>
			<?php $CoreValues = DB::table('values')->get(); ?>
			@foreach($CoreValues as $coreValue)
			<div class="col-md-4 values-section">
				<img src="{{url('/')}}/uploads/values/{{$coreValue->icon}}" alt="Core Values">
				<h3 class="headline text-center"> {{$coreValue->title}} </h3>
				<p class="value-text text-center">{{$coreValue->content}}
				</p>
			</div>
			@endforeach


			

	</div>
	<!-- Container End -->
	<section class="bg-grey">
	<div class="portfolio-now wow fadeInUp" data-wow-delay=".25s">
		<h3></h3>
	</div>
	<div class="big-text">
		<h3>
		We not only make things beautiful.
		We make them work great as well
		</h3>
		<span></span>
	</div>
	
    </section>
	<!--  -->
<!--================Our Team Area =================-->

		<!--  -->
		{{-- @include('front.teams') --}}
		<!--  -->

		<!-- Contact Form Section -->

			<section style="min-height:650px; background:linear-gradient(rgba(6, 43, 49, 0.75),rgba(6, 43, 49, 0.75)),url('{{url('/')}}/uploads/banner/20210715164329_IMG_3200-min.jpg');background-position: center bottom; background-size: contain, cover; ;background-repeat: no-repeat;">
                <div class="container">
                    <div class="row" style="padding-top:10px;">
                        <!--  -->
						<div class="portfolio-now wow fadeInUp" data-wow-delay=".25s">
							<h3 style="color:#FFFFFF">LET'S START SOMETHING NEW</h3>
						</div>
						<!--  -->
                        <div class="contact-warp">
                            <div class="col-md-12">
                                <div class="left-contact">
                                    <form class="form-inline form-contact-arc" name="contact" method="post" action="#">
										<div class="row">
											<div class="form-group col-sm-12 " style="padding:15px">
											<input type="text" class="form-contraol dotted-input" name="yourName" id="yourName" placeholder="Name:">
											</div>
											<div class="form-group col-sm-12" style="padding:15px">
											<input type="email" class="dotted-input" name="yourEmail" id="yourEmail" placeholder="Email:" >
											</div>
											<div class="form-group col-sm-12" style="padding:15px">
											<input type="text" class="dotted-input" name="yourPhone" id="phoneNumber" placeholder="Phone Number:" >
											</div>
											<div class="form-group col-sm-12" style="padding:15px">
											<input type="text" class="dotted-input" name="company" id="yourEmail" placeholder="Company Name:" >
											</div>
										</div>
										<div class="input-content" style="padding:15px">
											<div class="form-group form-textarea">
												<textarea id="textarea" class="form-control" name="comments" rows="6" placeholder="Your Messages" ></textarea>
											</div>
										</div>
										<button  class="ot-btn btn-main-color btn-long text-cap btn-submit">SUBMIT</button>
									</form> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

		<!-- Map -->
		<section class="no-padding-bot" style="line-height: 0;">
	       <div class="row">
				
				<div class="col-md-12">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.16735573576!2d36.8422951!3d-1.2997084!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xabd97dc83bb23b31!2sThe%20Edition%20Investments%20Limited!5e0!3m2!1sen!2ske!4v1591361775583!5m2!1sen!2ske" width="100%" height="355" frameborder="0" style="border:0;" allowfullscreen aria-hidden="false" tabindex="0"></iframe>
				</div>

			</div>

		</section>
		<!-- End Section -->

	

@endforeach

@endsection
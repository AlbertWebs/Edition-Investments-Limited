@extends('front.master')
@section('content')
<?php $Page = DB::table('page')->where('page_name','Home')->get(); ?>
@foreach($Page as $page)

            {{-- @include('front.slide') --}}
			<!-- End Section Slider -->
	        @include('front.sliders')


			<!-- About -->
			<section class="service padding" style="background-color:rgba(0,0,0,.1)">
				<div class="container">
					<div class="service-wrap">
						<div class="col-lg-4 col-md-4 col-sm-12 clearfix wow fadeInLeft" data-wow-delay=".25s">

							<div class="service__item-1 service__intro background-tint" style="background-image: url('{{url('/')}}/uploads/pages/{{$page->page_featured_image_one}}');">
								<div class="service__item-inner">
									<div class="room-checks">
									<h4 class="">GET TO KNOW US</h4>
									</div>
									<p>
										The Edition Investments Limited is the premier fit out company in the region.

									</p>
									<p>
										We are known for articulate manufacture and installation
										of wood based interiors using modern machinery and
										equipment however maintaining a timeless elegance.
									</p>
									<p>
										Over the years we have coined valuable relationships with
										architects, engineers and interior designers who trust our
										products to ensure lean costing without compromising
										quality.
									</p>
									<p>
										Quality may be a much misused word, but at The Edition it
										defines what we do and the decisions we make. The timely
										manufacture, delivery and installation of our superior
										products to our customers not only fulfill their purpose but
										will remain durable and free of imperfections for many years
										to come.
									</p>
									<br><br>
									<div>
									<a href="about-us#" class="au-btn au-btn--big au-btn--pill au-btn--white au-btn--border au-btn--big wow fadeIn" data-wow-delay=".25s">Read More</a>
									</div>
								</div>
							</div>

						</div>

						<div class="col-lg-4 col-md-4 col-sm-12 wow fadeInUp text-center" data-wow-delay=".25s" style="padding-top:70px; max-width:400px;">

							<!--  -->
							<div class="overlay-container">
								<div class="image-container">
									<img class="about-img" src="{{url('/')}}/uploads/pages/{{$page->page_featured_image_two}}" alt="#">
								</div>
								<div class="content-container">
									<div class="room-checks-1">
									<h4 class="">Our Vision</h4>
									</div>
									<p>To be the renowned creator of artful wooden and wood based interiors in the region</p>

								</div>
							</div>
							<!--  -->
							<!--  -->
							<div class="about-btn-container">
							<center><a href="about-us#" class="au-btn-2 au-btn--big au-btn--pill au-btn--white au-btn--border au-btn--big wow fadeIn" data-wow-delay=".25s">Read More</a></center>
							</div>
							<!--  -->

						</div>

						<div class="col-lg-4 col-md-4 col-sm-12 wow fadeInRight" data-wow-delay=".25s" style="padding-top:70px; max-width:400px; ">

							<!--  -->
							<div class="overlay-container">
								<div class="image-container">
									<img class="about-img" src="{{url('/')}}/uploads/pages/{{$page->page_featured_image_three}}" alt="#">
								</div>
								<div class="content-container">
									<div class="room-checks-1">
									<h4 class="">Our Mission</h4>
									</div>
									<p>To achieve sustainable growth through customer
										satisfaction. We aim to set the standards of
										excellence in wood products manufacture and
										installation.</p>

								</div>
							</div>
							<!--  -->
							<!--  -->
							<div class="about-btn-container">
							<center><a href="about-us#" class="au-btn-2 au-btn--big au-btn--pill au-btn--white au-btn--border au-btn--big wow fadeIn" data-wow-delay=".25s">Read More</a></center>
							</div>
							<!--  -->

						</div>




					</div>
				</div>
			</section>
			<!-- </About> -->

			<!-- Services -->

			<section style="background-color:rgba(0,0,0,.1)">
				<div class="sub-header sub-header-1 sub-header-portfolio-grid-1 fake-positioner">
					<div class="services-now">
						<h3>Product And Services</h3>
					</div>
				</div>
			</section>
            <?php $Services = DB::table('services')->limit('5')->get(); ?>
			<section class="" style="background-color:rgba(0,0,0,.1)">
				<div class="containear">
					<div class="row margins">
                        <?php $Count = 2; ?>
                        @foreach($Services as $services)
						<!-- Page Content -->
						<div class="col-xm-6 col-md-4 col-sm-6 col-lg-2 theServiceImage wow fadeInRight" data-wow-delay=".{{$Count}}5s" >
							<div class="icon-holder">
								<img class="icon-img" src="{{url('/uploads/')}}/services/{{$services->image_two}}" alt="#">
							</div>

							<div class="overlay-container-services">
								<img class="about-img-services" src="{{url('/uploads/')}}/services/{{$services->thumb}}" alt="#">
								<div class="content-container-services">

										<h4 class="text-center">{{$services->label}}.</h4>


								</div>
							</div>
							<!--  -->
						</div>
                        <?php $Count = $Count+1; ?>
                        @endforeach


					</div>

				</div>
				<!-- <div class="dividers"></div> -->
				<div class="dotted"></div>
				<!--  -->
				<section>
					<div class="sub-header sub-header-1 sub-header-portfolio-grid-1 fake-position" style="max-height:60px">
						<div class="container services-now">
							<a class="au-btn au-btn--big au-btn--pill au-btn--white au-btn--border au-btn--big wow fadeInDown" data-wow-delay=".25s" href="{{url('/')}}/products-and-services">Read More</a>
						</div>
					</div>
				</section>
				<!--  -->
			</section>

			<!-- </Services> -->


			<!-- End Section Sub Header -->
			<section class="padng  padding-bottom-0" >
				<!--  -->
				<div class="portfolio-now">
					<h3>Our Portfolio</h3>
				</div>
				<!--  -->
				<div class="lastest-project-warp portfolio-grid-v2-4-col-warp clearfix wow fadeInRight" data-wow-delay=".85s">
						<div class="projectFilter project-terms line-effect-2">
                                    <?php
										$ServicesList = DB::table('category')->get();
									?>
									<a href="#" data-filter="*" class="current text-cap"><h4>All Projects</h4></a>
                                    @foreach($ServicesList as $serlist)
									<a href="#" data-filter=".cat_{{$serlist->id}}" class="text-cap"><h4>{{$serlist->cat}}</h4></a>
                                    @endforeach

						</div> <!-- End Project Fillter -->
						<center><div id="box"></div></center>
					<!-- <div class="container"> -->
						<div class="bg-grey clearfix projectContainer portfolio-grid-v2-4-col-container">
				                <?php $Portfolio = DB::table('portfolio')->inRandomOrder()->limit('12')->get(); ?>
                                @foreach($Portfolio as $port)
								<div class="element-item cat_{{$port->service}}" id="lightgallery" data-src="{{url('/uploads/portfolio/')}}/{{$port->image_one}}">
									<a target="new" class="portfolio-img-demo" href="{{url('/uploads/portfolio/')}}/{{$port->image_one}}">
										<img src="{{url('/uploads/portfolio/')}}/{{$port->image_one}}" class="img-responsive port-image" alt="{{$port->title}}">
									</a>
									<div class="project-info">
										<a target="new" href="{{url('/uploads/portfolio/')}}/{{$port->image_one}}">
                                            {{-- <h4 class="title-project text-cap text-cap">{{$port->title}}</h4> --}}
                                        </a>
										<a target="new" href="{{url('/uploads/portfolio/')}}/{{$port->image_one}}" class="cateProject">{{$port->location}}</a>
										<a target="new" href="{{url('/uploads/portfolio/')}}/{{$port->image_one}}">
                                            {{-- <h5 class="title-project text-cap text-cap"> <?php $Category = App\Models\Category::find($port->service) ?> {{$Category->cat}} </h5> --}}
                                        </a>
									</div>
								</div>
							    @endforeach
						</div>  <!-- End project Container -->
					<!-- </div> -->
				</div> <!-- End  -->
				<div class="clearfix mgt60"></div>

			</section>
			<!-- End Section Isotop Lastest Project -->
            <div class="clearfix"></div>

            <!-- team and testimonial -->
            <section class="news-letter" style="padding:30px 0px;">
                <div class="container">
					<div class="row" style="border-bottom:1px dotted #ffffff">
						<div class="col-lg-6 col-md-12 col-sm-12">
							<div class="news-letter-title wow fadeInLeft" data-wow-delay=".25s">
								<h2 class="text-cap">Work with Us Today!</h2>
								<p>Get latest news on our products and Services Delivered to you daily</p>
							</div>
						</div>

						<!-- End Title -->
						<div class="col-lg-6 col-md-12 col-sm-12 wow fadeInRight" data-wow-delay=".25s">
							<div class="form-subcribe">


							<form method="post" id="mailchimp-subscription-form-footer" class="newsletter-form" action="{{url('/subscribe')}}">
									{{csrf_field()}}
									<div class="input-group">
										<span style="border: 5px solid #ffffff; border-right:none;" class="input-group-addon"><i class="fa fa-envelope"></i></span>
										<input style="border: 5px solid #ffffff; border-left:none;" name="email" class="newsletter-email input-text" placeholder="email@example.com" type="email">
										<button class="ot-btn btn-main-color text-cap newsletter-form-btn"  id="subscribe-btn" type="submit">Subscribe</button>
									</div>
									<br>
									<div class="clearfix"></div>
								    <div class="alert alert-success" id="alert-subscriber" role="alert" style="display:none"></div>
								</form>
								<!-- Mailchimp Subscription Form Validation-->
								<script src="{{asset('theme/js/vendor/jquery.min.js')}}"></script>
								<script type="text/javascript">
									$('#mailchimp-subscription-form-footer').ajaxChimp({
										callback: mailChimpCallBack,
										url: '//hmcdo.us2.list-manage.com/subscribe/post?u=7ef66a50e04ce182e018bcacc&amp;id=8552cfb6f2'
									});

									function mailChimpCallBack(resp) {
										// Hide any previous response text
										var $mailchimpform = $('#mailchimp-subscription-form-footer'),
											$response = '';
										$mailchimpform.children(".alert").remove();
										console.log(resp);
										if (resp.result === 'success') {
											$response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
										} else if (resp.result === 'error') {
											$response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
										}
										$mailchimpform.prepend($response);
									}
								  </script>
								  <!-- Mailchimp Subscription Form Ends Here -->
							</div>
						</div>
					</div>


                </div>
            </section>
            <!-- End Section subcribe -->

            <?php $Testimonials = DB::table('testimonial')->limit('10')->get(); ?>
            <!-- Our Testimonial Area -->
            <section class="testimonial_area row padding" style="background-image:url('{{url('/uploads/pages/')}}/{{$page->page_featured_image_four}}'); background-position:center center;" >
                <div class="container" style="min-height:300px !important;">
                    <div class="tittle wow fadeInUp">
                        <h3>WHAT OUR CLIENT SAY</h3>

                    </div>
                    <div class="testimonial_carosel ">
                       @foreach($Testimonials as $test)
                        <div class="item">
                            <div class="media">
                                <div class="media-left">
                                    {{-- <a href="#">
                                        <img class="media-object" src="{{url('/')}}/uploads/testimonials/avatar.png" alt="">
                                    </a> --}}
                                </div>

                            </div>
							<p>{{$test->content}}</p>
							<h3>{{$test->name}}</h3>
						</div>
                       @endforeach

                    </div>
                </div>
            </section>
			<!-- End Our testimonial Area -->

			<!--================Our Team Area =================-->
			{{-- @include('front.team') --}}
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
												<?php
													 $Blog = DB::table('blog')->orderBy('ID','DESC')->limit(3)->get(); $Count = 2;
													 $fadeInLeft = "fadeInLeft";
													 $fadeInUp = "fadeInUp";
													 $fadeInRight = "fadeInRight";
												 ?>
												    @foreach($Blog as $blog)
													<div class="element-item  interior wow @if($Count == 2) {{$fadeInLeft}} @elseif($Count == 3) {{$fadeInUp}} @else {{$fadeInRight}} @endif" data-wow-delay=".{{$Count}}5s">

															<article>
																<figure class="latest-blog-post-img">
																	<a href="{{url('/')}}/news/{{$blog->slug}}">
																		<img style="height:220px;" src="{{url('/')}}/uploads/blog/{{$blog->image_one}}" class="img-responsive" alt="Image">
																	</a>

																</figure>
																<div class="latest-blog-post-description">
																	<a href="{{url('/')}}/news/{{$blog->slug}}"><h3>{{$blog->title}}</h3></a>

																	<div class="latest-blog-post-date-2  text-cap blog-date">
																	<?php
																		$RawDate = $blog->created_at;
																		$FormatDate = strtotime('{{$RawDate}}');
																		$Month = date('M',$FormatDate);
																		$Date = date('D',$FormatDate);
																		$Year = date('Y',$FormatDate);
																	?>
																		<span class="month">{{date('M', strtotime($blog->created_at))}}</span>
																		<span class="day">{{date('d', strtotime($blog->created_at))}},</span>
																		<span class="year">{{date('Y', strtotime($blog->created_at))}}</span>
																	</div>
																	&nbsp;&nbsp;&nbsp;
																	<div class="latest-blog-post-data">
																		<p class="tags text-cap">
																			<i>By<a href="{{url('/')}}/news/{{$blog->slug}}"> {{$blog->author}} </a></i>,
																			.<a href="#">
																				<?php
																				    $Cate = DB::table('category')->where('id',$blog->id)->get();
																				?>
																				@foreach($Cate as $cat)
                                                                                    {{$cat->cat}}
																				@endforeach
																			 </a>.


																		</p>
																	</div>
																	<p>{!!html_entity_decode($blog->meta)!!}</p>

																</div>
														</article>
													</div>
													<?php $Count = $Count+1; ?>
												    @endforeach

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
			<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
			@foreach($SiteSettings as $Set)
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
							<li class="facebook"><a href="{{$Set->facebook}}"><i class="fa fa-facebook"></i></a></li>
							<li class="twitter"><a href="{{$Set->twitter}}"><i class="fa fa-twitter"></i></a></li>
							<li class="google-plus"><a href="{{$Set->google}}"><i class="fa fa-google-plus"></i></a></li>
							<li class="youtube"><a href="{{$Set->youtube}}"><i class="fa fa-youtube-play"></i></a></li>
							<li class="linkedin"><a href="{{$Set->linkedin}}"><i class="fa fa-linkedin"></i></a></li>
						</ul>
						</div>
						<!-- Social Media -->
					</div>
				</div>
			</section>
			@endforeach
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

@endforeach
@endsection

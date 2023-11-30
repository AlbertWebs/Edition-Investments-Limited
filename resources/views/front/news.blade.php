@extends('front.master')
@section('content')
<?php $Page = DB::table('page')->where('page_name','About')->get(); ?>
@foreach($Page as $page)
    <section>
        <div class="sub-header-breadcrumbs sub-header-1-breadcrumbs sub-header-contact-breadcrumbs fake-position">
            <div class="sub-header-content-breadcrumbs">
              <div class="portfolio-now">
                <h3 style="color:#ffffff;">NEWS AND BLOG</h3> 
              </div>
            </div>
        </div>
    </section>
    <!-- End Section Sub Header -->

    
        <section class="padding bg-grey padding-bottom-0 hide-blog" >
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
												     $Count = 2;
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
																			.<a href="{{url('/')}}/news/{{$blog->slug}}">
																				<?php
																				    $Cate = DB::table('category')->where('id',$blog->cat)->get();
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
              


@endforeach

@endsection
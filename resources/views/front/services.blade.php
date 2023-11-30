@extends('front.master-pages')
@section('content')
<?php $Page = DB::table('page')->where('page_name','Services')->get(); ?>
@foreach($Page as $page)
   <!--  -->
   <section>
               <div class="rev_slider_wrapper" data-bgposition="center center" style="background:linear-gradient(rgba(6, 43, 49, 0.55),rgba(6, 43, 49, 0.55)),url('{{url('/')}}/uploads/pages/{{$page->page_featured_image_four}}'); background-position: center bottom;background-size: cover;background-repeat: no-repeat;">
                  <!-- START REVOLUTION SLIDER 5.0 auto mode -->
                  <div id="slider-h3" class="rev_slider slider-home-3" data-version="5.0">
                     <ul class=" overlay-two">
                        <!-- SLIDE  -->
                        <li class="container-dim" data-transition="slideup" data-masterspeed="1000" >
                           <!-- MAIN IMAGE -->
                           <!-- <img class="background-tint" src="{{url('/')}}/uploads/pages/{{$page->page_featured_image_four}}"  alt="" data-bgposition="center center">							 -->

                           <!-- LAYER NR. 2 -->
                           <div class="tp-caption heading-2 white-text text-cap breadcrumb-banner"
                              data-x="center"
                              data-y="center"
                              data-transform_in=""
                              data-start="900"

                              >Products and Services
						   </div>
							<!--  -->
							<div class="tp-caption white-text breadcrumb-banner-text"
							  data-x="center"
                              data-y="center"  data-voffset="67"
                              data-transform_in="y:[200%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power3.easeInOut;"
                              data-start="700"
							  >The Edition Investments Limited is the premier fit out company in the region<br>
							  We are known for articulate manufacture and installation of wood based interiors<br>
							    using morden machinery and equipment however maintaining a timeless elegance
                           </div>
						   <!--  -->


                           <!-- LAYER NR. 3 -->
                           <div class="tp-caption btn-1"
                              data-x="center"
                              data-y="center"  data-voffset="142"
                              data-transform_in="y:[200%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power3.easeInOut;"
                              data-start="1100"
                              >
                              <a style="color:#ffffff; font-weight:900" href="#services" class="ot-btn btn-main-color text-cap ">Services</a>
                           </div>


                        </li>

                     </ul>
                  </div>
                  <!-- END REVOLUTION SLIDER -->
               </div>
               <!-- END REVOLUTION SLIDER WRAPPER -->
            </section>
<!--  -->
    <?php $count = 1; ?>
	@foreach($Services as $services)

	<?php $LastCount = count($Services); ?>

    @if ($count % 2 == 0)
            <section class="padding-edition bg-edition">
					<div class="">
						<div class="row">
							<div class="about-intro">
								<div class="about-intro-img wow fadeInLeft" data-wow-delay=".55s">
									<img style="max-height:400px; width:100%;" src="{{url('/uploads/services')}}/{{$services->image_one}}" class="img-responsive" alt="Image">
								</div>
								<div class="about-intro-text wow fadeInRight" data-wow-delay=".55s">
								<div class="">
									<br>
									<div class="about-now">
										<h3>{{$services->title}}</h3>
									</div>
								</div>
									<p class="about-text">{!!html_entity_decode($services->content)!!}</p>

									<div class="clearfix mgb20"></div>
									</div>
							</div>
						</div>
					</div>
				</section>
				<div class="divider-spectrum wow fadeIn" data-wow-delay=".65s"></div>
            @else
            <section class="padding-edition bg-edition">
					<div class="">
						<div class="row">
							<div class="about-intro">

								<div class="about-intro-text wow fadeInLeft" data-wow-delay=".55s">
                           <div class="">
                              <br>
                              <div class="about-now">
                                 <h3>{{$services->title}}</h3>
                              </div>
                           </div>
									<p class="about-text">{!!html_entity_decode($services->content)!!}</p>

									<div class="clearfix mgb20"></div>
								</div>
                        <div class="about-intro-img wow fadeInRight" data-wow-delay=".55s">
									<img style="max-height:400px; width:100%;" src="{{url('/uploads/services')}}/{{$services->image_three}}" class="img-responsive" alt="Image">
								</div>
							</div>
						</div>
					</div>
				</section>
				@if($LastCount == $count)

				@else
				<div class="divider-spectrum-right wow fadeIn" data-wow-delay=".65s"></div>
				@endif
            @endif
			<!--  -->

				<!--  -->
    <?php $count = $count+1 ?>
	@endforeach




@endforeach

@endsection

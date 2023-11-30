@extends('front.master')
@section('content')
        <?php $Page = DB::table('page')->where('page_name','Services')->get(); ?>
        @foreach($Page as $page)
        <section>
            <div class="sub-header-breadcrumbs sub-header-1-breadcrumbs sub-header-contact-breadcrumbs fake-position">
                <div class="sub-header-content-breadcrumbs">
                    <h2 class="text-cap white-text">{{$page_title}}</h2>
                    <ol class="breadcrumb breadcrumb-arc text-cap">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                           <a href="{{url('/')}}/portfolio">Portfolio</a>
                       </li>
                        <li class="active">{{$page_title}}</li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- End Section Sub Header -->
        @foreach($Portfolio as $portfolio)
  
        <!--  -->
        <div class="clearfix fake-position"></div>
            <section class="mgt60">
               <div class="single-project-warp single-project-warp-3">
                  <div class="row">
                     <div class="pj-img-demo">
                        @if($portfolio->image_one == "" or $portfolio->image_one == null)

                        @else
                        <img src="{{url('/')}}/uploads/portfolio/{{$portfolio->image_one}}" class="img-responsive" alt="Image">
                        @endif
                        <div class="divider-line"></div>
                        @if($portfolio->image_two == "" or $portfolio->image_two == null)

                        @else
                        <img src="{{url('/')}}/uploads/portfolio/{{$portfolio->image_two}}" class="img-responsive" alt="Image">
                        @endif
                        <div class="divider-line"></div>
                        @if($portfolio->image_three == "" or $portfolio->image_three == null)

                        @else
                        <img src="{{url('/')}}/uploads/portfolio/{{$portfolio->image_three}}" class="img-responsive" alt="Image">
                        @endif
                        <div class="divider-line"></div>
                        @if($portfolio->image_four == "" or $portfolio->image_four == null)

                        @else
                        <img src="{{url('/')}}/uploads/portfolio/{{$portfolio->image_four}}" class="img-responsive" alt="Image">
                        @endif
                        <div class="divider-line"></div>
                        @if($portfolio->image_five == "" or $portfolio->image_five == null)

                        @else
                        <img src="{{url('/')}}/uploads/portfolio/{{$portfolio->image_five}}" class="img-responsive" alt="Image">
                        @endif
                        <div class="divider-line"></div>
                       
                     </div>
                     <!-- End Project Description -->
                     <div class="pj-info">
                        <h3 class="text-cap">Portfolio Detail</h3>
                        <div class="pj-description">
                            {!!html_entity_decode($portfolio->content)!!}
                        </div>
                        <!-- End Project Description -->
                        <div class="clearfix mgb20"></div>
                        <div class="divider-line mgb20"></div>
                        <div>
                           <h5>Client:</h5>
                           {{$portfolio->client}}
                        </div>
                        <div>
                           <h5>Location:</h5>
                           {{$portfolio->location}}
                        </div>
                        <div>
                           <h5>Service Rendered:</h5>
                           {{$portfolio->service}}
                        </div>
                     
                        <div class="clearfix mgb20"></div>
                        <div class="divider-line mgb20"></div>
                        <div class="social-share">
                           <p class="text-cap">Share:</p>
                           <a href="https://www.facebook.com/sharer.php?u={{url('/')}}/portfolio/{{$portfolio->slug}}"><i class="fa fa-facebook"></i></a>
                           <a href="https://twitter.com/intent/tweet?text={{$portfolio->title}}&url={{url('/')}}/portfolio/{{$portfolio->slug}}"><i class="fa fa-twitter"></i></a>
                         
                        </div>
                     </div>
                     <!-- End Project Info -->
                  </div>
                  <div class="divider-line"></div>
               </div>
               <!-- End Row -->
            </section>
            <!-- End Portfolio Detail 1 -->
        <!--  -->

        @endforeach
	
   

@endforeach

@endsection
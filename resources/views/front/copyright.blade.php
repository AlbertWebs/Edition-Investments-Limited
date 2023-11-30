@extends('front.master')
@section('content')
<?php $Page = DB::table('page')->where('page_name','About')->get(); ?>
@foreach($Page as $page)
   
 
        <section>
            <div class="sub-header-breadcrumbs sub-header-1-breadcrumbs sub-header-contact-breadcrumbs fake-position">
                <div class="sub-header-content-breadcrumbs">
                    <h2 class="text-cap white-text">Copyright Statement</h2>
                    <ol class="breadcrumb breadcrumb-arc text-cap">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="active">Copyright Statement</li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- End Section Sub Header -->

        @foreach($copyright as $copyright)
        <section class="padding bg-grey">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 padding-top-50">
                        <div class="accordion-style-light no-round">
                            <div class="accordion-warp">

                            <div class="clearfix"></div>
                            <div class="panel-group" id="accordion2">
                                <div class="panel panel-default">
                                    
                                    <div id="collapseOne2" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                        <div class="accordion-content">
                                            <p>{!!html_entity_decode($copyright->content)!!}</p>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End panel group -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endforeach
        
              


@endforeach

@endsection
@extends('front.master')
@section('content')
<?php $Page = DB::table('page')->where('page_name','About')->get(); ?>
@foreach($Page as $page)
   
 
        <section>
            <div class="sub-header-breadcrumbs sub-header-1-breadcrumbs sub-header-contact-breadcrumbs fake-position">
                <div class="sub-header-content-breadcrumbs">
                    <h2 class="text-cap white-text">Privacy Policy</h2>
                    <ol class="breadcrumb breadcrumb-arc text-cap">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="active">Privacy Policy</li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- End Section Sub Header -->

     
        <section class="padding bg-grey">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 padding-top-50">
                                <div class="accordion-style-light no-round">
                                    <div class="accordion-warp">

                                    <div class="clearfix"></div>
                                      <div class="panel-group" id="accordion2">
                                      <?php $count = 1; ?>
                                          @foreach($Terms as $value)
                                          @if($count == 1)
                                          <div class="panel panel-default">
                                              <div class="panel-heading">
                                                  <h4 class="panel-title">
                                                  <a data-toggle="collapse" data-parent="#accordion2" href="#collapseOne2">0{{$count}}. {{$value->title}}</a>
                                                  </h4>
                                              </div>
                                              <div id="collapseOne2" class="panel-collapse collapse in">
                                                  <div class="panel-body">
                                                  <div class="accordion-content">
                                                      <p>{!!html_entity_decode($value->content)!!}  </p>
                                                  </div>
                                                  </div>
                                              </div>
                                          </div>
                                          @else
                                          <div class="panel panel-default">
                                              <div class="panel-heading">
                                                  <h4 class="panel-title">
                                                  <a data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo_{{$value->id}}" class="collapsed">0{{$count}}. {{$value->title}}</a>
                                                  </h4>
                                              </div>
                                              <div id="collapseTwo_{{$value->id}}" class="panel-collapse collapse">
                                                  <div class="panel-body">
                                                  <div class="accordion-content">
                                                      <p>{!!html_entity_decode($value->content)!!}  </p>
                                                  </div>
                                                  </div>
                                              </div>
                                          </div>
                                          @endif
                                          <?php $count = $count + 1 ?>
                                          @endforeach
                                     
                                          
                                       
                                      </div>
                                      <!-- End panel group -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
              


@endforeach

@endsection
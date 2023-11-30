<div id="left" >
            <div class="media user-media well-small">
                <a class="user-link" href="{{url('/dashboard')}}/editAdmin/{{Auth::user()->id}}">
                    <img width="64" height="64" class="media-object img-thumbnail user-img" alt="{{Auth::user()->name}}" src="{{url('/')}}/uploads/admins/{{Auth::user()->image}}" />
                </a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading"><small><b> {{Auth::user()->name}}</b></small> </h5>
                    <ul class="list-unstyled user-info">
                        
                        <li>
                             <a href="{{url('/admin')}}/editdashboard/{{Auth::user()->id}}" class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online
                           
                        </li>
                       
                    </ul>
                </div>
                <br />
            </div>

            <ul id="menu" class="collapse">

                
                <li class="panel active">
                    <a href="{{url('/dashboard')}}" >
                        <i class="icon-home"></i> Dashboard
	   
                       
                    </a>                   
                </li>


                <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#error-nav">
                        <i class="icon-folder-open"></i>  Pages
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-success">8</span>&nbsp;
                    </a>
                    <ul class="collapse" id="error-nav">
                        <?php $Page = DB::table('page')->get(); ?>
                        @foreach($Page as $page)
                        <li><a href="{{url('/dashboard/')}}/pages/{{$page->page_name}}"><i class="icon-angle-right"></i> {{$page->page_name}}  </a></li>
                        @endforeach
                        <center>&nbsp;</center>
                        <li><a href="{{url('/dashboard/about')}}"><i class="icon-angle-right"></i> About  </a></li>
                        <li><a href="{{url('/dashboard/privacy')}}"><i class="icon-angle-right"></i> Privacy  </a></li>
                        <li><a href="{{url('/dashboard/terms')}}"><i class="icon-angle-right"></i> Terms  </a></li>
                        <li><a href="{{url('/dashboard/copyright')}}"><i class="icon-angle-right"></i> Copyright  </a></li>
                        
                    </ul>
                </li>
              
                
                <li><a href="{{url('dashboard/addService')}}"><i class="icon-plus"></i>  <i class="icon-user-md"></i> Add Product & Services </a></li>
                <li><a href="{{url('dashboard/addPortfolio')}}"><i class="icon-plus"></i>  <i class="icon-thumbs-up-alt"></i> Add Portfolio </a></li>
                <li><a href="{{url('dashboard/addBlog')}}"><i class="icon-plus"></i>  <i class="icon-thumbs-up-alt"></i> Add News & Blog </a></li>

                <!-- <li><a href="{{url('dashboard/addCategory')}}"><i class="icon-plus"></i>  <i class="icon-user-md"></i> Add Category </a></li> -->
                
                
                <li><a href="{{url('dashboard/addTestimonial')}}"><i class="icon-plus"></i>  <i class="icon-thumbs-up-alt"></i> Add Testimonial </a></li>
                
                
                <li><a href="{{url('dashboard/addAdmin')}}"><i class="icon-plus"></i>  <i class="icon-user-md"></i> Add Admin & Team  </a></li>
                <li><a href="{{url('dashboard/why')}}"><i class="icon-cog"></i> Why Choose Us </a></li>
                <li><a href="{{url('dashboard/sitesettings')}}"><i class="icon-cog"></i> Site Settings </a></li>
                <!-- <li><a href="{{url('dashboard/seosettings')}}"><i class="icon-cog"></i> SEO Settings </a></li> -->
                <li><a href="{{url('dashboard/logout')}}"><i class="icon-signin"></i> Log Out </a></li>
              

           

              

            </ul>

        </div>
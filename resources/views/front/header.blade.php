<header id="mainmenu" class="header-v2 header-v4 header-border header-fix header-bg-white " data-0="padding:10px;padding-left:40px;padding-right:40px;" data-251="padding:10px; padding-left:40px;padding-right:40px;top:0;">
    <div id="info" class="topbar topbar-position topbar-dark hide-topbar" data-0="height:30px" data-251="height:0;">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6">
                    <p><a style="color:#ffffff" href="tel:{{$Settings->mobile}}">&nbsp; &nbsp;<span class="fa fa-phone"></span> Call US: {{$Settings->mobile}}</a></p>
                    <p class="">&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    <p><a style="color:#ffffff" href="mailto:{{$Settings->email}}"><span class="fa fa-envelope"></span>&nbsp;E-mail: {{$Settings->email}}</a></p>
                    
                </div>
                <div class="col-md-6 pull-right">
                    <p><a style="color:#ffffff" href="{{url('/')}}/contact-us#map"><span class="fa fa-map-marker"></span> &nbsp;Find Us: {{$Settings->location}} <span class="fa fa-book"></span></a> &nbsp;Address: {{$Settings->address}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="left-header">
            <ul class="navi-level-1">
                <li><a href="{{url('/')}}" class="logo"><img src="{{url('/uploads/logo/')}}/{{$Settings->logo}}" class="img-responsive" alt="Edition Investments Limited Logo"></a></li>
            </ul>
        </div><!-- End Left Header -->
        <nav>
            <ul id="main-navi" class="navi-level-1 hover-style-2 main-navi">
                <li class="has-sub"><a href="{{url('/')}}"><span style="<?php if($page_name == 'homepage'){ echo "color:#f15825";} ?>">Home</span></a>
                   
                </li>
                
                <li class="has-sub"><a href="{{url('/about-us')}}"><span style="<?php if($page_name == 'About Us'){ echo "color:#f15825";} ?>">About Us</span></a>
                      
                </li>
                <li class="has-sub"><a href="{{url('/products-and-services')}}"><span style="<?php if($page_name == 'Our Services'){ echo "color:#f15825";} ?>">Services</span></a>
                   
                </li>
                   <li class="has-sub"><a href="{{url('/portfolio')}}"><span style="<?php if($page_name == 'Our Portfolio'){ echo "color:#f15825";} ?>">Portfolio </span></a>
                    <ul class="navi-level-2 ">
                        <?php $Serv = DB::table('category')->get(); ?>
                        @foreach ($Serv as $ser)
                        <li><a href="{{url('/')}}/our-work/{{$ser->cat}}">{{$ser->cat}}</a></li>
                        @endforeach
                    </ul>
                   </li>
                
                <li class="has-sub"><a href="{{url('/news-and-blog')}}"><span style="<?php if($page_name == 'News'){ echo "color:#f15825";} ?>">News & Blog</span></a>
                     
                </li>
                
            
                 
                <li class="has-sub"><a href="{{url('/contact-us')}}"><span style="<?php if($page_name == 'Contact Us'){ echo "color:#f15825";} ?>">Contact Us</span></a>
                
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
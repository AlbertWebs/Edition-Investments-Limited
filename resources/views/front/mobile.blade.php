<div class="mobile-menu-first">
    <div id="mobile-menu" class="mobile-menu">
    <div class="header-mobile-menu">
      <a href="#">TOLL FREE: {{$Settings->mobile}}</a>
          <div class="mm-toggle">
            <span aria-hidden="true" class="icon_close"></span>
        </div> 
      </div> <!-- Mobile Menu -->
      <div class="mCustomScrollbar light" data-mcs-theme="minimal-dark">
  
        <ul>

            <!--  -->
            <li><a href="{{url('/')}}"><span class="active">Home</span></a>
                   
            </li>
            <li><a href="{{url('/about-us')}}"><span>About Us</span></a>
                  
            </li>
            <li><a href="{{url('/')}}/products-and-services"><span>Services</span></a>
               
            </li>
            <li><a href="{{url('/')}}/portfolio"><span>Projects</span></a>
            
             </li>
            
            <li ><a href="{{url('/')}}/news-and-blog"><span>News & Blog</span></a>
                 
            </li>
            
        
             
            <li><a href="{{url('/')}}/contact-us"><span>Contact Us</span></a>
            
            </li>
            
          </ul>
    <div class="footer-mobile-menu">
        <ul class="address-footer-mobile">
            <li><p>  {{$Settings->location}}</p></li>
            <li><p> {{$Settings->mobile}} </p></li>
            <li><p>  {{$Settings->email}}</p></li>
            
        </ul>
        <ul class="social social-fix">
            <li class="facebook"><a href="{{$Settings->facebook}}"><i class="fa fa-facebook"></i></a></li>
            <li class="twitter"><a href=" {{$Settings->twitter}}"><i class="fa fa-twitter"></i></a></li>
            {{-- <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li> --}}
            <li class="youtube"><a href=" {{$Settings->youtube}}"><i class="fa fa-youtube-play"></i></a></li>
            <li class="linkedin"><a href=" {{$Settings->linkedin}}"><i class="fa fa-linkedin"></i></a></li>
        </ul>
    </div>
      </div> <!-- /#rmm   -->
</div>
</div>
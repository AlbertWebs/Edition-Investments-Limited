<div id="right">

            
            <div class="well well-small">
                <ul class="list-unstyled">
                    <li>Admin &nbsp; : <span><?php $Admins = DB::table('admins')->get(); $Count = count($Admins); echo $Count ?></span></li>
                    <li>Users &nbsp; : <span><?php $Users = DB::table('users')->get(); $Count = count($Users); echo $Count ?></span></li>
                    <li>Subscribers &nbsp; : <span><?php $Subscribers = DB::table('subscribers')->get(); $Count = count($Subscribers); echo $Count ?></span></li>
                    
                </ul>
            </div>
            <div class="well well-small">
                <button type="button" onclick="window.open('{{url('/dashboard/version')}}','_self')" class="btn btn-block"> Version Control </button>
                <button type="button" onclick="window.open('{{url('/dashboard/categories')}}','_self')" class="btn btn-warning btn-block"> Categories</button>
                <!-- <button type="button" onclick="window.open('{{url('/dashboard/brands')}}','_self')" class="btn btn-warning btn-block"> Brands</button> -->
                <button type="button" onclick="window.open('{{url('/dashboard/services')}}','_self')" class="btn btn-warning btn-block"> Product & Services</button>
                <button type="button" onclick="window.open('{{url('/dashboard/blog')}}','_self')" class="btn btn-warning btn-block"> Blog Posts </button>
    
                <button type="button" onclick="window.open('{{url('/dashboard/testimonials')}}','_self')" class="btn btn-success btn-block"> Testimonials </button>
                <button type="button" onclick="window.open('{{url('/dashboard/portfolio')}}','_self')" class="btn btn-success btn-block"> Portfolio </button>
                <!-- <button type="button" onclick="window.open('{{url('/dashboard/Products_offer')}}','_self')" class="btn btn-success btn-block"> Offers </button> -->

                
                <button type="button" onclick="window.open('{{url('/dashboard/notifications')}}','_self')" class="btn btn-danger btn-block"> Notifications </button>
                <button type="button" onclick="window.open('{{url('/dashboard/subscribers')}}','_self')" class="btn btn-danger btn-block"> subscribers </button>
                <button type="button" onclick="window.open('{{url('/dashboard/users')}}','_self')" class="btn btn-success btn-block"> Users </button>
                <button type="button" onclick="window.open('{{url('/dashboard/updates')}}','_self')" class="btn btn-inverse btn-block"> Updates </button>
               
            </div>
            
          
            
         

        </div>
<section style="background-image: url('{{url('/')}}/uploads/pages/{{$page->page_banner}}'); " class="hero-now ">
    <!--  -->
    <!-- BEGIN: SEARCH SECTION -->
    <div class="row">
        <div class="container">
            <div class="col-md-8 col-sm-6">
                <div>
                    <div class="hotel-tagline  cd-intro">
                        
                        <h1 class="cd-headline letters typee" style="font-family: 'Montserrat';">
                                <span>{!!html_entity_decode($page->page_heading)!!}</span> 
                                <span class="cd-words-wrapper waiting">
                                <!-- <b class="is-visible">Warm Interiors</b>
                                <b class="is-visible">Elegant Interiors</b>
                                <b>Awesome Interiors</b> -->
                            </span>
                        </h1>
                    </div>
                </div>
            </div>
            
            
            <div class="col-md-4 col-sm-6" >
                <div class="room-check" id="widget1">
                    <h4 class="">GET A QUOTE</h4>
                    <button id="button2"><i class="fa fa-close fa-fw"></i></button>
                    
                    <div class="clearfix"></div>
                    <div class="alert alert-success" id="alert-success" role="alert" style="display:none"></div>
                    <div class="clearfix"></div>
                    <div class="room-check-body">
                        
                        <form method="POST" id="quote-form" action="{{url('/getQuote')}}">
                            {{ csrf_field() }}
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                                <input style="border-left-style: hidden;" type="text" id="check_in" name="name" class="form-control" placeholder="Your Name" required>
                                
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-mobile fa-fw"></i></span>
                                <input style="border-left-style: hidden;" type="text" id="check_in" name="phone" class="form-control" placeholder="Your Phone" required>
                                
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span>
                                <input style="border-left-style: hidden;" type="text" id="check_in" name="email" class="form-control" placeholder="Your e-mail" required>
                                
                            </div>

                            <!--<div class="input-group">-->
                            <!--	<span class="input-group-addon"><i class="fa fa-home fa-fw"></i></span>-->
                            <!--	<input style="border-left-style: hidden;" type="text" id="check_in" name="type" class="form-control" placeholder="Type of Property" required>-->
                                
                            <!--</div>-->

                            <!--<div class="input-group">-->
                            <!--	<span class="input-group-addon"><i class="fa fa-wrench fa-fw"></i></span>-->
                            <!--	<input style="border-left-style: hidden;" type="text" id="check_in" name="services" class="form-control" placeholder="Type of Services" required>-->
                                
                            <!--</div>-->
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-home fa-fw"></i></span>
                                {{-- <input style="border-left-style: hidden;" type="text" id="check_in" name="type" class="form-control" placeholder="Type of Property" required> --}}
                                <select required style="border-left-style: hidden; padding:1px; font-weight: 600; color:#000000" id="check_in" name="type" class="form-control">
                                    <option>Select Type of Property</option>
                                    <option value="commercial">Commercial</option>
                                    <option value="residential">Residential</option>
                                </select>
                                
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-wrench fa-fw"></i></span>
                                {{-- <input style="border-left-style: hidden;" type="text" id="check_in" name="services" class="form-control" placeholder="Type of Services" required> --}}
                                <select required style="border-left-style: hidden; padding:1px; font-weight: 600; color:#000000" id="check_in" name="services" class="form-control">
                                    <option>Select Type of services</option>
                                    <option value="Kitchen">Kitchen</option>
                                    <option value="wardrobes">Wardrobes</option>
                                    <option value="doors">Doors</option>
                                    <option value="flooring">Flooring</option>
                                    <option value="fittings">Fittings</option>
                                </select>
                            </div>

                            <div class="input-group">
                                <span  class="input-group-addon"><i class="fa fa-comment fa-fw"></i></span>
                                <textarea style="height:65px" id="check_in" name="message" class="form-control" placeholder="Your Message" required></textarea>
                                
                            </div>
                            
                        
                            
                            <div class="text-caenter">
                                <button id="quoteBtn" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: SEARCH SECTION -->
    <!--  -->
</section>
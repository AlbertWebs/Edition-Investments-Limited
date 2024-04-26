<footer class="footer-v3 fake-positio background-tint">
    <div class="container">
        <div class="row">
            <div class="footer-col-2">
                <h4 class="text-cap">
                    NAVIGATION:
                </h4>
                <ul class="list-link-footer quick-links">
                    <li><a class="text-cap" href="{{url('/')}}">Home</a></li>
                    <li><a class="text-cap" href="{{url('/')}}/about-us">About Us</a></li>
                    <li><a class="text-cap" href="{{url('/')}}/products-and-services">Services</a></li>
                    <li><a class="text-cap" href="{{url('/')}}/portfolio">Portfolio</a></li>
                    <li><a class="text-cap" href="{{url('/')}}/news-and-blog">News & Blog</a></li>
                    <li><a class="text-cap" href="{{url('/')}}/contact-us">Contact Us</a></li>
                    <li><a class="text-cap" href="{{url('/')}}/copyright">Copyrights</a></li>
                    <li><a class="text-cap" href="{{url('/')}}/csr">CSR</a></li>
                    <li><a class="text-cap" href="{{url('/')}}/about-us#team">Our Team</a></li>
                    <li><a class="text-cap" href="{{url('/')}}/contact-us#map">Our Location</a></li>
                </ul>
            </div>

            <div class="footer-col-4">
                <h4 class="text-cap">RECENT COMMENTS:</h4>
                <?php
                    $BlogFooter = DB::table('blog')->orderBy('id','DESC')->limit(2)->get();
                ?>
                @foreach($BlogFooter as $BlogFooter)

                <div class="gallery-warper">
                    <div>
                        <p class="heading"><span><a style="color:#f15825" href="">{{date('M', strtotime($BlogFooter->created_at))}} {{date('d', strtotime($BlogFooter->created_at))}}, {{date('Y', strtotime($BlogFooter->created_at))}}</a></span> &nbsp; &nbsp; <i>By {{$BlogFooter->author}}</i></p>
                        <p class="content">{!!html_entity_decode($BlogFooter->meta)!!}</p>
                    </div>
                </div>

                @endforeach

            </div>


            <div class="footer-col-3">
                <h4 class="text-cap">
                    Contact US:
                </h4>
                <ul class="list-link-footer list-address">
                    <li> <a style="color:#ffffff; padding-left:0;" href="tel:{{$Settings->mobile}}">{{$Settings->mobile}}</a><br><a style="color:#ffffff; padding-left:0;" href="tel:{{$Settings->mobile_one}}">{{$Settings->mobile_one}}</a></li>


                    <li> <a style="color:#ffffff; padding-left:0;" href="mailto:{{$Settings->email}}">{{$Settings->email}}</a><br>{{$Settings->url}}</li>

                    <li> <a style="color:#ffffff; padding-left:0;" href="{{url('/')}}/contact-us#map">{{$Settings->location}}</a><br>{{$Settings->address}}</li>



                </ul>
            </div>

        </div>
    </div>
</footer>

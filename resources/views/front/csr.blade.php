@extends('front.master')
@section('content')
<?php $Page = DB::table('page')->where('page_name','About')->get(); ?>
@foreach($Page as $page)


        <section>
            <div class="sub-header-breadcrumbs sub-header-1-breadcrumbs sub-header-contact-breadcrumbs fake-position">
                <div class="sub-header-content-breadcrumbs">
                    <h2 class="text-cap white-text">Corporate Social Responsibility</h2>
                    <ol class="breadcrumb breadcrumb-arc text-cap">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="active">Corporate Social Responsibility</li>
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
                                <div class="panel panel-default">

                                    <div id="collapseOne2" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                        <div class="accordion-content">
                                            <p>

                                                <div class="csr-content">
                                                    <h3>Corporate Social Responsibility (CSR) at Edition Investments</h3>
                                                    <p>At Edition Investments, we believe in the profound impact businesses can have on society and the environment. We are committed to making a positive difference in the world around us, and our Corporate Social Responsibility (CSR) initiatives reflect this commitment.</p>

                                                    <h3>Planting the Seeds of Change</h3>
                                                    <p>For the past five years, Edition Investments has been dedicated to environmental stewardship through our tree planting initiatives. We are proud to announce that, thanks to our concerted efforts and partnerships with environmental organizations, we have planted over 10 thousand trees in regions around the globe.</p>

                                                    <h3>Why Trees Matter</h3>
                                                    <p>Trees are the lungs of our planet, playing a crucial role in combating climate change by absorbing carbon dioxide and releasing oxygen. They provide habitats for wildlife, help prevent soil erosion, and contribute to cleaner air and water. By planting trees, we are investing in a healthier, more sustainable future for generations to come.</p>

                                                    <h3>Our Impact in Action</h3>
                                                    <p>Through strategic partnerships with local communities and environmental organizations, Edition Investments has facilitated tree planting projects in diverse ecosystems. From reforestation efforts in deforested areas to urban tree planting initiatives, our projects aim to restore and enhance ecosystems while fostering community engagement and empowerment.</p>

                                                    <h3>Looking Ahead</h3>
                                                    <p>As we look to the future, Edition Investments remains committed to expanding our CSR efforts and making a lasting impact on the world. We recognize that our responsibility extends beyond our bottom line and that by investing in our planet and its people, we can create a brighter, more sustainable future for all.</p>

                                                    <p>Join us in our mission to make a difference. Together, we can cultivate a greener, more resilient world.</p>

                                                    {{-- <p><em>Edition Investments - Investing in a Better Tomorrow.</em></p> --}}
                                                </div>

                                            </p>
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

@endsection

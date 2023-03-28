@extends('Website.master')
@section('website')
    <section id="home" class="home">
        <!-- Carousel -->
        <div>
            <!-- Carousel-inner -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="{{ asset('assets/images/slider_img.jpg') }}" alt="Construction">
                    <div class="overlay">
                        <div class="carousel-caption">
                            <h3></h3>
                            <br><br>
                            <br><br>
                            <br><br>

                            <h1 class="mt-4">Services</h1>
                        </div>
                    </div>
                </div>
            </div><!-- Carousel-inner end -->

        </div><!-- Carousel end-->

    </section>



    <!-- Why us -->
    <section id="why_us">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="head_title">
                        <h2>WHY CHOOSE US?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="why_us_item">
                        <span class="fa fa-leaf"></span>
                        <h4>We deliver quality</h4>
                        <p>we pride ourselves on delivering exceptional quality in everything we do. From our products and
                            services to our customer support, we are committed to exceeding your expectations every step of
                            the way. </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="why_us_item">
                        <span class="fa fa-futbol-o"></span>
                        <h4>Always on time</h4>
                        <p>We understand that quality is essential to building strong, long-lasting relationships with our
                            customers, which is why we strive to deliver the highest level of excellence in all aspects of
                            our business.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="why_us_item">
                        <span class="fa fa-group"></span>
                        <h4>We are pasionate</h4>
                        <p>Our team is made up of skilled professionals who are passionate about their work and dedicated to
                            providing the best possible results. We use only the best materials and technology to ensure
                            that our products</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="why_us_item">
                        <span class="fa fa-line-chart"></span>
                        <h4>Professional Services</h4>
                        <p>We use only the best materials and technology to ensure that our products and services are of the
                            highest quality, and we are constantly refining our processes to improve our performance and
                            exceed industry standards.</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Why us end -->
@endsection

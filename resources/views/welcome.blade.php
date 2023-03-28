@extends('Website.master')
@section('website')
    <section id="home" class="home">
        <!-- Carousel -->
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <!-- Carousel-inner -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="{{ asset('assets/images/slider_img.jpg') }}" alt="Construction">
                    <div class="overlay">
                        <div class="carousel-caption">
                            <h3>We are Certified Engineers</h3>
                            <h1>Construction Services</h1>
                            <h1 class="second_heading">Creative & Professional</h1>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                                quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
                            {{-- <a class="btn know_btn">know more</a>
                            <a class="btn know_btn">view project</a> --}}
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('assets/images/slider_img2.jpg') }}" alt="Construction">
                    <div class="overlay">
                        <div class="carousel-caption">
                            <h3>We are Certified Engineers</h3>
                            <h1>Construction Services</h1>
                            <h1 class="second_heading">Creative & Professional</h1>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                                quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
                            {{-- <a class="btn know_btn">know more</a>
                            <a class="btn know_btn">view project</a> --}}
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('assets/images/slider_img3.jpg') }}" alt="Construction">
                    <div class="overlay">
                        <div class="carousel-caption">
                            <h3>We are Certified Engineers</h3>
                            <h1>Construction Services</h1>
                            <h1 class="second_heading">Creative & Professional</h1>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                                quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
                            {{-- <a class="btn know_btn">know more</a>
                            <a class="btn know_btn">view project</a> --}}
                        </div>
                    </div>
                </div>
            </div><!-- Carousel-inner end -->



            <!-- Controls -->
            <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div><!-- Carousel end-->

    </section>


    <!-- About -->
    <section id="about">
        <div class="container about_bg">
            <div class="row">
                <div class="col-lg-7 col-md-6">
                    <div class="about_content">
                        <h2>Welcome to Our Company</h2>
                        <h3>Aliquam lacus purus, auctor malesuada</h3>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                            consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
                            est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
                        <p>sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                            voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
                            laboriosam, nisi ut aliquid ex ea commodi consequatur? </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-lg-offset-1">
                    <div class="about_banner">
                        <img src="{{ asset('assets/images/man.png') }}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section><!-- About end -->

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
                        <p>we pride ourselves on delivering exceptional quality in everything we do. From our products and services to our customer support, we are committed to exceeding your expectations every step of the way.  </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="why_us_item">
                        <span class="fa fa-futbol-o"></span>
                        <h4>Always on time</h4>
                        <p>We understand that quality is essential to building strong, long-lasting relationships with our customers, which is why we strive to deliver the highest level of excellence in all aspects of our business.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="why_us_item">
                        <span class="fa fa-group"></span>
                        <h4>We are pasionate</h4>
                        <p>Our team is made up of skilled professionals who are passionate about their work and dedicated to providing the best possible results. We use only the best materials and technology to ensure that our products</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="why_us_item">
                        <span class="fa fa-line-chart"></span>
                        <h4>Professional Services</h4>
                        <p>We use only the best materials and technology to ensure that our products and services are of the highest quality, and we are constantly refining our processes to improve our performance and exceed industry standards.</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Why us end -->

    <!-- Services -->
    <section id="services">
        <div class="container">
            <h2>Our Products</h2>
            <div class="row">
                @foreach ($products as $items)
                    <div class="col-md-4">
                        <div class="service_item">
                            <img style="height: 253px;" src="images/{{ $items->feature_img }}" alt="Our Services" />
                            <h3>{{ $items->name }}</h3>
                            <p>{{ $items->desc }}</p>
                            <p>product by {{ $items->productuser->name }}</p>
                            <a style="font-size: 11px;" href="/single-product/{{ $items->id }}" class="btn know_btn">View
                                product</a>
                        </div>
                    </div>
                @endforeach
                <div class="d-flex justify-content-center">
                    {!! $products->links() !!}
                </div>
            </div>

        </div>
    </section><!-- Services end -->


    <!-- Testimonial -->
    <section id="testimonial">
        <div class="container text-center testimonial_area">
            <h2>Customer Reviews</h2>
            <div class="row">
                @foreach ($productsRe as $item)
                    <div class="col-md-4">
                        <div class="testimonial_item">
                            <div class="testimonial_content text-left">
                                <label for="">Reviw</label>
                                <p>
                                    {{ $item->review }}
                                </p>
                                <label for="">Product Name</label>
                                <p>
                                    {{ $item->product->name }}
                                </p>
                            </div>
                            <img src="/images/{{ $item->user->profile }}" alt="Testimonial" />
                            <p class="worker_name">{{ $item->username }}</p>
                        </div>
                    </div>
                @endforeach
                <div class="d-flex justify-content-center">
                    {!! $products->links() !!}
                </div>
            </div>
        </div>
    </section><!-- Testimonial end -->

    <!-- Contact form -->
    <section id="contact_form">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Do you have any questions?</h2>
                    <h2 class="second_heading">Feel free to contact us!</h2>
                </div>
                <form role="form" class="form-inline text-right col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="5" id="msg" placeholder="Message"></textarea>
                    </div>
                    <button type="submit" class="btn submit_btn">Submit</button>
                </form>
            </div>
        </div>
    </section><!-- Contact form end -->
@endsection

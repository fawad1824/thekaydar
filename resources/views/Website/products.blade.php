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

                            <h1>Products</h1>
                        </div>
                    </div>
                </div>
            </div><!-- Carousel-inner end -->
        </div><!-- Carousel end-->
    </section>


    <!-- Services -->
    <section id="services">
        <div class="container">
            <h2>OUR PRODUCTS</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="service_item">
                        <img src="{{ asset('assets/images/service_img1.jpg') }}" alt="Our Services" />
                        <h3>CONSTRUCTION MANAGEMENT</h3>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                            consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
                            est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
                        <a href="#services" class="btn know_btn">know more</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service_item">
                        <img src="{{ asset('assets/images/service_img2.jpg') }}" alt="Our Services" />
                        <h3>RENOVATION</h3>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                            consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
                            est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
                        <a href="#services" class="btn know_btn">know more</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service_item">
                        <img src="{{ asset('assets/images/service_img3.jpg') }}" alt="Our Services" />
                        <h3>ARCHITECTURE</h3>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                            consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
                            est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
                        <a href="#services" class="btn know_btn">know more</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Services end -->
@endsection

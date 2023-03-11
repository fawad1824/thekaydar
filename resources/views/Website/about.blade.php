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
                        <h1 class="mt-4">About Us</h1>
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
                        <a class="btn know_btn">know more</a>
                        <a class="btn know_btn">view project</a>
                    </div>
                </div>
            </div>
        </div><!-- Carousel-inner end -->

    </div><!-- Carousel end-->

</section>


<!-- About -->
<section class="mt-5" id="about">
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
                    <a class="btn know_btn">know more</a>
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


@endsection

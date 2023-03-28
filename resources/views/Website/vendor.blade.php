@extends('Website.master')
@section('website')
    <style>
        .btn.know_btn {
            background: #ffcb0f none repeat scroll 0 0;
            border-radius: 30px;
            color: #fff;
            font-family: "futura_ltbold", sans-serif;
            font-size: 11px;
            padding: 10px 20px;
            text-transform: uppercase;
            border: 1px solid transparent;
        }
    </style>
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

                            <h1>Vendors</h1>
                        </div>
                    </div>
                </div>
            </div><!-- Carousel-inner end -->
        </div><!-- Carousel end-->
    </section>


    <!-- Services -->
    <section id="services">
        <div class="container">
            <h2>OUR Vendors</h2>
            <div class="row">
                @foreach ($user as $item)
                    <div class="col-md-4">
                        <div class="service_item">
                            <img style="height: 282px;" src="images/{{ $item->profile }}" alt="Our Services" />
                            <h3>{{ $item->name }}</h3>
                            <a href="/vendor/{{ $item->id }}" class="btn know_btn">View Profile</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section><!-- Services end -->
@endsection

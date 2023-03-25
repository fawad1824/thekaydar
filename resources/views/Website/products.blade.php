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
@endsection

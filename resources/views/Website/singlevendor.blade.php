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
                    <img style="height: 513px;" src="/images/{{ $user->profile }}" alt="Construction">
                    <div class="overlay">
                        <div class="carousel-caption">
                            <h3></h3>
                            <br><br>
                            <br><br>
                            <br><br>

                            <h1>{{ $user->name }}</h1>
                        </div>
                    </div>
                </div>
            </div><!-- Carousel-inner end -->
        </div><!-- Carousel end-->
    </section>
    <style>
        .user {
            display: inline-block;
            width: 100px;
            height: 100px;
            border-radius: 50%;

            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
        }
    </style>

<br><br>
    <!-- Services -->
    <section class="home mt-5 mb-5 pt-5">
        <div class="container">
            <div class="row m-2">
                <div class="col-lg-4">
                    <div class="form-group">
                        <p><img class="user" alt="80x80" src="/images/{{ $user->profile }}"
                            alt=""></p>
                    </div>
                    <div class="form-group">
                        <label for="">Name</label>
                        <p>{{ $user->name }}</p>
                    </div>
                    <div class="form-group">
                        <label for="">Phone</label>
                        <p>{{ $user->phone }}</p>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <p>{{ $user->email }}</p>

                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        @foreach ($products as $items)
                            <div class="col-md-4">
                                <div class="service_item">
                                    <img style="height: 253px;" src="/images/{{ $items->feature_img }}" alt="Our Services" />
                                    <h3>{{ $items->name }}</h3>
                                    <p>{{ $items->desc }}</p>
                                    <p>product by {{ $items->productuser->name }}</p>
                                    <a style="font-size: 11px;" href="/single-product/{{ $items->id }}"
                                        class="btn know_btn">View
                                        product</a>
                                </div>
                            </div>
                        @endforeach
                        <div class="d-flex justify-content-center">
                            {!! $products->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

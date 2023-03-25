@extends('Website.master')
@section('website')
    <style>
        .carousel-inner {
            position: relative;
            width: 100%;
            overflow: hidden;
            height: 592px;
        }
    </style>
    <section id="home" class="home">
        <!-- Carousel -->
        <div>
            <!-- Carousel-inner -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="/images/{{ $products->feature_img }}" alt="Construction">
                    <div class="overlay">
                        <div class="carousel-caption">
                            <h3></h3>
                            <br><br>
                            <br><br>
                            <br><br>

                            <h1 class="mt-4">Prodict Detail</h1>
                        </div>
                    </div>
                </div>
            </div><!-- Carousel-inner end -->

        </div><!-- Carousel end-->

    </section>




    <div style="padding-top: 50px;padding-bottom: 50px" class="container">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="row">
            <div class="col-lg-6">
                <img src="/images/{{ $products->feature_img }}" alt="">
            </div>
            <div class="col-lg-6">
                <h4>Product Detail</h4>
                <p><b>Product Name : </b>{{ $products->name }}</p>
                <p><b>Product Category : </b>{{ $products->category->name }}</p>
                <p><b>Product QTY : </b>{{ $products->qty . ' ' . $productsPe->name }}</p>
                <p><b>Product Price : </b>{{ $products->price }}</p>
                <p><b>Product Desciption</b>
                    <br>
                    {{ $products->desc }}
                </p>


                <div class=" row">
                    <!-- panel-footer -->
                    <div class="col-xs-3 text-left">
                        @if ($products->qty != '0')
                            <div class="previous">
                                <button style="background: #FFCB0F; border: none;" type="button"
                                    class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModalCenter">
                                    Booking Now
                                </button>
                            </div>
                        @else
                            <div class="previous">
                                <button style="background: #FFCB0F; border: none;" class="btn btn-primary btn-lg">
                                    Out of Stock
                                </button>
                            </div>
                        @endif

                    </div>
                    {{-- <div class="col-xs-3 text-right">
                        <div class="next">
                            <button style="background: #FFCB0F;border: none;" type="button" class="btn btn-primary btn-lg">
                                Add to Card
                            </button>
                        </div>
                    </div> --}}
                </div><!-- end panel-footer -->

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

                <div style="padding-top: 30px;padding-bottom: 50px;">
                    <h4>Vendor Detail</h4>
                    <a href="/single-vendor/{{ $products->productuser->id }}">
                        <p><img class="user" alt="80x80" src="/images/{{ $products->productuser->profile }}"
                                alt=""></p>
                        <p><b>Name : </b>{{ $products->productuser->name }}</p>
                    </a>

                </div>


            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Product Booking</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @if (Auth::check())
                        @if ($booking)
                            <p>Your Already Book this </p>
                            <a href="/products" style="background: #FFCB0F; border: none;" class="btn btn-primary">View More
                                Products</a>
                        @else
                            <form action="/productbooking" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" readonly class="form-control" name="name"
                                        value="{{ Auth::user()->name }}">
                                    <input type="hidden" hidden class="form-control" name="productID"
                                        value="{{ $id }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" readonly class="form-control" name="email"
                                        value="{{ Auth::user()->email }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Phone</label>
                                    <input type="tel" required class="form-control" name="tele">
                                </div>
                                <div class="form-group">
                                    <label for="">Whats App</label>
                                    <input type="tel" required class="form-control" name="whats">
                                </div>
                                <div class="form-group">
                                    <label for="">Address</label>
                                    <input type="text" required class="form-control" name="Address">
                                </div>
                                <div class="form-group">
                                    <label for="">Qty</label>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <input type="number" required class="form-control" name="qty">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" required readonly class="form-control" name="unit"
                                                value="{{ $productsPe->name }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" style="background: #FFCB0F;border: none;"
                                        class="btn btn-primary">Book Now</button>
                                </div>
                            </form>
                        @endif
                    @else
                        @if (!Auth::user())
                            <p>Please Login</p>
                            <a href="/login" style="background: #FFCB0F; border: none;"
                                class="btn btn-primary"target="_blank">Login page</a>
                        @else
                        @endif
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <section id="services">
        <div class="container">
            <h2>Other Products</h2>
            <div class="row">
                @foreach ($productsa as $items)
                    <div class="col-md-4">
                        <div class="service_item">
                            <img style="height: 253px;" src="/images/{{ $items->feature_img }}" alt="Our Services" />
                            <h3>{{ $items->name }}</h3>
                            <p>{{ $items->desc }}</p>
                            <p>product by {{ $items->productuser->name }}</p>
                            <a style="font-size: 11px;" href="/single-product/{{ $items->id }}"
                                class="btn know_btn">View product</a>
                        </div>
                    </div>
                @endforeach
                <div class="d-flex justify-content-center">
                    {!! $productsa->links() !!}
                </div>
            </div>

        </div>
    </section><!-- Services end -->
@endsection

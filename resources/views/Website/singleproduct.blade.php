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

        <div class="row">
            <div class="col-lg-6">
                <img src="/images/{{ $products->feature_img }}" alt="">
            </div>
            <div class="col-lg-6">
                <h4>Product Detail</h4>
                <p><b>Product Name : </b>{{ $products->name }}</p>
                <p><b>Product Category : </b>{{ $products->category->name }}</p>
                <p><b>Product Price : </b>{{ $products->price }}</p>
                <p><b>Product Desciption</b>
                    <br>
                    {{ $products->desc }}
                </p>


                <div class=" row">
                    <!-- panel-footer -->
                    <div class="col-xs-3 text-left">
                        <div class="previous">
                            <button style="background: #FFCB0F; border: none;" type="button" class="btn btn-primary btn-lg"
                                data-toggle="modal" data-target="#exampleModalCenter">
                                Booking Now
                            </button>
                        </div>
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
                        @if (Auth::user()->name && Auth::user()->email && Auth::user()->userdetail->phone && Auth::user()->userdetail->whatsapp)
                            <form action="">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" name="name"
                                        value="{{ Auth::user()->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control" name="email"
                                        value="{{ Auth::user()->email }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Phone</label>
                                    <input type="tele" class="form-control" name="tele"
                                        value="{{ Auth::user()->userdetail->phone }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Whats App</label>
                                    <input type="tele" class="form-control" name="whats"
                                        value="{{ Auth::user()->userdetail->whatsapp }}">
                                </div>
                            </form>
                        @endif
                    @else
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection

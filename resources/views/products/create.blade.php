@extends('layouts.master')

@section('content')
    @if (Route::is('add.products'))
        <div class="card card-table-two">
            <div class="d-flex justify-content-between">
                <h4 class="card-title mb-1">{{ $title }}</h4>
            </div>

            <form method="post" action="/products-store" enctype="multipart/form-data"class="mt-5">
                @csrf
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" required class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="">Category</label>
                    <select name="category" id="" class="form-control">
                        <option value="">Select Category</option>
                        @foreach ($category as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Category</label>
                    <select name="specification" id="" class="form-control">
                        <option value="">Select Product Specification</option>
                        @foreach ($productSpec as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Qty</label>
                    <input type="number" required class="form-control" name="qty">
                </div>

                <div class="form-group">
                    <label for="">Price</label>
                    <input type="number" required class="form-control" name="price">
                </div>

                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="desc"required id=""class="form-control" cols="30" rows="10"></textarea>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="col-row">
                            <div class="col-lg-6"></div>
                            <div class="col-lg-6">
                                <label for="">Feature Image</label>
                                <input type="file" required class="form-control" name="feature">
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">

                        <div class="col-row">
                            <div class="col-lg-6"></div>
                            <div class="col-lg-6">
                                <label for="">Gallery</label>
                                <input type="file" required class="form-control" name="gallery[]" multiple>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add new</button>
                </div>
            </form>
        </div>
    @elseif (Route::is('edit.products'))
        {{-- <div class="card card-table-two">
            <div class="d-flex justify-content-between">
                <h4 class="card-title mb-1">Add specification</h4>
            </div>

            <form action="/store-specification" method="post" class="mt-5">
                @csrf
                <div class="form-group">
                    <label for="">specification Name</label>
                    <input type="text" hidden required class="form-control" name="id" value="{{ $ProductSP->id }}">
                    <input type="text" required class="form-control" name="name" value="{{ $ProductSP->name }}">
                </div>

                <div class="form-group">
                    <label for="">Unit</label>
                    <input type="number" required class="form-control" value="{{  $ProductSP->unit }}" name="unit">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add new</button>
                </div>
            </form>
        </div> --}}
    @endif
@endsection

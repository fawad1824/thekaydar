@extends('layouts.master')

@section('content')
    <div class="card card-table-two">
        <div class="d-flex justify-content-between">
            {{-- <h4 class="card-title mb-1">{{ $title1 }}</h4> --}}
            {{-- <a href="/products-add" class="btn btn-sm btn-primary">Add new</a> --}}
            {{-- <i class="mdi mdi-dots-horizontal text-gray"></i> --}}
        </div>
        <div class="table-responsive country-table">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif

            <form action="/reviewpadd" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Product Name</label>
                    <input type="text" readonly value="{{ $product->name }}" name="name" class="form-control">
                    <input type="text" hidden readonly value="{{ $product->id }}" name="id" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Write Review</label>
                    <textarea class="form-control" name="review" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm">Add Review</button>
                </div>
            </form>
        </div>
    </div>
@endsection

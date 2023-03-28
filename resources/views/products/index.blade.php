@extends('layouts.master')

@section('content')
    <div class="card card-table-two">
        <div class="d-flex justify-content-between">
            <h4 class="card-title mb-1">{{ $title1 }}</h4>
            <a href="/products-add" class="btn btn-sm btn-primary">Add new</a>
            {{-- <i class="mdi mdi-dots-horizontal text-gray"></i> --}}
        </div>
        <div class="table-responsive country-table">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif

            <table class="table table-striped table-bordered mb-0 text-sm-nowrap text-lg-nowrap text-xl-nowrap mt-3">
                <thead>
                    <tr>
                        <th class="wd-lg-5p">#</th>
                        <th class="wd-lg-10p ">Image</th>
                        <th class="wd-lg-15p ">Name</th>
                        <th class="wd-lg-15p ">Vendor Name</th>
                        <th class="wd-lg-15p ">Qty</th>
                        <th class="wd-lg-15p ">Price</th>
                        <th class="wd-lg-20p ">Category</th>
                        <th class="wd-lg-20p ">Specification</th>
                        <th class="wd-lg-30p ">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($product as $index => $item)
                        @if ($item->user_id == Auth::user()->id || Auth::user()->is_admin == '1')
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td><img style="max-width: 62px" src="images/{{ $item->feature_img }}"
                                        alt="{{ $item->feature_img }}"></td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->user_id }}</td>
                                <td>{{ $item->qty }}</td>
                                <td>{{ $item->price }}</td>
                                <td>{{ $item->price }}</td>
                                <td>{{ $item->price }}</td>
                                <td style="display: flex">
                                    <a class="btn btn-sm btn-primary m-1" href="/products-edit/{{ $item->id }}"><i
                                            class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    <a class="btn btn-sm btn-danger m-1" href="/products-delete/{{ $item->id }}"><i
                                            class="fa fa-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

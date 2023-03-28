@extends('layouts.master')

@section('content')
    <div class="card card-table-two">
        <div class="d-flex justify-content-between">
            <h4 class="card-title mb-1">{{ $title1 }}</h4>
            {{-- <a href="/products-add" class="btn btn-sm btn-primary">Add new</a> --}}
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
                        <th class="wd-lg-15p ">Product Name</th>
                        <th class="wd-lg-15p ">Qty</th>
                        <th class="wd-lg-15p ">Price</th>
                        <th class="wd-lg-15p ">Unit</th>
                        <th class="wd-lg-20p ">status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order as $index => $item)
                        @if ($item->user_product == Auth::user()->id || Auth::user()->is_admin == '1')
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->qty }}</td>
                                <td>{{ $item->user->price }}</td>
                                <td>{{ $item->unit }}</td>
                                <td>
                                    @if ($item->status == '1')
                                        <span>Pending</span>
                                    @else
                                        <span>Complete</span>
                                    @endif
                                </td>

                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

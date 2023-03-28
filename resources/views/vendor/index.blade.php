@extends('layouts.master')

@section('content')
    <div class="card card-table-two">
        <div class="d-flex justify-content-between">
            <h4 class="card-title mb-1">{{ $title1 }}</h4>
            {{-- <a href="/add-category" class="btn btn-sm btn-primary">Add new</a> --}}
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
                        <th class="wd-lg-15p ">Email</th>
                        <th class="wd-lg-15p ">Phone Number</th>
                        <th class="wd-lg-15p ">Address</th>
                        <th class="wd-lg-30p ">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $index=> $item)
                        <tr>
                            <td>{{ $index+1 }}</td>
                            <td></td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->address }}</td>
                            <td style="display: flex">
                                <a class="btn btn-sm btn-primary m-1" href="/vendor-product/{{ $item->id }}">
                                    Orders
                                    </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection

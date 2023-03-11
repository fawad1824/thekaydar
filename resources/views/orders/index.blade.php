@extends('layouts.master')

@section('content')
    <div class="card card-table-two">
        <div class="d-flex justify-content-between">
            <h4 class="card-title mb-1">{{ $title1 }}</h4>
            <a href="/add-category" class="btn btn-sm btn-primary">Add new</a>
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
                        <th class="wd-lg-10p">#</th>
                        <th class="wd-lg-10p ">ID</th>
                        <th class="wd-lg-25p ">Name</th>
                        <th class="wd-lg-25p ">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category as $index => $item)
                        <tr>
                            <td class=" tx-medium tx-inverse">{{ $index + 1 }}</td>
                            <td class=" tx-medium tx-inverse">{{ $item->id }}</td>
                            <td class=" tx-medium tx-inverse">{{ $item->name }}</td>
                            <td class=" tx-medium tx-inverse">
                                <a href="/edit-category/{{ $item->id }}" class="btn btn-sm btn-primary">Edit</a>
                                <a href="/delete-category/{{ $item->id }}" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

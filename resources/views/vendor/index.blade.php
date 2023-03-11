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

        </div>
    </div>
@endsection

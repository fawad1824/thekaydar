@extends('layouts.master')

@section('content')
    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}

    <div class="card card-table-two">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        Products Total : {{ $product }}
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        Products Total : {{ $product }}
                    </div>
                </div>
            </div>
             <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        Booking Total : {{ $productBook }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

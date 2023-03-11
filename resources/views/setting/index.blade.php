@extends('layouts.master')

@section('content')
    <div class="card card-table-two">
        <div class="d-flex justify-content-between">
            <h4 class="card-title mb-1">{{ $title1 }}</h4>
        </div>
        <div class="table-responsive country-table">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif

            <h4 class="mt-5">Header Contact</h4>

            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="">Logo</label>
                            <input type="file" class="form-control" name="logo">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="text" class="form-control" name="phone">
                        </div>
                    </div>
                    <div class="col-lg-3">

                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" class="form-control" name="phone">
                        </div>
                    </div>
                    <div class="col-lg-3">

                        <div class="form-group">
                            <label for="">Time and Date</label>
                            <input type="text" class="form-control" name="phone">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary">Update</button>
                </div>
            </form>


        </div>
    </div>
@endsection

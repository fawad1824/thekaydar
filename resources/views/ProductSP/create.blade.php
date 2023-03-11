@extends('layouts.master')

@section('content')
    @if (Route::is('add.specification'))
        <div class="card card-table-two">
            <div class="d-flex justify-content-between">
                <h4 class="card-title mb-1">Add specification</h4>
            </div>

            <form action="/store-specification" method="post" class="mt-5">
                @csrf
                <div class="form-group">
                    <label for="">specification Name</label>
                    <input type="text" required class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="">Unit</label>
                    <input type="number" required class="form-control" name="unit">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add new</button>
                </div>
            </form>
        </div>
    @else
        <div class="card card-table-two">
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
        </div>
    @endif
@endsection

@extends('layouts.master')

@section('content')
    @if (Route::is('add.category'))
        <div class="card card-table-two">
            <div class="d-flex justify-content-between">
                <h4 class="card-title mb-1">Add Category</h4>
            </div>

            <form action="/store-category" method="post" class="mt-5">
                @csrf
                <div class="form-group">
                    <label for="">Category Name</label>
                    <input type="text" required class="form-control" name="name">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add new</button>
                </div>
            </form>
        </div>
    @else
        <div class="card card-table-two">
            <div class="d-flex justify-content-between">
                <h4 class="card-title mb-1">Add Category</h4>
            </div>

            <form action="/store-category" method="post" class="mt-5">
                @csrf
                <div class="form-group">
                    <label for="">Category Name</label>
                    <input type="text" hidden required class="form-control" name="id" value="{{ $category->id }}">
                    <input type="text" required class="form-control" name="name" value="{{ $category->name }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add new</button>
                </div>
            </form>
        </div>
    @endif
@endsection

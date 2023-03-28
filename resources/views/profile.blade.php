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

            <div class="mt-5 bt-5">
                <form action="/profileadd" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" hidden name="id" value="{{ $user->id }}" class="form-control">
                        <input type="text" name="name" value="{{ $user->name ?? '' }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" class="form-control" name="profile" accept=".gif,.jpg,.jpeg,.png,.doc,.docx">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" value="{{ $user->email ?? '' }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="tel" name="phone" value="{{ $user->phone ?? '' }}"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Whats App</label>
                        <input type="tel" name="whatsaapp" value="{{ $user->whatsapp ?? '' }}"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Street</label>
                        <input type="text" name="street" value="{{ $user->userdetail->street ?? '' }}"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Postal Code</label>
                        <input type="number" name="postal" value="{{ $user->postcode ?? '' }}"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">City</label>
                        <input type="text" name="city" value="{{ $user->city ?? '' }}"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" name="address" value="{{ $user->address ?? '' }}"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
@endsection

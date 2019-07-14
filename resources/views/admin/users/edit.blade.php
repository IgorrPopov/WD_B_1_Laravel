@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header"><h1 class="font-weight-bold text-center">Edit This User</h1></div>

                    <div class="card-body">

                        <form action="/admin/users/{{ $user->id }}" method="POST">
                            @csrf
                            @method('PATCH')

                            <div class="form-group">
                                <label for="name" class="font-weight-bold">Name</label>
                                <input required class="form-control" type="text" name="name" id="name" value="{{ $user->name }}">
                            </div>

                            <div class="form-group">
                                <label for="email" class="font-weight-bold">Email</label>
                                <input required class="form-control" type="email" name="email" id="email" value="{{ $user->email }}">
                            </div>

                            <button type="submit" class="btn btn-primary font-weight-bold">Edit</button>

                        </form>

                        @include('layouts/errors')

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

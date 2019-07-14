@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h1 class="font-weight-bold text-center">Edit This Goal</h1></div>
                    <div class="card-body">

                        <form action="/goals/{{ $goal->id }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="title" class="font-weight-bold">Title</label>
                                <input class="form-control" type="text" name="title" id="title" value="{{ $goal->title }}" required>
                            </div>
                            <div class="form-group">
                                <label for="description" class="font-weight-bold">Description</label>
                                <textarea class="form-control" name="description" id="description" rows="8" required>{{ $goal->description }}</textarea>
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

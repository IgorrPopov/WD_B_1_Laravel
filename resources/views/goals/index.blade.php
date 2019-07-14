@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center"><h1 class="font-weight-bold">My Goals</h1></div>
                    <div class="card-body">

                        @if($goals->count())
                            <ol>
                                @foreach ($goals as $goal)

                                    <li><h4><a href="/goals/{{ $goal->id }}">{{ $goal->title }}</a></h4></li>

                                @endforeach
                            </ol>
                        @endif

                        <div class="card-body">
                            <a href="/goals/create" class="btn btn-primary btn-lg btn-block font-weight-bold">Create A New Goal</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

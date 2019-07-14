@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header"><h1 class="font-weight-bold text-center">{{ $goal->title }}</h1></div>

                    <div class="card-body">{{ $goal->description }}</div>

                    <div class="card-footer">
                        <h4 class="font-weight-bold text-center">Goal's Tasks</h4>
                        @if($goal->tasks()->count())
                            <ul class="list-group">
                                @foreach($goal->tasks as $task)
                                    <li class="list-group-item">
                                        <form method="POST" action="/tasks/{{ $task->id }}" class="d-inline-block">
                                            @method('PATCH')
                                            @csrf
                                            <span class="font-weight-bold">
                                                <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : ''}}>
                                                {{ $task->description }}
                                            </span>
                                        </form>
                                        <form action="/tasks/{{ $task->id }}" method="POST" class="d-inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="ml-3 btn-danger btn-sm font-weight-bold p-1">Delete</button>
                                        </form>
                                    </li>
                                @endforeach
                            </ul>
                        @endif

                        <div class="card">
                            <div class="card-body">
                                <form action="/goals/{{ $goal->id }}/tasks" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="description" class="form-control" placeholder="New Task Description" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary font-weight-bold btn-sm">Add Task</button>
                                </form>
                            </div>
                        </div>

                        @include('layouts/errors')

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

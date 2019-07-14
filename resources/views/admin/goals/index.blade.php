@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-xl-center"><h1 class="font-weight-bold">Goals Of All Users</h1></div>
                    <div class="card-body">

                        <table class="table">

                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Goal Title</th>
                                    <th scope="col">Goal Owner</th>
                                    <th scope="col">Control Goal</th>
                                </tr>
                            </thead>

                            @if($goals->count())

                                <tbody>
                                    @foreach ($goals as $key=>$goal)
                                        <tr>
                                            <th scope="row">{{ $key + 1 }}</th>
                                            <td><a href="/admin/goals/{{ $goal->id }}">{{ $goal->title }}</a></td>
                                            <td>{{ $goal->owner() }}</td>
                                            <td>
                                                <a href="/admin/goals/{{ $goal->id }}/edit" class="btn-sm d-inline-block btn btn-success font-weight-bold">
                                                    Edit
                                                </a>

                                                <form action="/admin/goals/{{ $goal->id }}" method="POST" class="d-inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn-sm btn btn-danger font-weight-bold">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            @endif

                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
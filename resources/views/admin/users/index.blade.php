@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header text-xl-center"><h1 class="font-weight-bold">All Users</h1></div>

                    <div class="card-body">

                        <table class="table">

                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Control User</th>
                                </tr>
                            </thead>

                            @if($users->count())

                                <tbody>
                                @foreach ($users as $key=>$user)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td {{ $user->role === 'admin' ? 'class=font-weight-bold' : '' }}>{{ $user->role }}</td>
                                        <td>
                                            <a href="/admin/users/{{ $user->id }}/edit" class="btn-sm d-inline-block btn btn-success font-weight-bold">Edit</a>

                                            <form action="/admin/users/{{ $user->id }}" method="POST" class="d-inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn-sm btn btn-danger font-weight-bold">Delete</button>
                                            </form>

                                            @if($user->role !== 'admin')
                                                <form method="POST" action="/admin/users/{{ $user->id }}/ban" class="d-inline-block ml-3">
                                                    @method('PATCH')
                                                    @csrf
                                                    <span class="font-weight-bold">
                                                    <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $user->is_banned ? 'checked' : ''}}>
                                                    Ban User
                                                </span>
                                                </form>
                                            @endif

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
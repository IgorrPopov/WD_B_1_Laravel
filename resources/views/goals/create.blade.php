@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h1 class="text-center font-weight-bold">Add A New Goal To Your Life Schedule!</h1></div>
                    <div class="card-body">

                        {{ Form::open(['action' => 'GoalsController@store', 'method' => 'POST']) }}
                            <div class="card-body">
                                <div class="form-group">
                                    {{ Form::label('title', 'Title', ['class' => 'font-weight-bold']) }}
                                    {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title', 'required']) }}
                                </div>

                                <div class="form-group">
                                    {{ Form::label('description', 'Description', ['class' => 'font-weight-bold']) }}
                                    {{ Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Description', 'rows' => '5', 'required']) }}
                                </div>

                                {{ Form::submit('Add Goal', ['class' => 'btn btn-primary font-weight-bold']) }}

                                @include('layouts/errors')
                            </div>
                        {{ Form::close() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

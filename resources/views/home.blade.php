@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><h1 class="font-weight-bold">Personal Goals Board</h1></div>

                @if (session('status'))
                    <div class="card-body">
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    </div>
                @endif

                <div class="card-body">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec tortor nibh.
                        Suspendisse volutpat posuere turpis quis congue. Praesent dignissim pretium interdum.
                        Pellentesque quis ligula non dui vestibulum lacinia eget ac lorem. Nam condimentum, massa a feugiat sagittis,
                        orci justo aliquam dolor, in lacinia sapien nunc at tellus. Proin vitae ante a enim auctor commodo.
                        Integer varius, urna at hendrerit bibendum, dolor diam aliquam tortor, quis ornare elit neque et nunc.
                        Integer fringilla dolor eget viverra malesuada.
                    </p>
                    <p>
                        Duis ornare ex dui, tincidunt commodo tellus pretium quis. Integer eu pretium dui, faucibus ornare velit.
                        Etiam lectus mauris, feugiat a ullamcorper eget, aliquam ac erat. Nunc eu consectetur odio, id consectetur est.
                        Nam pharetra tortor a hendrerit pellentesque. Integer at malesuada nunc. Praesent in feugiat risus.
                    </p>
                </div>

                <div class="card-footer">
                    <a href="/goals" class="btn btn-primary btn-lg btn-block font-weight-bold">Show My Goals</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

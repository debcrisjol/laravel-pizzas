@extends('layouts.app')


@section('content')
    <h1 class="text-center">Pizzas</h1>
    <h3 class="text-center text-danger">Pizza List</h3>
    @foreach ($pizzas as $pizza)
        <div class="text-center m-4"><b> <a class="m-4 text-danger" style="text-decoration:none" href="/pizzas/{{ $pizza['id']}} ">
            {{ $pizza['id'] }}</a></b>-
            <i>
                {{ $pizza['name'] }} </i>- <b>{{ $pizza['type'] }} </b>- {{ $pizza['base'] }}

        </div>
    @endforeach
@endsection

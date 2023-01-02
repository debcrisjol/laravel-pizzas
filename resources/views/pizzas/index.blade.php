@extends('layouts.layout')


@section('content')    
    <h1 class="text-center">Pizzas</h1>
    <h3 class="text-center text-danger">Pizza List</h3>
  @foreach($pizzas as $pizza)
  <div class="text-center m-4"><i>
  {{ $pizza['name'] }} </i>- <b>{{ $pizza['type'] }} </b>- {{ $pizza['base'] }}
  </div>
  @endforeach
@endsection
 @extends('layout')   
    
    
@section('content')    
    <h1 class="text-center">Pizzas</h1>
    <h3 class="text-center text-danger">Pizza List</h3>
  @foreach($pizzas as $pizza)
  <div class="text-center">
  {{ $pizza['name'] }} - {{ $pizza['type'] }} - {{ $pizza['base'] }}
  </div>
  @endforeach


    @endsection
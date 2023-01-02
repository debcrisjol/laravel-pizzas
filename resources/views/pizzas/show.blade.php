@extends('layouts.layout')

@section('content')
<div class="container">
<div>
  <h1 class="primo-titolo text-center fs-1 mt-5">
  <img src="/image/pizza.jpg" alt="pizza-slice" style="width:150px; border-radius:50%;">
     Order for - 
      {{ $pizza->name }}
      
    </h1>
    
    <div class="d-flex flex-column justify-content-center m-4">
    <p class="me-3 fs-3 text-secondary m-3"> <i class="fa-solid fa-pizza-slice"></i> Type - {{ $pizza->type }} </p>
    <p class="ms-3 fs-5 m-2"> Base - {{ $pizza->base }}</p>
    <p class="ms-3 fs-5 m-2"> extra Toppings <i class="fa-solid fa-arrow-turn-down"></i>
    <ul class="text-center">
      @foreach( $pizza->toppings as $topping)
      <li>{{$topping}}</li>
      @endforeach
    
    </ul>
    <form action="/pizzas/{{$pizza->id}}" method="POST" class="text-center bg-danger">
    @csrf
    @method('DELETE')
      <button>Complete Order</button>
    </form>
   </p>


<a href="/pizzas" class="back m-5"><i class="fa-solid fa-circle-left"></i> Back to all pizzas</a></div></div>
</div>
@endsection
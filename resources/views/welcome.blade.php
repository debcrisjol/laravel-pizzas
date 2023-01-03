{{-- @extends('layouts.layout') --}}
@extends('layouts.app')
  @section('content')
  <div class="logo">
  <img class="imagine-centrale" src="image/pizza.jpg" style="height:200px" alt="pizza house logo">
  <img class="pizza1" src="image/pizza1.jpg" alt="pizza1">
  <img class="pizza2" src="image/pizza1.jpg" alt="pizza1">
</div>
  <div class="pizza-page d-flex flex-column">
  <h1 class="primo-titolo text-center">Pizzeria</h1>
    <p class="w-50 m-auto p-3">La Pizzeria nasce dalla passione di Cristina che ha creato un locale davvero aperto a tutti dove le materie prime e la lavorazione artigianale miscelano l'innovazione di una pizzeria/ristorante dall'aspetto moderno che offre a tutti la Pizza della grande tradizione Italiana.
  
  </p>  <a href="/pizzas/create" class="text-danger fs-4">Order a Pizza</a>
  <p class="thanks">{{session('mssg')}}</p>
</div>

@endsection
@extends('layouts.app')

@section('content')
<div class="container w-50 text-center mt-5 ">

  <h1 class="primo-titolo text-center fs-2">Add a New Pizza</h1>
  <div class="container">
  <form action="/pizzas" method="POST" class="m-4 d-flex flex-column align-items-center">
    @csrf
    <label for="name" class="mt-3">Your name:</label>
    <input type="text" class="w-75 p-1 m-2" name="name" id="name" required>
    <label for="type" class="mt-3">Choose type of pizza:</label>
    <select name="type" id="type" class="w-75 p-1 m-2">
      <option value="Margherita">Margherita</option>
      <option value="Capriciosa">Capriciosa</option>
      <option value="Napoletana">Napoletana</option>
      <option value="Messicana">Messicana</option>
      <option value="Nduja">Nduja</option>
      <option value="Campagnola">Campagnola</option>
      <option value="Mare Monti">Mare Monti</option>
    </select>
    <label for="base" class="mt-3">Choose crust:</label>
    <select name="base" id="base" class="w-75 p-1 m-2">
      <option value="thick">Thick</option>
      <option value="thin & crispy">Thin & Crispy</option>
      <option value="cheese crust">Cheese Crust</option>
      <option value="nduja crust">Nduja Crust</option>
    </select>
    <label class="mb-2">Extra toppings:</label> <br>
    <fieldset class="text-start d-flex align-items-center">
      
      <input class="m-3" type="checkbox" name="toppings[]" value="bufala">Mozzarella di Bufala<br />
      <input  class="m-3" type="checkbox" name="toppings[]" value="peppers">Peppers<br />
      <input  class="m-3" type="checkbox" name="toppings[]" value="nduja">Nduja<br />
      <input  class="m-3"  type="checkbox" name="toppings[]" value="salame">Salame piccante<br />
      <input  class="m-3" type="checkbox" name="toppings[]" value="garlic">Garlic<br />
      <input  class="m-3" type="checkbox" name="toppings[]" value="olives">Olives<br />
    </fieldset>
    <input type="submit" class="m-3 text-danger" value="Order The Pizza">
  </form>
  </div>

</div>


@endsection
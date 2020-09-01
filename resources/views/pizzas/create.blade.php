@extends('layouts.layout')
     @section('content')
        <div class="wrapper create-pizza">
        <h1>Add new Pizza to your cart</h1>
        <form action="/pizzas" method="POST">
        <label for="name"> You full name </label>
        <input type="text" id="name" name="name">
        <label for="type"> Choose pizza type </label>
        <select name="type" id="type">
         <option value="Maragina">Marganrina </option>
         <option value="Maragina">Marganrina </option>
         <option value="Maragina">Marganrina </option>
         <option value="Maragina">Marganrina </option>
        </select>
        <label for="type"> Choose Base </label>
        <select name="type" id="type">
         <option value="Garlina">Garlina </option>
         <option value="Midn">Midn </option>
         <option value="Msail">MSALL </option>
         <option value="Maragina">MHILE </option>
        </select>
        <input type="submit" value="Order Pizza">

        </form>
            <div class="content">
                <div class="title m-b-md">
                   Create page
                </div>
          
           </div>

            </div>
        </div>
@endsection
 
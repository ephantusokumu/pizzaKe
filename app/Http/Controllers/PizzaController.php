<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index(){
        $pizzas = [
            ['type' => 'hawaiian', 'base' =>'cheesy crust'],
            ['type' => 'hawaiian', 'base' =>'cheesy cffrust'],
            ['type' => 'hawaiian', 'base' =>'cheesy cffrttust']
        ];
      
        return view('pizzas',  [
            'pizzas' => $pizzas,
            'name'=> request('name'),
            'age' =>request('age')
            
            ]);
    }
    public function show($id){
        return view('details', ['id' => $id]);
    }
}

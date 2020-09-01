@extends('layouts.layout')
@section('body')
        <div class="flex-center position-ref full-height">
            
            <div class="content">
                <div class="title m-b-md">
                   <img src='/img/piza.jpg' class='center'>
                    The Reliable Pizza House
                    {{$name ?? ''}}
                </div>
                <a href="/pizzas/create"> Order a Pizza </a>
            </div>
        </div>
@endsection()
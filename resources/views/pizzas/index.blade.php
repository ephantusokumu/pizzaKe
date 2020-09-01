 @extends('layouts.layout')
     @section('content')
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Pizza's lists
                </div>
           <!-- <p>{{$type ?? ''}} - {{$base ?? ''}} - {{$price ?? ''}} </p>
           @for($i=0; $i<6; $i++)
           <p>
           the value of i is {{$i}}
           </p>
           @endfor -->
           @foreach($pizzas as $pizza)
           <div>
           {{$pizza->name}} - {{$pizza->type}} - {{$pizza->base}}

           </div>
           
           @endforeach
           </div>

            </div>
        </div>
@endsection
 
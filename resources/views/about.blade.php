<h1>Hello guys this is the about page {{$id}}</h1>

@php
   print_r($names); 
   foreach ($names as $key => $value) {
    echo $key . ' = ' . $value . '<br>';
   }
@endphp


@foreach ($names as $key => $item)
    {!!$key . ' = ' . $value . '<br>'!!}
@endforeach

{!!'<h1>hello world</h1>'!!}
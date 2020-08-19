@extends('Layouts.layout')
@section('content')
<p>{{$title}}</p>
       
            @if (count($lang) > 0)

            <ul>
             @foreach ($lang as $item)
        <li>{{$item}}</li>
             @endforeach
               
             
            </ul>
            @endif
       
@endsection
   
   
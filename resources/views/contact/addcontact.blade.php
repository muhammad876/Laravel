@extends('Layouts.layout')
@section('content')

{!! Form::open(['action' => 'ContactController@store','method' => 'POST']) !!}
    <div class="form-group">
       
        {{Form::text('name','',['class' => 'form-control','placeholder' => 'Name'])}}<br>
        {{Form::text('email','',['class' => 'form-control','placeholder' => 'Email'])}}<br>
        {{Form::text('contact_number','',['class' => 'form-control','placeholder' => 'Contact Number'])}}<br>
        {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
    </div>
{!! Form::close() !!}
@endsection
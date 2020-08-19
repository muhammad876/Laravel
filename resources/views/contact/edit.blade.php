@extends('Layouts.layout')
@section('content')
<h1>Edit View</h1>
{!! Form::open(['action' => ['ContactController@update',$contact->id],'method' => 'POST']) !!}
    <div class="form-group">
       
        {{Form::text('name',$contact->name,['class' => 'form-control','placeholder' => 'Name'])}}<br>
        {{Form::text('email',$contact->email,['class' => 'form-control','placeholder' => 'Email'])}}<br>
        {{Form::text('contact_number',$contact->contact_number,['class' => 'form-control','placeholder' => 'Contact Number'])}}<br>
        {{Form::hidden('_method','PUT') }}
        {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
    </div>
{!! Form::close() !!}
@endsection
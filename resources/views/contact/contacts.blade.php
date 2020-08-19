@extends('Layouts.layout')
@section('content')
       <h1 style="text-align: center">My Contacts</h1>
      
        
            @if (count($contact) > 0)
            <table class="table table-dark">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact Number</th>
                    <th>Edit Contact</th>
                    <th>Delete Contact</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($contact as $item)
                  <tr>
                    <td>{{$item->id}}</td>
                      <td>{{$item->name}}</td>
                      <td>{{$item->email}}</td>
                      <td>{{$item->contact_number}}</td>
                  <td>  <a class="btn btn-primary" href="{{ url('/contacts/') }}/{{$item->id}}/edit">Edit</a> </td> 
                      <td> 
                        {!! Form::open(['action' => ['ContactController@update',$item->id],'method' => 'POST']) !!}
                        {{Form::hidden('_method','DELETE') }}
                        {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
                        {!! Form::close() !!}
                      </td>
                         </tr>
                  @endforeach
              
            </tbody>
            </table>
            <a class="btn btn-success" style="position: absolute; right: 125px;" href="{{ url('/contacts/') }}/create">Create Post</a>
            @endif
       
@endsection
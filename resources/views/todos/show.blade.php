@extends('layouts.app')

@section('content')
    <a class="btn btn-light" href="/">Go Back</a>
    <h3> {{$todo->text}} </h3>
    <div class="label label-danger">
        {{$todo->due}}
    </div>
    <hr>
    <p> {{ $todo->body }} </p>
    <br><br>
    <a class="btn btn-light" href="/todo/{{ $todo->id }}/edit">Edit</a>
    {!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'class'=>'float-right']) !!}
        {!! Form::hidden('_method','DELETE') !!}
        {!! Form::bsSubmit('Delete', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@endsection
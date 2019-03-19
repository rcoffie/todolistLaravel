@extends('layouts.app')


@section('content')
    

<h1>Todos</h1>
<a class="btn btn-primary"href="/">back</a>
<h1>{{$todo->text}}</h1>

<div class="panel">

<div class="panel-body">
  {{$todo->body}}
</div>
<div class="panel-footer">
 <h3><span class="label label-danger">{{$todo->due}}</span></h3> 
</div>
</div>

<br>

<a href="/todos/{{$todo->id}}/edit" class="btn btn-primary"> Edit</a>

{!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'Post','class'=>'pull-right']) !!}


{!! Form::hidden ('_method','Delete')!!}
 
{{Form::submit('Delete!',['class'=>'btn btn-danger'])}}

{!! Form::close() !!}

@endsection
@extends('layouts.app')

@section('content')
<h1> Add List </h1>
<a href="/" class="btn btn-link">Back</a>
{!! Form::open(['action' => ['TodosController@update', $todo->id], 'method' => 'Post']) !!}


<div class="form-group">

    {{ Form::label('Text', 'Text')}}

    {{Form::text('text',$todo->text, ['class' => 'form-control', 'placeholder'=>'Todo Text'])}}
    
  

</div>


<div class="form-group">

    {{ Form::label('Body', 'Todo Body')}}

    {{Form::textarea('body',$todo->body, ['class' => 'form-control', 'placeholder'=>'Todo Body'])}}
    
  

</div>

<div class="form-group">

    {{ Form::label('Due', 'Due Date')}}

    {{Form::text('due',$todo->due, ['class' => 'form-control', 'placeholder'=>'Todo Due Date'])}}
    
  

</div>

{!! Form::hidden('_method','PUT') !!}

<div>

  {{Form::submit('Update !',['class'=>'btn btn-primary'])}}
</div>

{!! Form::close() !!}
    
@endsection
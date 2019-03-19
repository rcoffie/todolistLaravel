@extends('layouts.app')

@section('content')
<h1> Add List </h1>

{!! Form::open(['action' => 'TodosController@store', 'method' => 'Post']) !!}


<div class="form-group">

    {{ Form::label('Text', 'Text')}}

    {{Form::text('text','', ['class' => 'form-control', 'placeholder'=>'Todo Text'])}}
    
  

</div>


<div class="form-group">

    {{ Form::label('Body', 'Todo Body')}}

    {{Form::textarea('body','', ['class' => 'form-control', 'placeholder'=>'Todo Body'])}}
    
  

</div>

<div class="form-group">

    {{ Form::label('Due', 'Due Date')}}

    {{Form::text('due','', ['class' => 'form-control', 'placeholder'=>'Todo Due Date'])}}
    
  

</div>

<div>

  {{Form::submit('Click Me!',['class'=>'btn btn-primary'])}}
</div>

{!! Form::close() !!}
    
@endsection
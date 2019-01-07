@extends('layouts.app')

@section('content')
    <h1>Add Valve</h1>
    <!--store is the function we are submitting to-->
    {!! Form::open(['action' => 'ValvesController@store','method' => 'POST'])!!}  
      <div class = "form-group">
            {{Form::label('flow_rate','Flow Rate')}}
            {{Form::text('flow_rate','',['class'=>'form-control'])}}
        </div>

        <div class = "form-group">
            {{Form::label('direction','Direction')}}
            
            {{Form::number('direction','', array('class' => 'form-control'))}}
        </div>

        <div class = "form-group">
            {{Form::label('parent_id','Parent')}}
            
            {{Form::number('parent_id','',['class'=>'form-control'])}}
        </div>

        <div class = "form-group">
            {{Form::label('diameter','Diameter')}}
            
            {{Form::number('diameter','',['class'=>'form-control'])}}
        </div>

        <div class = "form-group">
            {{Form::label('pressure','Pressure')}}
            
            {{Form::number('pressure','',['class'=>'form-control'])}}
        </div>

        <div class = "form-group">
            {{Form::label('metadata','Metadata')}}
            
            {{Form::text('metadata','',['class'=>'form-control'])}}
        </div>
        {{Form::submit('Submit', array('class' => 'btn btn-primary'))}}

    {!! Form::close() !!}
@endsection

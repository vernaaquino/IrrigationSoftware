@extends('layouts.app')

@section('content')
    <h1>Edit Valve</h1>
    <!--update is the function we are submitting to-->
    {!! Form::open(['action' => ['ValvesController@update',$valve->id],'method' => 'PUT'])!!}  
        <div class = "form-group">
            {{Form::label('flow_rate','Flow Rate')}}
            {{Form::text('flow_rate', $valve->flow_rate,['class'=>'form-control'])}}
        </div>

        <div class = "form-group">
            {{Form::label('direction','Direction')}}
            
            {{Form::number('direction', $valve->direction, array('class' => 'form-control'))}}
        </div>

        <div class = "form-group">
            {{Form::label('parent_id','Parent')}}
            
            {{Form::number('parent_id', $valve->parent_id,['class'=>'form-control'])}}
        </div>

        <div class = "form-group">
            {{Form::label('diameter','Diameter')}}
            
            {{Form::number('diameter', $valve->diameter,['class'=>'form-control'])}}
        </div>

        <div class = "form-group">
            {{Form::label('pressure','Pressure')}}
            
            {{Form::number('pressure', $valve->pressure,['class'=>'form-control'])}}
        </div>

        <div class = "form-group">
            {{Form::label('metadata','Metadata')}}
            
            {{Form::text('metadata', $valve->metadata,['class'=>'form-control'])}}
        </div>
        {{Form::submit('Submit', array('class' => 'btn btn-primary'))}}

    {!! Form::close() !!}
@endsection

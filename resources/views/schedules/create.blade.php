@extends('layouts.app')

@section('content')
    <h1>Add Schedule</h1>
    <!--store is the function we are submitting to-->
    {!! Form::open(['action' => 'SchedulesController@store','method' => 'POST'])!!}  
        <div class = "form-group">
            {{Form::label('name','Schedule Name')}}
            {{Form::text('name','',['class'=>'form-control', 'placeholder'=>'e.g. Front Garden'])}}
        </div>

        <div class = "form-group">
            {{Form::label('anchor_day','Start Date')}}
            
            {{Form::date('anchor_day', \Carbon\Carbon::now(), array('class' => 'form-control'))}}
        </div>

        <div class = "form-group">
            {{Form::label('num_of_days','Duration (days)')}}
            
            {{Form::number('num_of_days','',['class'=>'form-control'])}}
        </div>

        {{Form::submit('Submit', array('class' => 'btn btn-primary'))}}

    {!! Form::close() !!}
@endsection

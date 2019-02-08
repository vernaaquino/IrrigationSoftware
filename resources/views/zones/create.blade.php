@extends('layouts.app')

@section('content')
    <h1>Add Zone</h1>
    <!--store is the function we are submitting to-->
    {!! Form::open(['action' => 'ZonesController@store','method' => 'POST'])!!}  
      <div class = "form-group">
            {{Form::label('name','Name')}}
            {{Form::text('name','',['class'=>'form-control'])}}
        </div>

        <div class="form-group">
            {!! Form::label('Select a schedule') !!}<br />
            {!! Form::select('schedule_id', 
            $schedules, 
            null, 
            ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Select one or more valves') !!}<br />
            {!! Form::select('valves[]',
            $valves, 
            null, 
            ['class' => 'form-control',
            'multiple' => 'multiple']) !!}
        </div>

        {{Form::submit('Submit', array('class' => 'btn btn-primary'))}}

    {!! Form::close() !!}
@endsection

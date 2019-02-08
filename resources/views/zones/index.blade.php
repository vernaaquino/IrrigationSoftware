@extends('layouts.app')

@section('content')
<div class="table-responsive">      
<table class="table table-striped table-sm">
    <thead>
        <tr>
            <th> Id</th>
            <th> Name</th>
            <th> Duration  </th>
            <th> Start Day </th>
            <th> Weather Factor</th>
            <th> Season Factor </th>
        </tr>
    </thead>
    <tbody>
        container 
         @foreach($zones as $zone)
          <tr>
              <td> {{$zone->id}} </td>
              <td> {{$zone->name}} </td>
              <td> {{Schedule::find($zone->schedule_id)->name}} </td>
              <td> {{$schedule->anchor_day}} </td>
              
              <td> 
                <a href="/schedules/{{$schedule->id}}/edit" class = "btn btn-success">Edit</a>
              </td>
                  
              <td> 
              {!! Form::open(['action' => ['SchedulesController@destroy',$schedule->id],'method' => 'DELETE', 'class' => 'pull-right'])!!} 
                  {{Form::submit('Delete', array('class' => 'btn btn-danger'))}}
              {!! Form::close() !!}
              </td>
          </tr>
         @endforeach
   </tbody>
</table>
        {{$schedules->links()}}
</div>

<a href="/schedules/create" class="btn btn-primary">Add Zone</a>


@endsection

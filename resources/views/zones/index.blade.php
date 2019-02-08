@extends('layouts.app')
@section('content')


<div class="table-responsive">      
<table class="table table-striped table-sm">
    <thead>
        <tr>
            <th> Id</th>
            <th> Name</th>
            <th> Schedule  </th>
        </tr>
    </thead>
    <tbody>
         @foreach($zones as $zone)
          <tr>
              <td> {{$zone->id}} </td>
              <td> {{$zone->name}} </td>
              <?php
                $sched = \App\Schedule::find($zone->schedule_id);
              ?>
              <td> {{$sched->name}} </td>
              
              <td> 
                <a href="/zones/{{$zone->id}}/edit" class = "btn btn-success">Edit</a>
              </td>
                  
              <td> 
              {!! Form::open(['action' => ['ZonesController@destroy',$zone->id],'method' => 'DELETE', 'class' => 'pull-right'])!!} 
                  {{Form::submit('Delete', array('class' => 'btn btn-danger'))}}
              {!! Form::close() !!}
              </td>
          </tr>
         @endforeach
   </tbody>
</table>
        {{$zones->links()}}
</div>

<a href="/zones/create" class="btn btn-primary">Add Zone</a>


@endsection

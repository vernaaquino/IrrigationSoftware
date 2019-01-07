@extends('layouts.app')

@section('content')
<div class="table-responsive">      
<table class="table table-striped table-sm">
    <thead>
        <tr>
            <th> Id</th>
            <th> Flow Rate</th>
            <th> Direction  </th>
            <th> Parent ID </th>
            <th> Diameter</th>
            <th> Pressure </th>
            <th> Metadata </th>
        </tr>
    </thead>
    <tbody>
         @foreach($valves as $valve)
          <tr>
              <td> {{$valve->id}} </td>
              <td> {{$valve->flow_rate}} </td>
              <td> {{$valve->direction}} </td>
              <td> {{$valve->parent_id}} </td>
              <td> {{$valve->diameter}} </td>
              <td> {{$valve->pressure}} </td>
              <td> {{$valve->metadata}} </td>
              
              <td> 
                <a href="/valves/{{$valve->id}}/edit" class = "btn btn-success">Edit</a>
              </td>
                  
              <td> 
              {!! Form::open(['action' => ['ValvesController@destroy',$valve->id],'method' => 'DELETE', 'class' => 'pull-right'])!!} 
                  {{Form::submit('Delete', array('class' => 'btn btn-danger'))}}
              {!! Form::close() !!}
              </td>
          </tr>
         @endforeach
   </tbody>
</table>
        {{$valves->links()}}
</div>

<a href="/valves/create" class="btn btn-primary">Add Valve</a>


@endsection

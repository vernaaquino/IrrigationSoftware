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
         @foreach($schedules as $schedule)
          <tr>
              <td> {{$schedule->id}} </td>
              <td> {{$schedule->name}} </td>
              <td> {{$schedule->num_of_days}} </td>
              <td> {{$schedule->anchor_day}} </td>
              <td> {{$schedule->weather_factor_id}} </td>
              <td> {{$schedule->season_factor_id}} </td>
          </tr>
         @endforeach
   </tbody>
</table>
</div>
@endsection

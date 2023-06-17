@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="btn-dark col-md-7">
            <div class="card">
                <div class="btn-dark"><h3>Bus Availability</h3></div>

                <div class=" card-body btn-success">  
                   <table class="table table-responsive table-hover table-bordered">
  <thead class="bg-secondary text-white">
    <tr>
        <th scope="col">Route Name</th>
      <th scope="col">Departure Date</th>
        <th scope="col">Arrival Time</th>
        <th scope="col">Departure Time</th>
        <th scope="col">Bus Number</th>
    </tr>
  </thead>
  <tbody>
       @foreach($schedules as $schedule)
    <tr class="bg-white">
        <td>{{$schedule->route->Route_name}}</td>
      <td>{{$schedule->Departure_date}}</td>
        <td>{{$schedule->Arrival_time}}</td>
        <td>{{$schedule->Departure_time}}</td>
      <td>{{$schedule->bus->Bus_number}}</td> 
    </tr>
    @endforeach
  </tbody>
</table>    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

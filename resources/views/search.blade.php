@extends('layouts.admindashboard')
   
@section('content')

<div class="col-sm-12">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
<div class="row">
    <div class="col-md-6">
<form action="/schsearch" method="GET" role="form">

    <div class="input-group">
        <input type="text" class="form-control" name="search"
            placeholder="Search passenger"> <span class="input-group-btn">
            <button type="submit" class="btn btn-success">
                <span>Search</span>
            </button>
        </span>
    </div>
</form>
</div>
<div class="col-md-6 text-right">
    <a class="btn btn-success" href="{{ route('sschedule.create')}}" >Add Schedule</a>
</div>
<table class="table table-hover table-bordered">
  <thead class="bg-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Departure Date</th>
        <th scope="col">Departure Time</th>
      <th scope="col">Sold Seat</th>
        <th scope="col">Available Seat</th>
        <th scope="col">Bus Id</th>
        <th scope="col">Route Id</th>
        <th scope="col" colspan = 2>Action</th>
    </tr>
  </thead>
  <tbody>
       @foreach($schedules as $schedule)
    <tr class="table-success">
      <td>{{$schedule->id}}</td>
      <td>{{$schedule->Departure_date}}</td>
        <td>{{$schedule->Departure_time}}</td>
        <td>{{$schedule->Sold_seat}}</td>
        <td>{{$schedule->Available_seat}}</td>
      <td>{{$schedule->bus_id}}</td>
        <td>{{$schedule->route_id}}</td>
      <td>
                <a href="{{ route('sschedule.edit',$schedule->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('sschedule.destroy', $schedule->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
    </tr>
    @endforeach
  </tbody>
</table>   
    </div>     
@endsection
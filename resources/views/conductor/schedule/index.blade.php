@extends('layouts.conductordashboard')
   
@section('content')

<div class="col-sm-12">
  @if(session()->get('success'))
    <div id="myMsg" class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
<div class="col-sm-12">
  @if(session()->get('warning'))
    <div id="myMsg" class="alert alert-danger">
      {{ session()->get('warning') }}  
    </div>
  @endif
</div>
<div class="row">
    <div class="col-md-6">
<form action="/cschsearch" method="GET" role="form">

    <div class="input-group">
        <input type="text" class="form-control" name="search"
            placeholder="{{  trans('sentence.search here')}}"> <span class="input-group-btn">
            <button type="submit" class="btn btn-info">
                <span>{{  trans('sentence.search')}}</span>
            </button>
        </span>
    </div>
</form>
</div>
<div class="col-md-6 text-right">
    <a class="btn btn-success" href="{{ route('csschedule.create')}}" >{{  trans('sentence.add schedule')}}</a>
</div>
<table class="table table-responsive table-hover table-bordered">
  <thead class="bg-dark">
    <tr>
      <th scope="col">{{  trans('sentence.id')}}</th>
      <th scope="col">{{  trans('sentence.departure date')}}</th>
        <th scope="col">{{  trans('sentence.arrival time')}}</th>
        <th scope="col">{{  trans('sentence.departure time')}}</th>
        <th scope="col">{{  trans('sentence.bus no')}}</th>
        <th scope="col">{{  trans('sentence.route name')}}</th>
        <th scope="col" colspan = 2>{{  trans('sentence.action')}}</th>
    </tr>
  </thead>
  <tbody>
       @foreach($schedules as $schedule)
    <tr class="table-success">
      <td>{{$schedule->id}}</td>
      <td>{{$schedule->Departure_date}}</td>
        <td>{{$schedule->Arrival_time}}</td>
        <td>{{$schedule->Departure_time}}</td>
      <td>{{$schedule->bus->Bus_number}}</td>
        <td>{{$schedule->route->Route_name}}</td>
      <td>
                <a href="{{ route('csschedule.edit',$schedule->id)}}" class="btn btn-primary">{{  trans('sentence.edit')}}</a>
            </td>
            <td>
                <form action="{{ route('csschedule.destroy', $schedule->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">{{  trans('sentence.delete')}}</button>
                </form>
            </td>
    </tr>
    @endforeach
  </tbody>
</table>   
    </div>     
@endsection
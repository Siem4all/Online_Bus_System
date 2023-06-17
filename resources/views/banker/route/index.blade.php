@extends('layouts.bankerdashboard')
   
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
<form action="/brsearch" method="GET" role="form">

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
<table class="table table-responsive table-hover table-bordered">
  <thead class="bg-dark">
    <tr>
      <th scope="col">{{  trans('sentence.id')}}</th>
      <th scope="col">{{  trans('sentence.departure')}}</th>
        <th scope="col">{{  trans('sentence.destination')}}</th>
        <th scope="col">{{  trans('sentence.route name')}}</th>
      <th scope="col">{{  trans('sentence.distance')}}</th>
        <th scope="col">{{  trans('sentence.fare')}}</th>
    </tr>
  </thead>
  <tbody>
       @foreach($routes as $route)
    <tr class="table-success">
      <td>{{$route->id}}</td>
      <td>{{$route->Departure}}</td>
        <td>{{$route->Destination}}</td>
        <td>{{$route->Route_name}}</td>
        <td>{{$route->Distance}}</td>
        <td>{{$route->Fare}}</td>
    </tr>
    @endforeach
  </tbody>
</table>   
    </div>     
@endsection
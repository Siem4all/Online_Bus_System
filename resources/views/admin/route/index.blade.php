@extends('layouts.admindashboard')
   
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
<form action="/rsearch" method="GET" role="form">

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
    <a class="btn btn-success" href="{{ route('route.create')}}" >{{  trans('sentence.add route')}}</a>
</div>
<table class="table table-hover table-bordered table-responsive">
  <thead class="bg-dark">
    <tr>
      <th scope="col">{{  trans('sentence.id')}}</th>
      <th scope="col">{{  trans('sentence.departure')}}</th>
        <th scope="col">{{  trans('sentence.destination')}}</th>
        <th scope="col">{{  trans('sentence.route name')}}</th>
      <th scope="col">{{  trans('sentence.distance')}}</th>
        <th scope="col">{{  trans('sentence.fare')}}</th>
        <th scope="col" colspan = 2>{{  trans('sentence.action')}}</th>
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
      <td>
                <a href="{{ route('route.edit',$route->id)}}" class="btn btn-primary">{{  trans('sentence.edit')}}</a>
            </td>
            <td>
                <form action="{{ route('route.destroy', $route->id)}}" method="post">
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
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
<div class="row form-inline" >
    <div class="col-md-6">
<form action="/bsearch" method="GET" role="form">

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
    <a class="btn btn-success" href="{{ route('bus.create')}}" >{{  trans('sentence.add bus')}}</a>
</div>
<table class="table table-responsive  table-hover table-bordered">
  <thead class="bg-dark">
    <tr>
      <th scope="col">{{  trans('sentence.id')}}</th>
      <th scope="col">{{  trans('sentence.bus name')}}</th>
        <th scope="col">{{  trans('sentence.bus model')}}</th>
      <th scope="col">{{  trans('sentence.bus no')}}</th>
        <th scope="col">{{  trans('sentence.station city')}}</th>
        <th scope="col">{{  trans('sentence.driver fname')}}</th>
        <th scope="col">{{  trans('sentence.conductor fname')}}</th>
        <th scope="col">{{  trans('sentence.bus status')}}</th>
        <th scope="col">{{  trans('sentence.total seat')}}</th>
        <th scope="col" colspan = 2>{{  trans('sentence.action')}}</th>
    </tr>
  </thead>
  <tbody>
       @foreach($buses as $bus)
    <tr class="table-success">
      <td>{{$bus->id}}</td>
      <td>{{$bus->Bus_name}}</td>
        <td>{{$bus->Bus_model}}</td>
        <td>{{$bus->Bus_number}}</td>
        <td>{{$bus->station->Station_city}}</td>
        <td>{{$bus->driver->D_fname}}</td>
        <td>{{$bus->conductor->C_fname}}</td>
        <td>{{$bus->Bus_status}}</td>
      <td>{{$bus->Total_seat}}</td>
      <td>
                <a href="{{ route('bus.edit',$bus->id)}}" class="btn btn-primary">{{  trans('sentence.edit')}}</a>
            </td>
            <td>
                <form action="{{ route('bus.destroy', $bus->id)}}" method="post">
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
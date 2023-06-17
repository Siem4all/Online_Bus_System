@extends('layouts.bankerdashboard')
   
@section('content')
<div class="col-sm-12">
  @if(session()->get('success'))
    <div class="card alert alert-success">
         {{ session()->get('success') }} 
      
    </div>
  @endif
</div>
<div class="col-sm-12">
  @if(session()->get('warning'))
    <div class="alert alert-danger">
      {{ session()->get('warning') }}  
    </div>
  @endif
</div>
<div class="col-sm-12">
  @if(session()->get('error'))
    <div class="alert alert-danger">
      {{ session()->get('error') }}  
    </div>
  @endif
</div>
<div class="row">
    <div class="col-md-6">
<form action="/bstationsearch" method="GET" role="form">

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
      <th scope="col">{{  trans('sentence.station name')}}</th>
        <th scope="col">{{  trans('sentence.station city')}}</th>
    </tr>
  </thead>
  <tbody>
       @foreach($stations as $station)
    <tr class="table-success">
      <td>{{$station->id}}</td>
      <td>{{$station->Station_name}}</td>
        <td>{{$station->Station_city}}</td>
    </tr>
    @endforeach
  </tbody>
</table>   
    </div>     
@endsection
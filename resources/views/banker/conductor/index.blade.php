@extends('layouts.bankerdashboard')
   
@section('content')
<div class="col-sm-12">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
<div class="row justify-content-center">
    <div class="col-md-6">
<form action="/bcsearch" method="GET" role="form">

    <div class="input-group">
        <input type="text" class="form-control" name="search" placeholder="{{  trans('sentence.search here')}}" class="input-group-btn">
            <button type="submit" class="btn btn-info">
                <span>{{  trans('sentence.search')}}</span>
            </button>
    </div>
</form>
</div>
<table class="table table-responsive table-hover table-bordered">
  <thead class="bg-dark">
    <tr>
      <th scope="col">{{  trans('sentence.id')}}</th>
      <th scope="col">{{  trans('sentence.first')}}</th>
      <th scope="col">{{  trans('sentence.last')}}</th>
      <th scope="col">{{  trans('sentence.phone')}}</th>
        <th scope="col">{{  trans('sentence.dob')}}</th>
        <th scope="col">{{  trans('sentence.address')}}</th>
        <th scope="col">{{  trans('sentence.gender')}}</th>
        <th scope="col" colspan = 3>{{  trans('sentence.action')}}</th>
    </tr>
  </thead>
  <tbody>
       @foreach($conductors as $conductor)
    <tr class="table-info">
      <td>{{$conductor->id}}</td>
      <td>{{$conductor->C_fname}}</td>
      <td>{{$conductor->C_lname}}</td>
        <td>{{$conductor->Phone_no}}</td>
      <td>{{$conductor->DOB}}</td>
        <td>{{$conductor->Address}}</td>
        <td>{{$conductor->Gender}}</td>
    </tr>
    @endforeach
  </tbody>
</table>   
    </div>
@endsection
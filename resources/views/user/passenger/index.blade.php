@extends('layouts.userdashboard')
   
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
<div class="row justify-content-center">
    <div class="col-md-6">
<form action="/upsearch" method="GET" role="form">

    <div class="input-group">
        <input type="text" class="form-control" name="search" placeholder="{{  trans('sentence.search here')}}" class="input-group-btn">
            <button type="submit" class="btn btn-info">
                <span>{{  trans('sentence.search')}}</span>
            </button>
    </div>
</form>
</div>
<div class="col-md-6 text-right">
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
        <th scope="col">{{  trans('sentence.status')}}</th>
        <th scope="col" colspan = 3>{{  trans('sentence.action')}}</th>
    </tr>
  </thead>
  <tbody>
       @foreach($passengers as $passenger)
    <tr class="table-info">
      <td>{{$passenger->id}}</td>
      <td>{{$passenger->P_fname}}</td>
      <td>{{$passenger->P_lname}}</td>
        <td>{{$passenger->Phone_no}}</td>
      <td>{{$passenger->DOB}}</td>
        <td>{{$passenger->Address}}</td>
        <td>{{$passenger->Gender}}</td>
      <td>{{$passenger->Status}}</td>
      <td>
                <a href="{{ route('upassenger.edit',$passenger->id)}}" class="btn btn-primary">{{  trans('sentence.edit')}}</a>
            </td>
            <td>
                <form action="{{ route('upassenger.destroy', $passenger->id)}}" method="post">
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
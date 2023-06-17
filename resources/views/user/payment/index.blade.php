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
<div class="row justify-content-center">
<div class="col-md-6 text-right">
</div>
<table class="table table-responsive table-hover table-bordered">
  <thead class="bg-dark">
    <tr>
      <th scope="col">{{  trans('sentence.id')}}</th>
      <th scope="col">{{  trans('sentence.first')}}</th>
      <th scope="col">{{  trans('sentence.last')}}</th>
        <th scope="col">{{  trans('sentence.route name')}}</th>
        <th scope="col">{{  trans('sentence.fare')}}</th>
        <th scope="col">{{  trans('sentence.status')}}</th>
        <th scope="col">Payment Date</th>
    </tr>
  </thead>
  <tbody>
       @foreach($payments as $payment)
    <tr class="table-info">
      <td>{{$payment->id}}</td>
      <td>{{$payment->passenger->P_fname}}</td>
      <td>{{$payment->passenger->P_lname}}</td>
        <td>{{$payment->schedule->route->Route_name}}</td>
      <td>{{$payment->schedule->route->Fare}}</td>
        <td>{{$payment->status}}</td>
        <td>{{$payment->updated_at}}</td>
    </tr>
    @endforeach
  </tbody>
</table>   
    </div>
@endsection
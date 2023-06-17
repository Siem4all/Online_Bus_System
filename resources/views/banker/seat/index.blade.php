@extends('layouts.bankerdashboard')
   
@section('content')
<div class="col-sm-12">
  @if(session()->get('success'))
    <div id="myMsg" class="card alert alert-success">
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
<div class="col-sm-12">
  @if(session()->get('error'))
    <div class="alert alert-danger">
      {{ session()->get('error') }}  
    </div>
  @endif
</div>
<br>
<div class="row">
<table class="table table-responsive table-hover table-bordered">
  <thead class="bg-dark">
    <tr>
      <th scope="col">{{  trans('sentence.id')}}</th>
      <th scope="col">{{  trans('sentence.seat no')}}</th>
        <th scope="col">{{  trans('sentence.bus no')}}</th>
        <th scope="col">{{  trans('sentence.passenger fname')}}</th>
        <th scope="col">{{  trans('sentence.passenger lname')}}</th>
        <th scope="col" colspan = 2>{{  trans('sentence.action')}}</th>
    </tr>
  </thead>
  <tbody>
       
    <tr class="table-success">
      <td>{{$seat->id}}</td>
      <td>{{$seat->Seat_no}}</td>
         <td>{{$seat->bus->Bus_number}}</td>
        <td>{{$seat->passenger->P_fname}}</td>
        <td>{{$seat->passenger->P_lname}}</td>
      <td>
           <a href="{{ route('bseat.edit',$seat->id)}}" class="btn btn-info">{{  trans('sentence.edit')}}</a>
            </td>
            <td>
                <form action="{{ route('bseat.destroy', $seat->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">{{  trans('sentence.delete')}}</button>
                </form>
            </td>
    </tr>
  </tbody>
</table>   
    </div>     
@endsection
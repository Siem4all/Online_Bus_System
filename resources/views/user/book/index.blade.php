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
<div class="row">
    <div class="col-md-6">
<form action="/ubooksearch" method="GET" role="form">

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
</div>
<table class="table table-responsive table-hover table-bordered">
  <thead class="bg-dark">
    <tr>
      <th scope="col">{{  trans('sentence.id')}}</th>
        <th scope="col">{{  trans('sentence.passenger fullname')}}</th>
      <th scope="col">{{  trans('sentence.departure date')}}</th>
        <th scope="col">{{  trans('sentence.departure time')}}</th>
        <th scope="col">{{  trans('sentence.bus no')}}</th>
        <th scope="col">{{  trans('sentence.seat no')}}</th>
        <th scope="col">{{  trans('sentence.route name')}}</th>
        <th scope="col">{{  trans('sentence.book at')}}</th>
        <th scope="col">{{  trans('sentence.updated at')}}</th>
        <th scope="col" colspan = 2>{{  trans('sentence.action')}}</th>
    </tr>
  </thead>
  <tbody>
       @foreach($books as $book)
    <tr class="table-success">
      <td>{{$book->id}}</td>
        <td>{{$book->seat->passenger->P_fname}} {{$book->seat->passenger->P_lname}}</td>
      <td>{{$book->schedule->Departure_date}}</td>
        <td>{{ $book->schedule->Departure_time}}</td>
        <td>{{ $book->schedule->bus->Bus_number}}</td>
        <td>{{ $book->seat->Seat_no}}</td>
        <td>{{ $book->schedule->route->Route_name}}</td>
        <td>{{ $book->created_at}}</td>
        <td>{{ $book->updated_at}}</td>
      <td>
                <a href="{{ route('useat.edit',$book->seat->id)}}" class="btn btn-primary">{{  trans('sentence.edit')}}</a>
            </td>
            <td>
                <form action="{{ route('ubook.destroy', $book->id)}}" method="post">
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
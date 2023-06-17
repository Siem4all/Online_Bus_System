@extends('layouts.userdashboard')
   
@section('content')

<div class="col-sm-12">
  @if(session()->get('success'))
    <div class="alert alert-success">
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
<script> 
        function printDiv() { 
            var divContents = document.getElementById("GFG").innerHTML; 
            var a = window.open('', '', 'height=800, width=900'); 
            a.document.write('<html>'); 
            a.document.write('<body >'); 
            a.document.write(divContents); 
            a.document.write('</body></html>'); 
            a.document.close(); 
            a.print(); 
        } 
    </script> 
<div class="row">
<div class="col-md-5 text-right">
    <button onclick="printDiv()" class="btn btn-info">Print</button>
</div>
<div id="GFG" style="width:100%">
    <table class="table table-responsive table-hover table-bordered">
  <thead class="bg-dark">
    <tr>
      <th scope="col">{{  trans('sentence.id')}}</th>
        <th scope="col">{{  trans('sentence.passenger fullname')}}</th>
        <th scope="col">{{  trans('sentence.bus no')}}</th>
        <th scope="col">{{  trans('sentence.departure date')}}</th>
        <th scope="col">{{  trans('sentence.seat no')}}</th>
        <th scope="col">{{  trans('sentence.route name')}}</th>
        <th scope="col">{{  trans('sentence.driver name')}}</th>
        <th scope="col">{{  trans('sentence.action')}}</th>
    </tr>
  </thead>
  <tbody>
       @foreach($books as $book)
    <tr class="table-success">
        <td>{{$book->ticket->id}}</td>
        <td>{{$book->ticket->book->seat->passenger->P_fname}} {{$book->ticket->book->seat->passenger->P_lname}}</td>
        <td>{{$book->ticket->book->seat->bus->Bus_number}}</td>
        <td>{{$book->ticket->book->schedule->Departure_date}}</td>
        <td>{{$book->ticket->book->seat->Seat_no}}</td>
        <td>{{$book->ticket->book->schedule->route->Route_name}}</td>
        <td>{{$book->ticket->book->seat->bus->driver->D_fname}}</td>
        <td>
                <a href="{{ route('uticket.show',$book->ticket->id)}}" class="btn btn-info">{{  trans('sentence.show')}}</a>
            </td>
    </tr>
    @endforeach
  </tbody>
</table>   
    </div>
    </div>     
@endsection
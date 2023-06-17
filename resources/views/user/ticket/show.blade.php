@extends('layouts.userdashboard')
@section('content')
<br>
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
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-info">
              <div class="card-header">
                <button onclick="printDiv()">Print</button>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">
                 <div id="GFG" class="card card-info">
                     <h5 class="card bg-info">Odaa Bus Ticket Booking Sytem</h5>
                    <form method="" action="">
                        @csrf
                         <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('id') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="number" class="form-control"  value="{{$ticket->id}}"  readonly>

                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Passenger Fullname') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="pid" value="{{$ticket->book->seat->Passenger->P_fname}} {{$ticket->book->seat->Passenger->P_lname}}" readonly>

                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Departure Date') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="date" class="form-control" name="date" value="{{$ticket->book->seat->bus->schedule->Departure_date}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Arrival Time') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="time" class="form-control" name="time"  value="{{$ticket->book->seat->bus->schedule->Arrival_time}}" readonly>

                                @error('time')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Departure Time') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="time" class="form-control" name="time"  value="{{$ticket->book->seat->bus->schedule->Departure_time}}" readonly>

                                @error('time')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Bus Number') }}</label>

                           <div class="col-md-6">
                                <input id="name" type="number" class="form-control" name="busno"  value="{{$ticket->book->seat->bus->Bus_number}}" readonly>
                               
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Seat Number') }}</label>

                           <div class="col-md-6">
                                 <input id="name" type="number" class="form-control" name="seatno" value="{{$ticket->book->seat->Seat_no}}" readonly>
                               
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Route Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="routename"  value="{{$ticket->book->schedule->route->Route_name}}" readonly>
                               
                               
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Fare') }}</label>

                           <div class="col-md-6">
                                 <input id="name" type="number" class="form-control" name="payable"  value="{{$ticket->book->schedule->route->Fare}}" readonly>
                               
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Conductor fullname') }}</label>

                           <div class="col-md-6">
                                 <input id="name" type="text" class="form-control" name="payable"  value="{{$ticket->book->seat->bus->conductor->C_fname}} {{$ticket->book->seat->bus->conductor->C_lname}}" readonly>
                               
                            </div>
                        </div>
                    </form>
                </div>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection

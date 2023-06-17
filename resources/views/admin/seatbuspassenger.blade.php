@extends('layouts.admindashboard')

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
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">{{  trans('sentence.choose seat here')}}</h3>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">
                 <div class="card card-info">
                    <div class="form-group row">
                        <div class="form-group mr-auto offset-md-1">
                            <h4>Passenger Detail</h4>
                            <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                            <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                             Passenger id:&nbsp<b class="text-success">{{$passenger->id}}</b><br>
                            Passenger Fname:&nbsp<b class="text-success">{{$passenger->P_fname}}</b><br>
                           Passenger Lname:&nbsp<b class="text-success">{{$passenger->P_lname}}</b><br>
                             Passenger Mobile:&nbsp<b class="text-success">{{$passenger->Phone_no}}</b><br>
                            passenger Address:&nbsp<b class="text-success">{{$passenger->Address}}</b><br>
                                 <br>
                            <h4>Bus Detail</h4>
                            <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                            Bus id:&nbsp<b class="text-success">{{$bus->id}}</b><br>
                            Bus Name:&nbsp<b class="text-success">{{$bus->Bus_name}}</b><br>
                           Bus Number:&nbsp<b class="text-success">{{$bus->Bus_number}}</b><br>
                           Route Name:&nbsp<b class="text-success">{{$bus->schedule->route->Route_name}}</b>
                        </div>

                            <div class="btn-lg form-group ml-auto offset-md-6">
                                Sold Seats:
                                 @foreach($seats as $seat)
                                 {{$seat->Seat_no}},
                                @endforeach
                                <br>
                                <div >Seat Number:<br>
                                    <input  type="text"  name="seatno"  class="bg-white" value="{{$num}}" readonly><br>
                                    <div class="btn-group">
                                    <form method="POST" action="{{ route('seatbus.update', 1) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit" class="btn-success"   value="01">
                                    </form>
                                    <form method="POST" action="{{ route('seatbus.update', 2) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit"  class="btn-success"   value="02">
                                    </form>
                                     <form method="POST" action="{{ route('seatbus.update', 3) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit"  class="btn-success"   value="03">
                                    </form>
                                     <form method="POST" action="{{ route('seatbus.update', 4) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit"  class="btn-success"   value="04">
                                    </form>
                                     <form method="POST" action="{{ route('seatbus.update', 5) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit"  class="btn-success"   value="05">
                                    </form>
                                    </div>
                                     <br>
                                    <div class="btn-group">
                                    <form method="POST" action="{{ route('seatbus.update', 6) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit" class="btn-success"   value="06">
                                    </form>
                                    <form method="POST" action="{{ route('seatbus.update', 7) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit"  class="btn-success"   value="07">
                                    </form>
                                     <form method="POST" action="{{ route('seatbus.update', 8) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit"  class="btn-success"   value="08">
                                    </form>
                                     <form method="POST" action="{{ route('seatbus.update', 9) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit"  class="btn-success"   value="09">
                                    </form>
                                     <form method="POST" action="{{ route('seatbus.update', 10) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit"  class="btn-success"   value="10">
                                    </form>
                                    </div>
                            <br>
                                    <div class="btn-group">
                                    <form method="POST" action="{{ route('seatbus.update', 11) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit" class="btn-success"   value="11">
                                    </form>
                                    <form method="POST" action="{{ route('seatbus.update', 12) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit"  class="btn-success"   value="12">
                                    </form>
                                     <form method="POST" action="{{ route('seatbus.update', 13) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit"  class="btn-success"   value="13">
                                    </form>
                                     <form method="POST" action="{{ route('seatbus.update', 14) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit"  class="btn-success"   value="14">
                                    </form>
                                     <form method="POST" action="{{ route('seatbus.update',15) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit"  class="btn-success"   value="15">
                                    </form>
                                    </div>
                           <br>
                                    <div class="btn-group">
                                    <form method="POST" action="{{ route('seatbus.update', 16) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit" class="btn-success"   value="16">
                                    </form>
                                    <form method="POST" action="{{ route('seatbus.update', 17) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit"  class="btn-success"   value="17">
                                    </form>
                                     <form method="POST" action="{{ route('seatbus.update', 18) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit"  class="btn-success"   value="18">
                                    </form>
                                     <form method="POST" action="{{ route('seatbus.update', 19) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit"  class="btn-success"   value="19">
                                    </form>
                                     <form method="POST" action="{{ route('seatbus.update', 20) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit"  class="btn-success"   value="20">
                                    </form>
                                    </div>
                                     <br>
                                    <div class="btn-group">
                                    <form method="POST" action="{{ route('seatbus.update', 21) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit" class="btn-success"   value="21">
                                    </form>
                                    <form method="POST" action="{{ route('seatbus.update', 22) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit"  class="btn-success"   value="22">
                                    </form>
                                     <form method="POST" action="{{ route('seatbus.update', 23) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit"  class="btn-success"   value="23">
                                    </form>
                                     <form method="POST" action="{{ route('seatbus.update', 24) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit"  class="btn-success"   value="24">
                                    </form>
                                     <form method="POST" action="{{ route('seatbus.update', 25) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit"  class="btn-success"   value="25">
                                    </form>
                                    </div>
                            <br>
                                    <div class="btn-group">
                                    <form method="POST" action="{{ route('seatbus.update', 26) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit" class="btn-success"   value="26">
                                    </form>
                                    <form method="POST" action="{{ route('seatbus.update', 27) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit"  class="btn-success"   value="27">
                                    </form>
                                     <form method="POST" action="{{ route('seatbus.update', 28) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit"  class="btn-success"   value="28">
                                    </form>
                                     <form method="POST" action="{{ route('seatbus.update', 29) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit"  class="btn-success"   value="29">
                                    </form>
                                     <form method="POST" action="{{ route('seatbus.update',30) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit"  class="btn-success"   value="30">
                                    </form>
                                    </div>
                            <br>
                                     <div class="btn-group">
                                    <form method="POST" action="{{ route('seatbus.update', 31) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit" class="btn-success"   value="31">
                                    </form>
                                    <form method="POST" action="{{ route('seatbus.update', 32) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit"  class="btn-success"   value="32">
                                    </form>
                                     <form method="POST" action="{{ route('seatbus.update', 33) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit"  class="btn-success"   value="33">
                                    </form>
                                     <form method="POST" action="{{ route('seatbus.update', 34) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit"  class="btn-success"   value="34">
                                    </form>
                                     <form method="POST" action="{{ route('seatbus.update', 35) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit"  class="btn-success"   value="35">
                                    </form>
                                    </div>
                                     <br>
                                    <div class="btn-group">
                                    <form method="POST" action="{{ route('seatbus.update', 36) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit" class="btn-success"   value="36">
                                    </form>
                                    <form method="POST" action="{{ route('seatbus.update', 37) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit"  class="btn-success"   value="37">
                                    </form>
                                     <form method="POST" action="{{ route('seatbus.update', 38) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit"  class="btn-success"   value="38">
                                    </form>
                                     <form method="POST" action="{{ route('seatbus.update', 39) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit"  class="btn-success"   value="39">
                                    </form>
                                     <form method="POST" action="{{ route('seatbus.update', 40) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit"  class="btn-success"   value="40">
                                    </form>
                                    </div>
                            <br>
                                    <div class="btn-group">
                                    <form method="POST" action="{{ route('seatbus.update', 41) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit" class="btn-success"   value="41">
                                    </form>
                                    <form method="POST" action="{{ route('seatbus.update', 42) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit"  class="btn-success"   value="42">
                                    </form>
                                     <form method="POST" action="{{ route('seatbus.update', 43) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit"  class="btn-success"   value="43">
                                    </form>
                                     <form method="POST" action="{{ route('seatbus.update', 44) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit"  class="btn-success"   value="44">
                                    </form>
                                     <form method="POST" action="{{ route('seatbus.update',45) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit"  class="btn-success"   value="45">
                                    </form>
                                    </div>
                           <br>
                                    <div class="btn-group">
                                    <form method="POST" action="{{ route('seatbus.update', 46) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit" class="btn-success"   value="46">
                                    </form>
                                    <form method="POST" action="{{ route('seatbus.update', 47) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit"  class="btn-success"   value="47">
                                    </form>
                                     <form method="POST" action="{{ route('seatbus.update', 48) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit"  class="btn-success"   value="48">
                                    </form>
                                     <form method="POST" action="{{ route('seatbus.update', 49) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit"  class="btn-success"   value="49">
                                    </form>
                                     <form method="POST" action="{{ route('seatbus.update', 50) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit"  class="btn-success"   value="50">
                                    </form>
                                    </div>
                                     <br>
                                    <div class="btn-group">
                                    <form method="POST" action="{{ route('seatbus.update', 51) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit" class="btn-success"   value="51">
                                    </form>
                                    <form method="POST" action="{{ route('seatbus.update', 52) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit"  class="btn-success"   value="52">
                                    </form>
                                     <form method="POST" action="{{ route('seatbus.update', 53) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit"  class="btn-success"   value="53">
                                    </form>
                                     <form method="POST" action="{{ route('seatbus.update', 54) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit"  class="btn-success"   value="54">
                                    </form>
                                     <form method="POST" action="{{ route('seatbus.update', 55) }}">
                                    @method('PATCH') 
                                       @csrf         
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input type="hidden" name="schedule" value="{{$schedule}}" class="form-control">
                                        <input  type="submit"  class="btn-success"   value="55">
                                    </form>
                                    </div>
                                </div>
                                
                            </div>
                          
                        
                        </div>
                     <form method="POST" action="{{ route('seat.store') }}">
                        @csrf        
                                        <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                                        <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                                        <input  type="hidden"  name="seatno"  class="bg-white" value="{{$num}}" readonly>
                                        <input type="hidden" name="sid" value="{{$schedule}}" class="form-control">
                                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <div class="card-footer">
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-info">{{  trans('sentence.add')}}</button>
                            </div>
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

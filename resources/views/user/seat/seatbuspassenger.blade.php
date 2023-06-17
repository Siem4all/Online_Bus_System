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
                    <form method="POST" action="{{ route('useat.store') }}">
                        @csrf

                        <div class="form-group row">
                        <div class="form-group mr-auto offset-md-1">
                            <h4>Passenger Detail</h4>
                            <input type="hidden" name="pid" value="{{$passenger->id}}" class="form-control">
                            <input type="text" name="schedule" value="{{$id}}" class="form-control">

                             Passenger id:&nbsp<b class="text-success">{{$passenger->id}}</b><br>
                            Passenger fname:&nbsp<b class="text-success">{{$passenger->P_fname}}</b><br>
                           Passenger lname:&nbsp<b class="text-success">{{$passenger->P_lname}}</b><br>
                             Passenger mobile:&nbsp<b class="text-success">{{$passenger->Phone_no}}</b><br>
                            passenger address:&nbsp<b class="text-success">{{$passenger->Address}}</b><br>
                                 <br>
                            <h4>Bus Detail</h4>
                            <input type="hidden" name="busid" value="{{$bus->id}}" class="form-control">
                            Bus id:&nbsp<b class="text-success">{{$bus->id}}</b><br>
                            Bus name:&nbsp<b class="text-success">{{$bus->Bus_name}}</b><br>
                           Bus number:&nbsp<b class="text-success">{{$bus->Bus_number}}</b><br>
                           Bus Route:&nbsp<b class="text-success">{{$bus->route->Route_name}}</b>
                        </div>

                            <div class="btn-lg form-group ml-auto offset-md-6">
                                Sold Seats:
                                 @foreach($seats as $seat)
                                 {{$seat->Seat_no}},
                                @endforeach
                                <br>
                                <div class="container">Seat Number:<br>
                                    <input  type="text"  name="seatno"  class="bg-white" value="{{$num}}" readonly><br>
                                    <a href="{{ route('useatbus.edit',1)}}"><input  type="button" class="btn-success"   value="01" readonly></a>
                                    <a href="{{ route('useatbus.edit',2)}}"> <input  type="button"  class="btn-success"   value="02" readonly></a>
                                    <a href="{{ route('useatbus.edit',3)}}"><input  type="button"  class="btn-success"    value="03" readonly></a>
                                    <a href="{{ route('useatbus.edit',4)}}"><input  type="button"  class="btn-success"    value="04" readonly></a>
                                    <a href="{{ route('useatbus.edit',5)}}"><input  type="button"  class="btn-success"    value="05" readonly></a>
                                     <br>
                                    <a href="{{ route('useatbus.edit',6)}}"><input  type="button"  class="btn-success"    value="06" readonly></a>
                                    <a href="{{ route('useatbus.edit',7)}}"><input  type="button"  class="btn-success"    value="07" readonly></a>
                                    <a href="{{ route('useatbus.edit',8)}}"><input  type="button"  class="btn-success"    value="08" readonly></a>
                                    <a href="{{ route('useatbus.edit',9)}}"><input  type="button"  class="btn-success"    value="09" readonly></a>
                                    <a href="{{ route('useatbus.edit',10)}}"><input  type="button"  class="btn-success"   value="10" readonly></a>
                            <br>
                                    <a href="{{ route('useatbus.edit',11)}}"><input  type="button"  class="btn-success"   value="11" readonly></a>
                                    <a href="{{ route('useatbus.edit',12)}}"><input  type="button"  class="btn-success"    value="12" readonly></a>
                                    <a href="{{ route('useatbus.edit',13)}}"><input  type="button"  class="btn-success"    value="13" readonly></a>
                                    <a href="{{ route('useatbus.edit',14)}}"><input  type="button"  class="btn-success"    value="14" readonly></a>
                                    <a href="{{ route('useatbus.edit',15)}}"><input  type="button"  class="btn-success"    value="15" readonly></a>
                           <br>
                                   <a href="{{ route('useatbus.edit',16)}}"><input  type="button"  class="btn-success"    value="16" readonly></a>
                                    <a href="{{ route('useatbus.edit',17)}}"><input  type="button"  class="btn-success"    value="17" readonly></a>
                                    <a href="{{ route('useatbus.edit',18)}}"><input  type="button"  class="btn-success"    value="18" readonly></a>
                                    <a href="{{ route('useatbus.edit',19)}}"><input  type="button"  class="btn-success"    value="19" readonly></a>
                                    <a href="{{ route('useatbus.edit',20)}}"><input  type="button"  class="btn-success"    value="20" readonly></a>
                                <br>
                                    <a href="{{ route('useatbus.edit',21)}}"><input  type="button"  class="btn-success"    value="21" readonly></a>
                                    <a href="{{ route('useatbus.edit',22)}}"><input  type="button"  class="btn-success"    value="22" readonly></a>
                                    <a href="{{ route('useatbus.edit',23)}}"><input  type="button"  class="btn-success"   value="23" readonly></a>
                                    <a href="{{ route('useatbus.edit',24)}}"><input  type="button"  class="btn-success"    value="24" readonly></a>
                                    <a href="{{ route('useatbus.edit',25)}}"><input  type="button"  class="btn-success"    value="25" readonly></a>
                                     <br>
                                    <a href="{{ route('useatbus.edit',26)}}"><input  type="button"  class="btn-success"    value="26" readonly></a>
                                    <a href="{{ route('useatbus.edit',27)}}"><input  type="button"  class="btn-success"    value="27" readonly></a>
                                    <a href="{{ route('useatbus.edit',28)}}"><input  type="button"  class="btn-success"   value="28" readonly></a>
                                    <a href="{{ route('useatbus.edit',29)}}"><input  type="button"  class="btn-success"    value="29" readonly></a>
                                    <a href="{{ route('useatbus.edit',30)}}"><input  type="button"  class="btn-success"    value="30" readonly></a>
                            <br>
                                    <a href="{{ route('useatbus.edit',31)}}"><input  type="button"  class="btn-success"    value="31" readonly></a>
                                    <a href="{{ route('useatbus.edit',32)}}"><input  type="button"  class="btn-success"   value="32" readonly></a>
                                    <a href="{{ route('useatbus.edit',33)}}"><input  type="button"  class="btn-success"    value="33" readonly></a>
                                    <a href="{{ route('useatbus.edit',34)}}"><input  type="button"  class="btn-success"    value="34" readonly></a>
                                    <a href="{{ route('useatbus.edit',35)}}"><input  type="button"  class="btn-success"    value="35" readonly></a>
                           <br>
                                    <a href="{{ route('useatbus.edit',36)}}"><input  type="button"  class="btn-success"    value="36" readonly></a>
                                    <a href="{{ route('useatbus.edit',37)}}"><input  type="button"  class="btn-success"    value="37" readonly></a>
                                    <a href="{{ route('useatbus.edit',38)}}"><input  type="button"  class="btn-success"  value="38" readonly></a>
                                    <a href="{{ route('useatbus.edit',39)}}"><input  type="button"  class="btn-success"   value="39" readonly></a>
                                    <a href="{{ route('useatbus.edit',40)}}"><input  type="button"  class="btn-success"    value="40" readonly></a>
                                <br>
                                    <a href="{{ route('useatbus.edit',41)}}"><input  type="button"  class="btn-success"    value="41" readonly></a>
                                    <a href="{{ route('useatbus.edit',42)}}"><input  type="button"  class="btn-success"    value="42" readonly></a>
                                    <a href="{{ route('useatbus.edit',43)}}"><input  type="button"  class="btn-success"   value="43" readonly></a>
                                    <a href="{{ route('useatbus.edit',44)}}"><input  type="button"  class="btn-success"    value="44" readonly></a>
                                    <a href="{{ route('useatbus.edit',45)}}"><input  type="button"  class="btn-success"    value="45" readonly></a>
                                     <br>
                                    <a href="{{ route('useatbus.edit',46)}}"><input  type="button"  class="btn-success"    value="46" readonly></a>
                                    <a href="{{ route('useatbus.edit',47)}}"><input  type="button"  class="btn-success"    value="47" readonly></a>
                                    <a href="{{ route('useatbus.edit',48)}}"><input  type="button"  class="btn-success"   value="48" readonly></a>
                                    <a href="{{ route('useatbus.edit',49)}}"><input  type="button"  class="btn-success"    value="49" readonly></a>
                                    <a href="{{ route('useatbus.edit',50)}}"><input  type="button"  class="btn-success"    value="50" readonly></a>
                                <br>
                                   <a href="{{ route('useatbus.edit',51)}}"><input  type="button"  class="btn-success"    value="51" readonly></a>
                                    <a href="{{ route('useatbus.edit',52)}}"><input  type="button"  class="btn-success"    value="52" readonly></a>
                                    <a href="{{ route('useatbus.edit',53)}}"><input  type="button"  class="btn-success"    value="53" readonly></a>
                                    <a href="{{ route('useatbus.edit',54)}}"><input  type="button"  class="btn-success"    value="54" readonly></a>
                                    <a href="{{ route('useatbus.edit',55)}}"><input  type="button"  class="btn-success"    value="55" readonly></a>
                                </div>
                                
                            </div>
                        
                        </div>
                       
                        <div class="form-row row mb-0">
                            <div class="col-md-6 offset-md-3">
                                 <div class="card-footer">
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-info">{{  trans('sentence.add')}}</button>
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

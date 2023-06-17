@extends('layouts.userdashboard')

@section('content')
<div class="col-sm-12">
  @if(session()->get('warning'))
    <div id="myMsg" class="alert alert-danger">
      {{ session()->get('warning') }}  
    </div>
  @endif
</div>
<div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">{{  trans('sentence.update seat')}}</h3>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">
                 <div class="card card-info">
                     <div class="form-group row">
                    <div class="container col-md-4 form-group mr-auto offset-md-0" style="margin-top:0">
                        <form method="post" action="{{ route('useat.update', $seat->id) }}">
                        @method('PATCH') 
                       @csrf
                       <input id="name" type="hidden"  name="pid" value="{{ $seat->passenger->id}}">

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{  trans('sentence.seat no')}}</label>

                            <div class="col-md-6">
                                <input id="name" type="number" class="form-control @error('seatno') is-invalid @enderror" name="seatno" min="1" max="55" value="{{ $seat->Seat_no }}"  autocomplete="seatno" autofocus>

                                @error('seatno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{  trans('sentence.schedule')}}</label>

                            <div class="col-md-6">
                             <select class="form-control @error('sid') is-invalid @enderror" name="sid">
                                @foreach($schedules as $schedule)
                                <option value="{{$schedule->id}}">Route:{{$schedule->route->Route_name}}&nbsp;Bus Number:{{$schedule->bus->Bus_number}}</option>
                                @endforeach

</select>          
                                @error('sid')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
    
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <div class="card-footer">
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-info">{{  trans('sentence.update')}}</button>
                            </div>
                            </div>
                        </div>
                    </form>
                     </div>
                         <div class="form-group ml-auto offset-md-4 bg-success card card-info">
                        Sold Seats for Bus Id {{$set->bus->id}}<br>
                             <div class="col-md-10 container">
                       @foreach($sats as $sat)
                         <button class="btn-sm  btn-danger btn">{{$sat->Seat_no}}</button>
                        @endforeach
                        </div>
                            </div>
    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection

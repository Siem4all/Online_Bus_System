@extends('layouts.conductordashboard')

@section('content')
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
                        <form method="post" action="{{ route('cseat.update', $seat->id) }}">
                        @method('PATCH') 
                       @csrf

                        
                         <div class="form-group row">
                            <label>{{  trans('sentence.passenger id')}}</label>

                            <div class="col-md-6">
                                <input id="email" type="number" class="form-control @error('pid') is-invalid @enderror" name="pid" value="{{ $seat->passenger_id }}"  autocomplete="pid">

                                @error('pid')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{  trans('sentence.bus id')}}</label>

                            <div class="col-md-6">
                                <input id="email" type="number" class="form-control @error('busid') is-invalid @enderror" name="busid" value="{{ $seat->bus_id }}"  autocomplete="busid">

                                @error('busid')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{  trans('sentence.seat no')}}</label>

                            <div class="col-md-6">
                                <input id="name" type="number" class="form-control @error('seatno') is-invalid @enderror" name="seatno" min="1" max="55" value="{{ $seat->Seat_no }}"  autocomplete="seatno" autofocus >

                                @error('seatno')
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

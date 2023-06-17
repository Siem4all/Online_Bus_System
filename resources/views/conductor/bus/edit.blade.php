@extends('layouts.conductordashboard')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           <div class="card card-info">
              <div class="card-header">
                  <h3 class="card-title">{{  trans('sentence.update bus')}}</h3></div>

                 <div class="card-body" style="display: block;">
                   <div class="card card-info">
                    <form method="POST" action="{{ route('cbus.update', $bus->id) }}">
                        @method('PATCH') 
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{  trans('sentence.bus name')}}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('busname') is-invalid @enderror" name="busname" value="{{ $bus->Bus_name }}"  autocomplete="busname" autofocus>

                                @error('busname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{  trans('sentence.bus model')}}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('busmodel') is-invalid @enderror" name="busmodel" value="{{ $bus->Bus_model }}"  autocomplete="busmodel" autofocus>

                                @error('busmodel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{  trans('sentence.bus no')}}</label>

                            <div class="col-md-6">
                                <input id="name" type="number" class="form-control @error('busnumber') is-invalid @enderror" name="busnumber" value="{{ $bus->Bus_number }}"  autocomplete="busnumber" autofocus>

                                @error('busnumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{  trans('sentence.station id')}}</label>

                            <div class="col-md-6">
                                <input id="name" type="number" class="form-control @error('stationid') is-invalid @enderror" name="stationid" value="{{ $bus->station_id }}"  autocomplete="stationid" autofocus>

                                @error('stationid')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{  trans('sentence.driver id')}}</label>

                            <div class="col-md-6">
                                <input id="name" type="number" class="form-control @error('did') is-invalid @enderror" name="did" value="{{ $bus->driver_id }}"  autocomplete="did" autofocus>

                                @error('did')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{  trans('sentence.conductor id')}}</label>

                            <div class="col-md-6">
                                <input id="name" type="number" class="form-control @error('cid') is-invalid @enderror" name="cid" value="{{ $bus->conductor_id }}"  autocomplete="cid" autofocus>

                                @error('cid')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{  trans('sentence.bus status')}}</label>

                            <div class="col-md-6">
                                <select class="form-control" name="busstatus">   
             <option>{{  trans('sentence.active')}}</option>
             <option>{{  trans('sentence.not active')}}</option>
            </select> 
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{  trans('sentence.total seat')}}</label>

                            <div class="col-md-6">
                                <input id="name" type="number" class="form-control @error('totalseat') is-invalid @enderror" name="totalseat" value="{{ $bus->Total_seat }}"  autocomplete="totalseat" autofocus>

                                @error('totalseat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<div class="card-footer">
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-info">{{  trans('sentence.update')}}</button>
            
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

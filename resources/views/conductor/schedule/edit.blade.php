@extends('layouts.conductordashboard')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
             <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">{{  trans('sentence.update schedule')}}</h3>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">
                 <div class="card card-info">
                    <form method="post" action="{{ route('csschedule.update',$schedule->id)}}">
                        @method('PATCH') 
                       @csrf
                         <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{  trans('sentence.bus id')}}</label>

                            <div class="col-md-6">
                                <input id="name" type="number" class="form-control @error('busid') is-invalid @enderror" name="busid" value="{{$schedule->bus_id}}"  autocomplete="busid" autofocus>

                                @error('busid')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{  trans('sentence.route id')}}</label>

                            <div class="col-md-6">
                                <input id="name" type="number" class="form-control @error('routeid') is-invalid @enderror" name="routeid" value="{{$schedule->route_id}}"  autocomplete="routeid" autofocus>

                                @error('routeid')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{  trans('sentence.departure date')}}</label>

                            <div class="col-md-6">
                                <input id="name" type="date" class="form-control @error('date') is-invalid @enderror" name="date"  value="{{$schedule->Departure_date}}"  autocomplete="date" autofocus>

                                @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                         <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{  trans('sentence.arrival time')}}</label>

                            <div class="col-md-6">
                                <input id="name" type="time" class="form-control @error('atime') is-invalid @enderror" name="atime" value="{{$schedule->Arrival_time}}"  autocomplete="atime" autofocus>

                                @error('atime')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{  trans('sentence.departure time')}}</label>

                            <div class="col-md-6">
                                <input id="name" type="time" class="form-control @error('dtime') is-invalid @enderror" name="dtime" value="{{$schedule->Departure_time}}"  autocomplete="dtime" autofocus>

                                @error('dtime')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <div class="card-footer">
                  <button type="submit" class="btn btn-info">{{  trans('sentence.update')}}</button>
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

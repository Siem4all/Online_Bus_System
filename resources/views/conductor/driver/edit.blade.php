@extends('layouts.conductordashboard')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">{{  trans('sentence.update driver')}}</h3>
                <!-- /.card-tools -->
              </div>
                <div class="card-body" style="display: block;">
                   <div class="card card-info">
                    
                    <form method="post" action="{{ route('cdriver.update', $driver->id) }}">
                        @method('PATCH') 
                       @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{  trans('sentence.first')}}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('dfname') is-invalid @enderror" name="dfname" value={{ $driver->D_fname }}>

                                @error('dfname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{  trans('sentence.last')}}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('dlname') is-invalid @enderror" name="dlname" value={{ $driver->D_lname }}>

                                @error('dlname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{  trans('sentence.phone')}}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value={{ $driver->Phone_no }}>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{  trans('sentence.dob')}}</label>

                            <div class="col-md-6">
                                <input id="email" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob"  autocomplete="phone" value={{ $driver->DOB }}>

                                @error('dob')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{  trans('sentence.address')}}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('address') is-invalid @enderror" name="address"   autocomplete="address" value={{ $driver->Address }}>

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{  trans('sentence.gender')}}</label>

                            <div class="col-md-6">
                                <select class="form-control" name="gender" >
                <option>{{ $driver->Gender }}</option>
                                    <option>{{  trans('sentence.other')}}</option>
                 <option>{{  trans('sentence.male')}}</option>
                  <option>{{  trans('sentence.female')}}</option>
             </select>

                                @error('gender')
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

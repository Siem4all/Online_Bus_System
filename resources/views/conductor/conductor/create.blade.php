@extends('layouts.conductordashboard')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-info">
            
                <div class="card-header">
                <h3 class="card-title">{{  trans('sentence.add conductor')}}</h3>
                <!-- /.card-tools -->
              </div>
                
                
                <div class="card-body" style="display: block;">
                    <div class="card card-info">
                     <form class="form-horizontal" method="POST" action="{{ route('cconductor.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{  trans('sentence.first')}}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('cfname') is-invalid @enderror" name="cfname">

                                @error('cfname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{  trans('sentence.last')}}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('clname') is-invalid @enderror" name="clname">

                                @error('clname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{  trans('sentence.phone')}}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="09">

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
                                <input id="email" type="date" class="form-control @error('phone') is-invalid @enderror" name="dob"  autocomplete="phone">

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
                                <input id="email" type="text" class="form-control @error('address') is-invalid @enderror" name="address"   autocomplete="address">

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
                                <select class="form-control" name="gender">
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
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <div class="card-footer">
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

@extends('layouts.conductordashboard')

@section('content')
<div class="col-sm-12">
  @if(session()->get('success'))
    <div class="card alert alert-success">
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
<div class="col-sm-12">
  @if(session()->get('error'))
    <div class="alert alert-danger">
      {{ session()->get('error') }}  
    </div>
  @endif
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">{{  trans('sentence.add seat')}}</h3>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">
                 <div class="card card-info">
                    <form method="POST" action="{{ route('cseat.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{  trans('sentence.seat no')}}</label>

                            <div class="col-md-6">
                                <input id="name" type="number" class="form-control @error('seatno') is-invalid @enderror" name="seatno"  min="1" max="55" autocomplete="seatno" autofocus>

                                @error('seatno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{  trans('sentence.bus id')}}</label>

                            <div class="col-md-6">
                                <input id="email" type="number" class="form-control @error('busid') is-invalid @enderror" name="busid"   autocomplete="busid">

                                @error('busid')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{  trans('sentence.passenger id')}}</label>

                            <div class="col-md-6">
                                <input id="email" type="number" class="form-control @error('pid') is-invalid @enderror" name="pid"   autocomplete="pid">

                                @error('pid')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
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

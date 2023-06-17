@extends('layouts.userdashboard')
   
@section('content') 
            <br>
<br>
<br>
<main class="my-form">
   <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-info">
            
                <div class="card-header">
                <h3 class="card-title">Send Message Here</h3>
                <!-- /.card-tools -->
              </div>
                
                
                <div class="card-body" style="display: block;">
                    <div class="card card-info">
                <form action="{{route('bmessage.store')}}" method="post">
            @csrf
             <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{  trans('sentence.passenger id')}}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('pid') is-invalid @enderror" name="pid"  value="{{$payment->passenger->id}}" autocomplete="pid" readonly>

                                @error('pid')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                     <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{  trans('sentence.phone')}}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile"  value="{{$payment->passenger->Phone_no}}" autocomplete="mobile" readonly>

                                @error('pid')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                    <div class="form-row">
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <div class="card-footer">
                 <button type="submit" class="btn btn-info">{{  trans('sentence.send')}}</button>
                            </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
                        </div>
                    </div>
            </div>

</main>          
@endsection
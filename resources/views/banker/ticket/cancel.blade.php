@extends('layouts.bankerdashboard')
   
@section('content')
<div class="col-sm-12">
  @if(session()->get('success'))
    <div id="myMsg" class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
<div class="col-sm-12">
  @if(session()->get('warning'))
    <div id="myMsg" class="alert alert-danger">
      {{ session()->get('warning') }}  
    </div>
  @endif
</div>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-info">
            
                <div class="card-header">
                <h3 class="card-title">Cancel your ticket here</h3>
                    </div>

                <div class="card-body" style="display: block;">
                    <div class="card card-info">
                   <form action="/bcancel" method="GET" role="form">
                        @csrf
     <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{  trans('sentence.passenger id')}}</label>

                            <div class="col-md-6">
                              <select class="form-control" name="pid" required>
                                @foreach($passengers as $passenger)
                                <option value="{{$passenger->id}}">{{$passenger->P_fname}} {{$passenger->P_fname}}</option>
                              @endforeach
</select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                       <input type="hidden" name="uid" value="{{ Auth::user()->id }}" >
                       </div>
                        </div>
                       
                     <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                 <div class="card-footer">
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-info">{{  trans('sentence.cancel')}}</button>
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
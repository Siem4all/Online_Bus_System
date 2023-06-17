@extends('layouts.admindashboard')

@section('content')
<div class="col-sm-12">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
<div class="row">
    <div class="col-md-4">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">{{  trans('sentence.mobile')}}</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                     <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">
                <div class="card card-info">
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="post" action="{{ route('payment.update', $payment->id) }}">
                        @method('PATCH') 
                       @csrf
                <div class="card-body">
                  <div class="form-group row">
                  </div>
                     <div class="form-group row">
                    
                    <div class="col-sm-10">
                      <input type="text" class="form-control @error('fname') is-invalid @enderror" id="inputEmail3" name="fname" value="{{$payment->First_name}}">
                        @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  </div>
                     <div class="form-group row">
                    
                    <div class="col-sm-10">
                      <input type="text" class="form-control @error('mname') is-invalid @enderror" id="inputEmail3" name="mname" value="{{$payment->Middle_name}}">
                        @error('mname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  </div>
                     <div class="form-group row">
                   
                    <div class="col-sm-10">
                      <input type="text" class="form-control @error('lname') is-invalid @enderror" id="inputEmail3" name="lname" value="{{$payment->Last_name}}">
                        @error('lname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  </div>
                     <div class="form-group row">
                    <div class="col-sm-10">
                      <input type="text" class="form-control @error('gender') is-invalid @enderror" id="inputEmail3"  name="gender" value="{{$payment->Gender}}">
                        @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  </div>
                     <div class="form-group row">
                    <div class="col-sm-10">
                      <input type="text" class="form-control @error('mobile') is-invalid @enderror" id="inputEmail3"  name="mobile" value="{{$payment->Mobile}}">
                        @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    
                    <div class="col-sm-10">
                      <input type="text" class="form-control @error('address') is-invalid @enderror" id="inputPassword3" name="address" value="{{$payment->Address}}">
                        @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  </div>
                    <div class="form-group row">
                    
                    <div class="col-sm-10">
                      <input type="text" class="form-control @error('bank') is-invalid @enderror" id="inputPassword3" name="bank" value="{{$payment->Bank}}">
                        @error('bank')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  </div>
                    <div class="form-group row">
                    
                    <div class="col-sm-10">
                      <input type="text" class="form-control @error('system') is-invalid @enderror" id="inputPassword3" name="system" value="{{$payment->System}}">
                        @error('system')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-info">{{  trans('sentence.update')}}</button>
            
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
   <div class="col-md-8">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">{{  trans('sentence.view history')}}</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                     <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">
               <table class="table table-hover table-bordered">
  <thead class="bg-dark">
    <tr>
      <th scope="col">{{  trans('sentence.id')}}</th>
      <th scope="col">{{  trans('sentence.first')}}</th>
        <th scope="col">{{  trans('sentence.middle')}}</th>
      <th scope="col">{{  trans('sentence.last')}}</th>
        <th scope="col">{{  trans('sentence.gender')}}</th>
        <th scope="col">{{  trans('sentence.phone')}}</th>
        <th scope="col">{{  trans('sentence.address')}}</th>
        <th scope="col">{{  trans('sentence.bank')}}</th>
        <th scope="col">{{  trans('sentence.system')}}</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-success">
        <td>{{$payment->id}}</td>
      <td>{{$payment->First_name}}</td>
        <td>{{$payment->Middle_name}}</td>
      <td>{{$payment->Last_name}}</td>
        <td>{{$payment->Gender}}</td>
        <td>{{$payment->Mobile}}</td>
        <td>{{$payment->Address}}</td>
        <td>{{$payment->Bank}}</td>
      <td>{{$payment->System}}</td>
    </tr>
   
  </tbody>
</table>   
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          
          <!-- /.col -->
        </div>
@endsection

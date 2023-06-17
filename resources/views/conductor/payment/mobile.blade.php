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
            <div class="card card-info">
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
              <form class="form-horizontal" method="post" action="{{ route('payment.store')}}">
                        @csrf
                <div class="card-body">
                  <div class="form-group row">
                  </div>
                     <div class="form-group row">
                    
                    <div class="col-sm-10">
                      <input type="text" class="form-control @error('fname') is-invalid @enderror" id="inputEmail3" name="fname" placeholder="{{  trans('sentence.enter first')}}">
                        @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  </div>
                     <div class="form-group row">
                    
                    <div class="col-sm-10">
                      <input type="text" class="form-control @error('mname') is-invalid @enderror" id="inputEmail3" name="mname" placeholder="{{  trans('sentence.enter middle')}}">
                        @error('mname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  </div>
                     <div class="form-group row">
                   
                    <div class="col-sm-10">
                      <input type="text" class="form-control @error('lname') is-invalid @enderror" id="inputEmail3" name="lname" placeholder="{{  trans('sentence.enter last')}}">
                        @error('lname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  </div>
                     <div class="form-group row">
                    <div class="col-sm-10">
                      <input type="text" class="form-control @error('gender') is-invalid @enderror" id="inputEmail3"  name="gender" placeholder="{{  trans('sentence.enter gender')}}">
                        @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  </div>
                     <div class="form-group row">
                    <div class="col-sm-10">
                      <input type="text" class="form-control @error('mobile') is-invalid @enderror" id="inputEmail3"  name="mobile" placeholder="{{  trans('sentence.enter mobile')}}">
                        @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    
                    <div class="col-sm-10">
                      <input type="text" class="form-control @error('address') is-invalid @enderror" id="inputPassword3" name="address" placeholder="{{  trans('sentence.enter address')}}">
                        @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  </div>
                    <div class="form-group row">
                    
                    <div class="col-sm-10">
                      <input type="text" class="form-control @error('bank') is-invalid @enderror" id="inputPassword3" name="bank" placeholder="{{  trans('sentence.enter bank')}}">
                        @error('bank')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  </div>
                    <div class="form-group row">
                    
                    <div class="col-sm-10">
                      <input type="text" class="form-control @error('system') is-invalid @enderror" id="inputPassword3" name="system" placeholder="{{  trans('sentence.enter system')}}">
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
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-info">{{  trans('sentence.add')}}</button>
            
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
            <div class="card card-info">
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
                  <div class="card-footer">
                <form action="/paysearch" method="GET">
                  <div class="input-group">
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="search" placeholder="{{  trans('sentence.search')}} ..." class="form-control">
                    <span class="input-group-append">
                      <button type="submit" class="btn btn-info">{{  trans('sentence.search')}}</button>
                    </span>
                  </div>
                </form>
              </div>
    <table class="table table-hover table-bordered" style="width:50%;">
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
        <th scope="col" colspan = 2>{{  trans('sentence.action')}}</th>
    </tr>
  </thead>
  <tbody>
       @foreach($payments as $payment)
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
        <td>
                <a href="{{ route('payment.edit',$payment->id)}}" class="btn btn-primary">{{  trans('sentence.edit')}}</a>
            </td>
            <td>
                <form action="{{ route('payment.destroy', $payment->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">{{  trans('sentence.delete')}}</button>
                </form>
            </td>
     
    </tr>
    @endforeach
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

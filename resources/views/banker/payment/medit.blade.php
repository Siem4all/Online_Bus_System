@extends('layouts.bankerdashboard')

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
              <form class="form-horizontal" method="post" action="{{ route('bpayment.update', $payment->id) }}">
                        @method('PATCH') 
                       @csrf
                <div class="card-body">
                  <div class="form-group row">
                  </div>
                    <div class="form-group row">
                   
                    <div class="col-sm-10">
                      <input type="hidden" class="form-control @error('uid') is-invalid @enderror" id="inputEmail3" name="uid" value="{{$payment->user_id}}">
                        @error('uid')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  </div>
                     <div class="form-group row">
                    
                    <div class="col-sm-10">
                      <input type="number" class="form-control @error('fname') is-invalid @enderror" id="inputEmail3" name="pid" value="{{$payment->passenger_id}}">
                        @error('pid')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  </div>
                     <div class="form-group row">
                   
                    <div class="col-sm-10">
                      <input type="text" class="form-control @error('rid') is-invalid @enderror" id="inputEmail3" name="rid" value="{{$payment->route_id}}">
                        @error('rid')
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
             <table class="table table-responsive table-hover table-bordered">
  <thead class="bg-dark">
    <tr>
      <th scope="col">{{  trans('sentence.id')}}</th>
      <th scope="col">{{  trans('sentence.first')}}</th>
      <th scope="col">{{  trans('sentence.last')}}</th>
        <th scope="col">{{  trans('sentence.phone')}}</th>
          <th scope="col">{{  trans('sentence.route name')}}</th>
          <th scope="col">{{  trans('sentence.fare')}}</th>
        <th scope="col">{{  trans('sentence.bank')}}</th>
        <th scope="col">{{  trans('sentence.system')}}</th>
        <th scope="col" colspan = 2>{{  trans('sentence.action')}}</th>
    </tr>
  </thead>
  <tbody>
       @foreach($payments as $payment)
    <tr class="table-success">
        <td>{{$payment->id}}</td>
      <td>{{$payment->passenger->P_fname}}</td>
        <td>{{$payment->passenger->P_lname}}</td>
        <td>{{$payment->passenger->Phone_no}}</td>
        <td>{{$payment->route->Route_name}}</td>
        <td>{{$payment->route->Fare}}</td>
        <td>{{$payment->Bank}}</td>
      <td>{{$payment->System}}</td>
        <td>
                <a href="{{ route('bpayment.edit',$payment->id)}}" class="btn btn-primary">{{  trans('sentence.edit')}}</a>
            </td>
            <td>
                <form action="{{ route('bpayment.destroy', $payment->id)}}" method="post">
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

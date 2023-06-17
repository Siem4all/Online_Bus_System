@extends('layouts.conductordashboard')
   
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
<div class="row">
    <div class="col-md-5">
            <div class="card card-info">
              <div class="card-header">
                  <h3 class="card-title">{{  trans('sentence.write message')}}</h3>
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
                    <form action="{{ route('cmessage.store') }}" method="post" class="form-horizontal">
                   @csrf
     <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{  trans('sentence.passenger id')}}</label>

                            <div class="col-md-6">
                                <input id="email" type="number" class="form-control @error('pid') is-invalid @enderror" name="pid"   autocomplete="passenger_id">

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
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-info">{{  trans('sentence.add')}}</button>
                            </div>
                            </div>
                        </div>
                </form>
                     </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
   <div class="col-md-7">
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
<form action="/cmsearch" method="GET" role="form">
    <div class="input-group">
        <input type="text" class="form-control" name="search"
            placeholder="{{  trans('sentence.search')}} ..."> <span class="input-group-btn">
            <button type="submit" class="btn btn-info">
                <span>{{  trans('sentence.search')}}</span>
            </button>
        </span>
    </div>
</form>
</div>
<table class="table table-responsive table-hover table-bordered">
  <thead class="bg-dark">
    <tr>
      <th scope="col">{{  trans('sentence.id')}}</th>
      <th scope="col">{{  trans('sentence.phone')}}</th>
        <th scope="col">{{  trans('sentence.message')}}</th>
         <th scope="col" colspan =3>{{  trans('sentence.action')}}</th>
    </tr>
  </thead>
  <tbody>
       @foreach($messages as $message)
    <tr class="table-success">
      <td>{{$message->id}}</td>
        <td>{{$message->passenger->Phone_no}}</td>
        <td>{{$message->message}}</td>
      <td>
                <a href="{{ route('cmessage.edit',$message->id)}}" class="btn btn-primary">{{  trans('sentence.edit')}}</a>
            </td>
            <td>
                <form action="{{ route('cmessage.destroy',$message->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">{{  trans('sentence.delete')}}</button>
                </form>
            </td>
        <td>
             <a href="{{ route('cmessage.show',$message->id)}}" class="btn btn-success">{{  trans('sentence.send')}}</a>
               
            </td>
        
    </tr>
    @endforeach
  </tbody>
</table>   
    </div>   
                </div>
            <!-- /.card -->
          </div>
          
          <!-- /.col -->
        </div>
@endsection
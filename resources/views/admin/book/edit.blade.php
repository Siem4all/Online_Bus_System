@extends('layouts.admindashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
             <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">{{  trans('sentence.update book')}}</h3>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">
                 <div class="card card-info">
                    <form method="post" action="{{ route('book.update', $book->id) }}">
                        @method('PATCH') 
                        @csrf
                      <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{  trans('sentence.seat id')}}</label>

                            <div class="col-md-6">
                                <input id="name" type="number" class="form-control @error('seatid') is-invalid @enderror" name="seatid" value="{{$book->seat_id}}" required autocomplete="seatid" autofocus>

                                @error('seatid')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{  trans('sentence.schedule id')}}</label>

                            <div class="col-md-6">
                                <input id="email" type="number" class="form-control @error('scheduleid') is-invalid @enderror" name="scheduleid"  value="{{$book->schedule_id}}"required autocomplete="scheduleid">

                                @error('scheduleid')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    <div class="form-group row">
                            <div class="col-md-6">
                                <input type="hidden"  name="userid"  value="{{$book->user_id}}">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <div class="card-footer">
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

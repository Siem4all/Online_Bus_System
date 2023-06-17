@extends('layouts.conductordashboard')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Update Ticket</h3>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">
                 <div class="card card-info">
                    <form method="POST" action="{{ route('cticket.update', $ticket->id) }}">
                        @method('PATCH') 
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('passenger id') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="number" class="form-control @error('bookid') is-invalid @enderror" name="bookid" value="{{$ticket->book_id}}" autocomplete="bookid" autofocus>
                                @error('bookid')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>
                         
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <div class="card-footer">
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-info">Update</button>
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

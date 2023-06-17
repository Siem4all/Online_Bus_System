@extends('layouts.admindashboard')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">{{  trans('sentence.update route')}}</h3>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">
                 <div class="card card-info">
                    <form method="POST" action="{{ route('route.update', $route->id) }}">
                         @method('PATCH') 
                       @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{  trans('sentence.departure')}}</label>

                            <div class="col-md-6">
                               <select class="form-control" name="departure">
                                 <option>Addiss Abeba</option>
                                 <option>Assosa</option>
                                <option>Arbaminch</option>
                                 <option>Jimma</option>
                                <option>Metu</option>
                                <option>Mekelle</option>
                                    <option>Bahirdar</option>
                                    <option>Gonder</option>
                                    <option>Gambella</option>
                                    <option>Hawessa</option>
                                    <option>Harar</option>
                                    <option>Dire Dawa</option>
                                    <option>Nekemte</option>
                                    <option>Moyale</option>
                                    <option>Gimbi</option>
                                    <option>Nedjo</option>
                                    <option>Mendi</option>
                                    <option>Dembi Dello</option>
                                    <option>Bedelle</option>
                                    <option>Negele</option>
                                    <option>Borena</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{  trans('sentence.destination')}}</label>

                            <div class="col-md-6">
                                <select class="form-control" name="destination">
                                 <option>Addiss Abeba</option>
                                 <option>Assosa</option>
                                <option>Arbaminch</option>
                                 <option>Jimma</option>
                                <option>Metu</option>
                                <option>Mekelle</option>
                                    <option>Bahirdar</option>
                                    <option>Gonder</option>
                                    <option>Gambella</option>
                                    <option>Hawessa</option>
                                    <option>Harar</option>
                                    <option>Dire Dawa</option>
                                    <option>Nekemte</option>
                                    <option>Moyale</option>
                                    <option>Gimbi</option>
                                    <option>Nedjo</option>
                                    <option>Mendi</option>
                                    <option>Dembi Dello</option>
                                    <option>Bedelle</option>
                                    <option>Negele</option>
                                    <option>Borena</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">

                            <div class="col-md-6">
                                <input id="distance" type="hidden" class="form-control @error('routename') is-invalid @enderror" name="routename" value="{{$route->Route_name}}" autocomplete="routename">

                                @error('routename')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="distance" class="col-md-4 col-form-label text-md-right">{{  trans('sentence.distance')}}</label>

                            <div class="col-md-6">
                                <input id="distance" type="number" class="form-control @error('distance') is-invalid @enderror" name="distance" value="{{$route->Distance}}" autocomplete="distance">

                                @error('distance')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fare" class="col-md-4 col-form-label text-md-right">{{  trans('sentence.fare')}}</label>

                            <div class="col-md-6">
                                <input id="fare" type="number" class="form-control @error('fare') is-invalid @enderror" name="fare" value="{{ $route->Fare}}"  autocomplete="fare">

                                @error('fare')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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

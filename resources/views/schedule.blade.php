@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="btn-dark col-md-8">
            <div class="card">
                <div class="btn-dark"><h3>Search Bus Availability Here</h3></div>

                <div class="card-body btn-success form-inline">
                    <form action="/bussearch" method="get" role="form">
                        @csrf
                    <lablel>Route Name:</lablel>
                        <select name="routename"> 
                                     @foreach($routes as $route)
                           <option>{{$route->Route_name}}</option>
                                     @endforeach
        
                              </select> 
                          <lablel>Date:</lablel>
                        <input type="date" name="date" required>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        
                       <button class=" btn btn-info">Search</button>
                    </form>
                    <div class="col-sm-6">
  @if(session()->get('warning'))
    <div class="alert alert-danger">
      {{ session()->get('warning') }}  
    </div>
  @endif
</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

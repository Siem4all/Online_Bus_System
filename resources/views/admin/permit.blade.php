@extends('layouts.admindashboard')
   
@section('content')
<div class="col-sm-12">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
<div class="col-sm-12">
  @if(session()->get('warning'))
    <div class="alert alert-danger">
      {{ session()->get('warning') }}  
    </div>
  @endif
</div>
<div class="row d-flex flex-row-reverse">
    <div class="col-md-4">
<form action="/allowsearch" method="GET" role="form">

    <div class="input-group">
        <input type="text" class="form-control" name="search" placeholder="{{  trans('sentence.search here')}}" class="input-group-btn">
            <button type="submit" class="btn btn-info">
                <span>{{  trans('sentence.search')}}</span>
            </button>
    </div>
</form>
</div>
<table class="table table-responsive table-hover table-bordered">
  <thead class="bg-dark">
    <tr>
      <th scope="col">{{  trans('sentence.id')}}</th>
      <th scope="col">{{  trans('sentence.name')}}</th>
      <th scope="col">{{  trans('sentence.email')}}</th>
    <th scope="col">{{  trans('sentence.admin')}}</th>
      <th scope="col">{{  trans('sentence.conductor')}}</th>
        <th scope="col">{{  trans('sentence.banker')}}</th>
    </tr>
  </thead>
  <tbody>
       @foreach($users as $user)
    <tr class="table-info">
      <td>{{$user->id}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
    <td><a href="{{ route('allow.edit',$user->id)}}" class="btn btn-primary ">{{$user->is_admin}}</a></td>
    <td><a href="{{ route('allow.show',$user->id)}}" class="btn btn-primary">{{$user->is_conductor}}</a></td>
        <td><a href="{{ route('permission.edit',$user->id)}}" class="btn btn-primary">{{$user->is_banker}}</a></td>
    </tr>
    @endforeach
  </tbody>
</table>   
    </div>
@endsection
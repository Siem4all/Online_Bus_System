@extends('layouts.userdashboard')
   
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> {{ trans('sentence.dashboard')}}</h1>
          </div><!-- /.col -->
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content container">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <img src="{{ asset('images/od.jpg') }}" style="width:100%">
          </div>
          </section>  
@endsection
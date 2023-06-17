@extends('layouts.bankerdashboard')
   
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
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6 fas card"  >
            <!-- small box -->
            <div class="small-box bg-info">
                <img class="card-img-top" src="{{ asset('images/avater.jpg') }}" alt="passnger" width='50' height='80px'>
              <div class="inner">
                <h4> {{ trans('sentence.passenger')}}</h4>
                    <h4>{{ $passengers->count() }}</h4>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="/bpassenger" class="small-box-footer">{{ trans('sentence.more info')}} <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
            
          <!-- ./col -->
          <div class="col-lg-3 col-6 fas card">
            <!-- small box -->
            <div class="small-box bg-success">
                <img class="card-img-top" src="{{ asset('images/odd.jpg') }}" alt="odaa bus" width='50' height='80px'>
              <div class="inner">
                  <h4>{{ trans('sentence.bus')}}</h4>
                  <h4>{{ $buses->count() }}</h4>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="/bbus" class="small-box-footer">{{ trans('sentence.more info')}}  <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
             <div class="col-lg-3 col-6 fas card">
            <!-- small box -->
            <div class="small-box bg-danger">
                <img class="card-img-top" src="{{ asset('images/seat.jpg') }}" alt="Card image" width='10' height='80px'>
              <div class="inner">
               <h4>{{ trans('sentence.seat')}}</h4>
                   <h4>{{ $seates->count() }}</h4>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="/bseat" class="small-box-footer">{{ trans('sentence.more info')}}  <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
            <div class="col-lg-3 col-6 fas card">
            <!-- small box -->
            <div class="small-box bg-secondary">
                <img class="card-img-top" src="{{ asset('images/route.png') }}" alt="route" width='10' height='80px'>
              <div class="inner">
                <h4>{{ trans('sentence.route')}}</h4>
                    <h4>{{ $routes->count() }}</h4>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="/broute" class="small-box-footer">{{ trans('sentence.more info')}}  <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          </div>
          </div>
          </section>
 <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

          <div class="col-lg-3 col-6 fas card">
            <!-- small box -->
            <div class="small-box bg-info">
                <img class="card-img-top" src="{{ asset('images/schedule.png') }}" alt="schedule" width='10' height='80px'>
              <div class="inner">
                  <h4>{{ $schedules->count() }}</h4>
                <h4>{{ trans('sentence.schedule')}}</h4>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="/bsschedule" class="small-box-footer">{{ trans('sentence.more info')}}  <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        <div class="col-lg-3 col-6 fas card">
            <!-- small box -->
            <div class="small-box bg-info">
                <img class="card-img-top" src="{{ asset('images/book.jpg') }}" alt="schedule" width='10' height='80px'>
              <div class="inner">
                  <h4>{{ $books->count() }}</h4>
               <h4>{{ trans('sentence.book')}}</h4>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="/bbook" class="small-box-footer">{{ trans('sentence.more info')}}  <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
            
            <div class="col-lg-3 col-6 fas card">
            <!-- small box -->
            <div class="small-box bg-info">
                <img class="card-img-top" src="{{ asset('images/money.jpg') }}" alt="schedule" width='10' height='80px'>
              <div class="inner">
                  <h4>{{ $payments->count() }}</h4>
                <h4>{{ trans('sentence.payment')}} </h4>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="/bpayment" class="small-box-footer">{{ trans('sentence.more info')}}  <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
          </div>
          </section>

          
@endsection
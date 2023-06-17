@extends('layouts.admindashboard')

@section('content')
<div class="card-header bg-danger text-light">{{ __('What form of payment do you want to use?') }}</div>
<div class="row">
    <div class="col-md-6">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Mobile Banking</h3>

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
              <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                  </div>
                     <div class="form-group row">
                    
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" name="fname" placeholder="Enter your first name">
                    </div>
                  </div>
                     <div class="form-group row">
                    
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" name="mname" placeholder="Enter your middle name">
                    </div>
                  </div>
                     <div class="form-group row">
                   
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" name="lname" placeholder="Enter your last name">
                    </div>
                  </div>
                     <div class="form-group row">
                   
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3"  name="mobile" placeholder="Enter your mobile">
                    </div>
                  </div>
                  <div class="form-group row">
                    
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" namee="address" placeholder="Enter your address">
                    </div>
                  </div>
                    <div class="form-group row">
                    
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" name="bank" placeholder="Enter bank name">
                    </div>
                  </div>
                    <div class="form-group row">
                    
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" name="system" placeholder="Enter the system you use">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-info">Save</button>
            
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
   <div class="col-md-6">
            <div class="card card-success collapsed-card">
              <div class="card-header">
                <h3 class="card-title">Online Payment</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                  </button>
                    <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <h3>The body of the card</h3>
                  <p>credit card,paypal and another international form of payments will be used</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          
          <!-- /.col -->
        </div>
@endsection

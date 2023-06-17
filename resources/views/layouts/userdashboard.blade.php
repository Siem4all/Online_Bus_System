<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>User Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
    
  <!--<link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">-->
  <!-- Ionicons -->
    @if((new \Jenssegers\Agent\Agent())->isDesktop())
<link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/desktop.css')}}"  />
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/desktop.css')}}">
    <link rel="stylesheet" href="{{ asset('front/desktop.css')}}">
    <link rel="stylesheet" href="{{ asset('front/desktop.min.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/desktop.css')}}">
     <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/desktop.min.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/jqvmap/desktop.css')}}">
    <link rel="stylesheet" href="{{ asset('dist/css/desktop.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/desktop.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/desktop.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/summernote/desktop.css')}}">
@endif

@if((new \Jenssegers\Agent\Agent())->isMobile())

<link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/mobile.css') }}"  />
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/mobile.css') }}">
     <link rel="stylesheet" href="{{ asset('front/mobile.css') }}">
    <link rel="stylesheet" href="{{ asset('front/mobile.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/mobile.css') }}">
     <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/mobile.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/jqvmap/mobile.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/mobile.css') }}">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/mobile.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/mobile.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/summernote/mobile.css')}}">
@endif
    @if((new \Jenssegers\Agent\Agent())->isTablet())

<link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/tablet.css') }}"  />
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/tablet.css') }}">
    <link rel="stylesheet" href="{{ asset('front/tablet.css') }}">
    <link rel="stylesheet" href="{{ asset('front/tablet.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tablet.css') }}">
     <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/tablet.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/jqvmap/tablet.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/tablet.css') }}">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/tablet.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/tablet.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/summernote/tablet.css')}}">
@endif
   <!--<link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/ionicons.min.css') }}"> -->
  <!-- Tempusdominus Bbootstrap 4 -->
   <!--<link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">-->
  <!-- iCheck -->
  <!--<link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">-->
  <!-- JQVMap -->
  <!--<link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">-->
  <!-- Theme style -->
  <!--<link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">-->
   <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
  <!-- overlayScrollbars -->
  <!--<link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}"> -->
  <!-- Daterange picker -->
  <!--<link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">-->
  <!-- summernote -->
  <!--<link rel="stylesheet" href="plugins/summernote/summernote-bs4.css"><!--
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
 
function timedMsg()
{
var t=setTimeout("document.getElementById('myMsg').style.display='none';",4000);
}
 
</script>
    <script language="JavaScript" type="text/javascript">timedMsg()</script>

</head>
<body class="sidebar-mini sidebar-collapse control-sidebar-slide-open" style="height: auto;">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        
      <!-- Messages Dropdown Menu -->
        @php $locale = session()->get('locale'); @endphp
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ trans('sentence.language')}}<span class="caret"></span>
                            </a>
                            @switch($locale)
                                @case('am')
                                 <b class="text-info">አማርኛ</b>
                                @break
                            @case('af')
                                  <b class="text-info">Oromiffa</b>
                                @break
                             @case('tg')
                               <b class="text-info">ትግርኛ</b> 
                                @break
                                @default
                               <b class="text-info">English</b> 
                            @endswitch
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/lang/en">English</a>
                                <a class="dropdown-item" href="/lang/am">አማርኛ</a>
                                <a class="dropdown-item" href="/lang/af">Oromiffa</a>
                                <a class="dropdown-item" href="/lang/tg"> ትግርኛ </a>
                            </div>
                        </li>
     <li class="nav-item dropdown">
         
                                <a id="navbarDropdown" class="nav-link dropdown-toggle bg-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="btn dropdown-menu dropdown-menu-right bg-secondary" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item bg-success" href="{{ route('upassenger.edit',4) }}">Profile</a>
                                
                                <br>
                                <a class="dropdown-item bg-danger" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                         {{  trans('sentence.logout')}}
                                    </a>
        
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
         
         
                            </li>
    </ul>
  </nav>
  <!-- /.navbar -->
       @if ($message = Session::get('welcome'))
<div id="myMsg" class="alert alert-success alert-block mr-auto">
    <button type="button" class="close" data-dismiss="alert"></button>    
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Hello&nbsp{{ Auth::user()->name }},&nbsp <strong>{{ $message }}</strong>
</div>
@endif
    

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="{{ asset('images/odaa3.jpg') }}" alt="Odaabus Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">{{ trans('sentence.odaabus')}}</span>
    </a>

    <!-- Sidebar -->
      
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
            <li class="nav-item has-treeview menu-open">
            <a href="/home" class="nav-link active bg-dark">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                {{ trans('sentence.dashboard')}}
              </p>
            </a>
          </li>
            <li class="nav-item has-treeview">
            <a href="/useat/show" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                {{ trans('sentence.seat')}}
              </p>
            </a>
          </li>
    
            
            <li class="nav-item has-treeview">
            <a href="{{route('usschedule.index')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               {{ trans('sentence.schedule')}}
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('ubook.index')}}" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
               {{ trans('sentence.book')}}
              </p>
            </a>
          </li>
             <li class="nav-item has-treeview">
            <a href="/uticket" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
               {{ trans('sentence.ticket')}}
              </p>
            </a>
          </li>
            <li class="nav-item has-treeview">
            <a href="/uchange-pswd" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
               {{  trans('sentence.change pswd')}}
              </p>
            </a>
          </li>
            
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
     <strong>Copyright &copy;2021 &nbsp<a href="">Odaabus</a>.</strong>
    All rights reserved.
  </footer>

  <!-- Control Sidebar -->
 
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
  
<script type="text/javascript">
$(function() {
   
    var $form         = $(".require-validation");
   
    $('form.require-validation').bind('submit', function(e) {
        var $form         = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs       = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid         = true;
        $errorMessage.addClass('hide');
  
        $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
          var $input = $(el);
          if ($input.val() === '') {
            $input.parent().addClass('has-error');
            $errorMessage.removeClass('hide');
            e.preventDefault();
          }
        });
   
        if (!$form.data('cc-on-file')) {
          e.preventDefault();
          Stripe.setPublishableKey($form.data('stripe-publishable-key'));
          Stripe.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
          }, stripeResponseHandler);
        }
  
  });
  
  function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            /* token contains id, last4, and card type */
            var token = response['id'];
               
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
   
});
</script>
   <script type="text/javascript">!function(e,t,n){function a(){var e=t.getElementsByTagName("script")[0],n=t.createElement("script");n.type="text/javascript",n.async=!0,n.src="https://beacon-v2.helpscout.net",e.parentNode.insertBefore(n,e)}if(e.Beacon=n=function(t,n,a){e.Beacon.readyQueue.push({method:t,options:n,data:a})},n.readyQueue=[],"complete"===t.readyState)return a();e.attachEvent?e.attachEvent("onload",a):e.addEventListener("load",a,!1)}(window,document,window.Beacon||function(){});
</script>
<script>
    // default beacon
    window.mustHaveHelpScout = true;
    window.Beacon('init', 'bce17412-9364-4fbf-ba35-14bbb85367a9');
    window.Beacon('identify', {
        Name: 'Edward Ghiwet',
        Email: 'edwardghiwet@gmail.com'
    });
</script>
</body>
</html>

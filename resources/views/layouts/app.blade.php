<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>www.odaabus.com</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!--<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">-->
    
@if((new \Jenssegers\Agent\Agent())->isDesktop())
<link rel="stylesheet" href="{{ asset('css/desktop.css') }}"  />
@endif

@if((new \Jenssegers\Agent\Agent())->isMobile())

<link rel="stylesheet" href="{{ asset('css/mobile.css') }}"  />
@endif
    
    @if((new \Jenssegers\Agent\Agent())->isTablet())

<link rel="stylesheet" href="{{ asset('css/tablet.css') }}"  />
@endif
    <!-- Styles -->
    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
     
</head>
<body>
    <img src="{{ asset('images/OAA.png') }}" alt="odaa bus" width='100%' height='72px' margin-bottom='0'>
    <div id="app">
        <nav class="navbar navbar-expand navbar-dark bg-success" style="margin-top:0">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto nav-fill    text-white container row">
                    
                         @guest
                        <li class="nav-item">
                                <a class="text-white nav-link btn-lg" href="/house">{{ trans('sentence.home')}}</a>
                            </li>
                        <li class="nav-item">
                                <a class="text-white nav-link btn-lg" href="/about">{{ trans('sentence.about')}}</a>
                            </li>
                        <li class="nav-item">
                             <a class="text-white nav-link btn-lg" href="/contact">{{ trans('sentence.contact')}}</a>
                            </li>
                        <li class="nav-item">
                                <a class="text-white nav-link btn-lg" href="/busschedule">{{ trans('sentence.schedule')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="text-white nav-link btn-lg" href="{{ route('login') }}">{{ trans('sentence.signin')}}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="text-white nav-link btn-lg" href="{{ route('register') }}">{{ trans('sentence.signup')}}</a>
                                </li>
                             @endif
                        @else
                            <li class="nav-item navbar-expand-lg dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right text-dark" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        
                    </ul>
                </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

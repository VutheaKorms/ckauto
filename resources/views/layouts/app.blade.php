<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" ng-app="app" class="ng-scope">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Free Bootstrap 4 Admin Template">
    <meta name="keyword" content="bootstrap, template, admin, angular, jquery">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CkAuto') }}</title>

    <!-- Styles -->
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}

    <script src="bower_components/jquery/jquery.min.js"></script>
    <script src="bower_components/angular/angular.min.js"></script>

    <script src="bower_components/angular-ui-router/release/angular-ui-router.min.js"></script>
    <script src="bower_components/oclazyload/dist/ocLazyLoad.min.js"></script>
    {{--<script src="bower_components/jquery/dist/jquery.min.js"></script>--}}
    <script src="bower_components/angular-breadcrumb/dist/angular-breadcrumb.min.js"></script>
    <script src="bower_components/angular-loading-bar/build/loading-bar.min.js"></script>

    <!-- Main styles for this application -->
    <link href="app/css/style.css" rel="stylesheet">
    <link href="app/css/styles.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="app/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="app/css/simple-line-icons.css">

    <script src="app/js/app.js"></script>
    {{--<script src="app/js/libs/app.js"></script>--}}
    <script src="app/js/routes.js"></script>

    <script src="app/js/demo/routes.js"></script>

    <script src="app/js/controllers.js"></script>
    <script src="app/js/directives.js"></script>

    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>

<body>

    @if (Auth::guest())
        @yield('content')
        {{--<li><a href="{{ route('login') }}">Login</a></li>--}}
        {{--<li><a href="{{ route('register') }}">Register</a></li>--}}
    @else
    <header class="app-header navbar">
    <button class="navbar-toggler mobile-sidebar-toggler hidden-lg-up" type="button">&#9776;</button>
    <a class="navbar-brand" ui-sref="app.main"></a>
    <ul class="nav navbar-nav hidden-md-down">
    <li class="nav-item">
    <a class="nav-link navbar-toggler sidebar-toggler" href="#">&#9776;</a>
    </li>

    <li class="nav-item px-1">
    <a class="nav-link" href="#">Dashboard</a>
    </li>
    <li class="nav-item px-1">
    <a class="nav-link" href="#">Users</a>
    </li>
    <li class="nav-item px-1">
    <a class="nav-link" href="#">Settings</a>
    </li>
    </ul>
    <ul class="nav navbar-nav ml-auto hidden-md-down">
    <li class="nav-item">
    <a class="nav-link" href="#"><i class="icon-bell"></i><span class="badge badge-pill badge-danger">5</span></a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="#"><i class="icon-list"></i></a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="#"><i class="icon-location-pin"></i></a>
    </li>
    <li class="nav-item dropdown">


    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
    <!--<img src="img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">-->
    <span class="hidden-md-down">{{ Auth::user()->name }}</span>
    </a>

    <ul class="dropdown-menu dropdown-menu-right">
    <div class="dropdown-header text-center">
    <strong>Account</strong>
    </div>

    <a class="dropdown-item" href="#"><i class="fa fa-bell-o"></i> Updates<span class="badge badge-info">42</span></a>
    <a class="dropdown-item" href="#"><i class="fa fa-envelope-o"></i> Messages<span class="badge badge-success">42</span></a>
    <!--<a class="dropdown-item" href="#"><i class="fa fa-tasks"></i> Tasks<span class="badge badge-danger">42</span></a>-->
    <!--<a class="dropdown-item" href="#"><i class="fa fa-comments"></i> Comment<span class="badge badge-warning">42</span></a>-->

    <div class="dropdown-header text-center">
    <strong>Settings</strong>
    </div>

    <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
    <a class="dropdown-item" href="#"><i class="fa fa-wrench"></i> Setting</a>
    <!--<a class="dropdown-item" href="#"><i class="fa fa-usd"></i> Payments<span class="badge badge-default">42</span></a>-->
    <!--<a class="dropdown-item" href="#"><i class="fa fa-file"></i> Projects<span class="badge badge-primary">42</span></a>-->
    <!--<div class="divider"></div>-->
    <!--<a class="dropdown-item" href="#"><i class="fa fa-shield"></i> Lock account</a>-->

    <a class="dropdown-item" href="{{ route('logout') }}"
    onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
    <i class="fa fa-lock"></i>Logout
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
    </form>
    </ul>

    </li>

    </li>

    <li class="nav-item">
    <a class="nav-link navbar-toggler aside-menu-toggler" href="#">&#9776;</a>
    </li>
    </ul>
    </header>
    @endif
    {{--<!-- Scripts -->--}}
    {{--<script src="{{ asset('js/app.js') }}"></script>--}}
</body>
</html>

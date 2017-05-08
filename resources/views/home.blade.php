<html lang="{{ config('app.locale') }}" ng-app="app" class="ng-scope">
<head>

    <style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Free Bootstrap 4 Admin Template">
    <meta name="keyword" content="bootstrap, template, admin, angular, jquery">
    <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CkAuto') }}</title>

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

</head>
{{--@extends('layouts.app')--}}
<body class="navbar-fixed sidebar-nav fixed-nav">

<ui-view class="ng-scope">
    <div ng-include="'app/views/common/navbar.html'" class="ng-scope">
        <header class="navbar ng-scope"></header>
    </div>
    <div ng-include="'app/views/common/sidebar-nav.html'" class="ng-scope"></div>

</ui-view>

</body>
</html>




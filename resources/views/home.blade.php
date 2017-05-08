@extends('layouts.app')
<body class="navbar-fixed sidebar-nav fixed-nav">

<ui-view class="ng-scope">
    {{--<div ng-include="'app/views/common/navbar.blade.php'" class="ng-scope">--}}
        {{--<header class="navbar ng-scope"></header>--}}
    {{--</div>--}}
    <div ng-include="'app/views/common/sidebar-nav.html'" class="ng-scope"></div>

</ui-view>

</body>





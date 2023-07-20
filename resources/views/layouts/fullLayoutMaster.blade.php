{{-- pageConfigs variable pass to Helper's updatePageConfig function to update page configuration  --}}
@isset($pageConfigs)
{!! Helper::updatePageConfig($pageConfigs) !!}
@endisset
    <!DOCTYPE html>
@php
    $configData = Helper::applClasses();
@endphp
<!--
Template Name: Materialize - Material Design Admin Template
Author: PixInvent
Website: http://www.pixinvent.com/
Contact: hello@pixinvent.com
Follow: www.twitter.com/pixinvents
Like: www.facebook.com/pixinvents
Purchase: https://themeforest.net/item/materialize-material-design-admin-template/11446068?ref=pixinvent
Renew Support: https://themeforest.net/item/materialize-material-design-admin-template/11446068?ref=pixinvent
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.

-->
<html class="loading"
      lang="@if(session()->has('locale')){{session()->get('locale')}}@else{{$configData['defaultLanguage']}}@endif"
      data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="apple-touch-icon" href="{{asset('images/favicon/apple-touch-icon-152x152.png')}}">
    <link rel="shortcut icon"  type="image/x-icon" href="{{asset('images/favicon/coffepedia-logo.470afbd.svg')}}">
    <meta name="description" content="CoffePedia">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:regular,bold">
    <link rel="stylesheet" type="text/css" href="{{asset('fulllayout/css/styles.css?v=3')}}">
    <!-- Include core + vendor Styles -->
    <!-- Include core + vendor Styles -->
    @include('panels.styles')

</head>
<!-- END: Head-->


<body
    class="{{$configData['mainLayoutTypeClass']}} @if(!empty($configData['bodyCustomClass'])) {{$configData['bodyCustomClass']}} @endif"
    data-open="click" data-menu="vertical-modern-menu" data-col="1-column">
<div  class="full-body-position">
    <div id="overlay"></div>

    <h1><img   src="{{asset('images/favicon/coffepedia-logo.470afbd.svg')}}">
    </h1>
    @yield('content')
</div>

<!--  main content -->

<!--<div class="countdown styled"></div> -->


{{-- vendor scripts and page scripts included --}}
<script src="{{asset('js/vendors.min.js')}}"></script>
<script type="text/javascript" src="{{asset('fulllayout/js/jquery-1.9.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('fulllayout/js/Backstretch.js')}}"></script>
<script type="text/javascript" src="{{asset('fulllayout/js/jquery.countdown.js')}}"></script>
<script type="text/javascript" src="{{asset('fulllayout/js/global.js')}}"></script>

</body>

</html>

@extends('frontend.frontend_master')
@section('frontend_content')
<!--==============================
        Breadcumb
        ============================== -->
<div class="breadcumb-wrapper " data-bg-src="{{ asset('/frontend/assets/img/breadcumb/breadcumb-bg.png') }}">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">About <span>Us</span></h1>
        </div>
        <div class="breadcumb-menu-wrap">
            <ul class="breadcumb-menu">
                <li><a href="/">Home</a></li>
                <li>about us</li>
            </ul>
        </div>
    </div>
</div>

@include('frontend.layouts.about_section')
@include('frontend.layouts.client_section')
@include('frontend.layouts.team_section')
@endsection
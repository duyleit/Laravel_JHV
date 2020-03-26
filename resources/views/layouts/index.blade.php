@extends('master')

@section('bg')
    <div class="container-fluid jhv-bodytop3" style="background: url({{ url('img/index/top-bg.jpg') }}) no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
        <h1 class="text-center text-shadow">Company Applications</h1>
    </div>
@endsection

@section('content')
<div class="container">
    <div class="page-header">
        <h1></h1>
    </div>
    <div class="row">
        <div class="col-md-4 btn-app text-center main-layout-btn">
            <a class="btn btn-default disabled" href="meeting_room_booking/search">Meeting Room Booking</a>
        </div>
        <div class="col-md-4 btn-app text-center main-layout-btn">
            {{--            {{ link_to("medicine_basic/search", "Infirmary", 'class':'btn btn-default') }}--}}
            <a class="btn btn-default disabled" href="medicine_basic/search">Infirmary</a>
        </div>
        <div class="col-md-4 btn-app text-center main-layout-btn">
            {{--            {{ link_to("administrative/search", "Administrative", 'class':'btn btn-default') }}--}}
            <a class="btn btn-default disabled" href="administrative/search">Administrative</a>
        </div>
        <div class="col-md-4 btn-app text-center main-layout-btn">
            {{--{{ link_to("user/search", "User", 'class':'btn btn-default') }}--}}
            <a class="btn btn-default" href="{{url('user/search')}}">User</a>
        </div>
        {{--{# 180505 - Edit by Duy - Reason.. - Request by.. #}--}}
        <div class="col-md-4 btn-app text-center main-layout-btn">
            {{--{{ link_to("posts/search", "Blog", 'class':'btn btn-default') }}--}}
            <a class="btn btn-default" href="{{url('posts/search')}}">Blog</a>
        </div>
        {{--{# 180522 - Edit by Duy - Reason.. - Request by.. #}--}}
        <div class="col-md-4 btn-app text-center main-layout-btn">
            {{--            {{ link_to("food_order/search", "Food Order", 'class':'btn btn-default') }}--}}
            <a class="btn btn-default disabled" href="food_order/search">Food Order</a>
        </div>
    </div>
    <img class="thumbnail img-responsive" src="{{ url('img/index/jiahsin-company.jpg') }}">
</div>
@endsection
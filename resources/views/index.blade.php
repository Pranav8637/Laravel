@extends('layouts.app')
{{--<!DOCTYPE html>--}}
{{--<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->--}}
{{--<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->--}}
{{--<!--[if !IE]><!-->--}}
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>

    <title>ShopNepal where you can compare prices from different sites.</title>
    <meta name='description' content='Find the best Smartphones by comparing specs, benchmarks, ratings and sales rank. Then find the lowest prices for your favorite products.' />
    <meta charset="utf-8" />
    <title>Metronic | Managed Datatables</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->

    <link rel="shortcut icon" href="favicon.ico" />

{{--    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">--}}
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link href="{{asset('css/frontend_css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/frontend_css/frontend_design.css')}}" rel="stylesheet">

{{--    For Search Bar--}}
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script>

        setTimeout(function() {
            $('#success').fadeOut("slow","swing")
        }, 2000);
    </script>

    <!--For Category-->

</head>
<!-- END HEAD -->

<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
<!-- BEGIN HEADER -->
@section('content')
    @if(session('success'))
        <div class="alert alert-success" id="success">
            {{session('success')}}
        </div>
    @endif
    <!-- DIV FOR TITLE-->
    <div class="title">
        <h1 style="font-size: x-large" align="center">SHOP NEPAL | COMPARE PRICE OF SIMILAR PRODUCTS</h1>
        <img src="{{asset('assets/frontend_images/Cover/banner.jpg')}}" style="width: 100%; height: 65%;">
    </div>
    <!-- DIV FOR CATEGORY-->
    <div class="container">
        <div class="row">
            <h2 align="center">Search for Products</h2>
            <div id="custom-search-input">
                <form action="/search" method="get">
                    <div class="form-group">
                        <input type="search" name="search", class="form-control">
                        <span class="form-group-btn">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <div align="center" style="font-size: large">
            <p class="lead">Roll over the button to choose a category</p>
            <!-- Our Special dropdown has class show-on-hover -->
            <div align="center" class="container">
                <button style="font-size: medium" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    Category <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="http://127.0.0.1:8000/login">Mobile</a></li>
                    <li><a href="#">Desktops</a></li>
                    <li><a href="#">Laptop</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Clothing</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- BEGIN DIV -->
    <!-- Begin table-->
    <div class="container">
        @if(isset($display))
        <div class="product-list">
            <div class="row">
                @foreach($display as $displays)
                <div class="col-sm-3">
                    <div class="white-box">
                        <div class="wishlist-icon">
                        </div>
                        <div class="product-img">
                            <a href="productdetail/{{$displays->product_id}}"><img src="{{asset('assets/frontend_images/Cover/'.$displays->filename)}}" style="width: 50%;">  </a>
                        </div>
                        <div class="product-bottom">
                            <div class="product-name">{{$displays->product_name}}</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @elseif($message !==null)
                <h2 align="center">{{$message}}</h2>
            @endif
        </div>
    </div>
@endsection
</body>
</html>

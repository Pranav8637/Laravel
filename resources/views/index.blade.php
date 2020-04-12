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

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link href="{{asset('css/frontend_css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/frontend_css/frontend_design.css')}}" rel="stylesheet">

    <!--For Category-->

</head>
<!-- END HEAD -->

<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
<!-- BEGIN HEADER -->
@section('content')
    <!-- DIV FOR TITLE-->
    <div class="title">
        <h1 style="font-size: x-large" align="center">SHOP NEPAL | COMPARE PRICE OF SIMILAR PRODUCTS</h1>
        <img src="{{asset('assets/frontend_images/Cover/banner.png')}}" style="width: 100%;">
    </div>
    <!-- DIV FOR CATEGORY-->
    <div class="container">
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
    <div align="center" class="row">
        <div class="col-md-6 col-sm-6"></div>
        <div class="col-md-6 col-sm-6">
            <div id="Search" class="dataTables_filter">
                <label>Search:
                    <input type="search" class="form-control input-sm input-small input-inline" placeholder="" aria-controls="sample_1">
                </label>
            </div>
        </div>
        <div id="sample_1_processing" class="dataTables_processing" style="display: none;">Processing...</div>
    </div>
    <!-- END DIV -->
    <!-- Begin table-->
    <div class="container">
        <div class="product-list">
            <div class="row">
                @foreach($display as $displays)
                <div class="col-md-3 col-sm-6">
                    <div class="white-box">
                        <div class="wishlist-icon">
                        </div>
                        <div class="product-img">
                            <img src="{{asset('assets/frontend_images/Cover/'.$displays->filename)}}" style="width: 50%;">
                        </div>
                        <div class="product-bottom">
                            <div class="product-name">{{$displays->product_name}}</div>
                            <div class="price">
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div style="text-align:center;font-size:14px;padding-top:20px;padding-bottom:20px;">Get free icon packs for your next project at <a href="http://iiicons.in/" target="_blank" style="color:#ff5e63;font-weight:bold;">www.iiicons.in</a></div>
    </div>
@endsection
</body>
</html>

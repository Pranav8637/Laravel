@extends('layouts.app')

@section('content')
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

    <link href="{{asset('css/frontend_css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/frontend_css/frontend_design.css')}}" rel="stylesheet">

    <!--For Category-->

</head>
<!-- END HEAD -->

<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
<!-- BEGIN HEADER -->

<!-- DIV FOR TITLE-->
<div class="title">
    <h1 style="font-size: x-large" align="center">SHOP NEPAL | COMPARE PRICE OF SIMILAR PRODUCTS</h1>
    <img src="{{asset('assets/frontend_images/Cover/banner.png')}}" style="width: 100%;">
</div>
<!-- DIV FOR CATEGORY-->
<div class="container">
    <div align="center" style="font-size: large">
        <p class="lead">Roll over the button to choose a category</p>
        Category:
        <!-- Our Special dropdown has class show-on-hover -->
        <div class="btn-group show-on-hover">
            <button style="font-size: medium" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                Category <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">Mobile</a></li>
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
<table class="table table-striped" align="right">
    <thead>
    <tr>
        <td>Image</td>
        <td>Product</td>
{{--        <td>Daraz</td>--}}
{{--        <td>Sastodeal</td>--}}
{{--        <td>DealAyo</td>--}}
    </tr>
    </thead>
    <tbody>
    @foreach($display as $displays)
        <tr>
            <td>
                <img src="{{asset('assets/frontend_images/Cover/')}}/{{$displays->filename}}" style="width: 100%;">
{{--                <img src ="{{URL::asset('/images/Products')}}/{{$displays->filename}}">--}}
            </td>
            <td>{{$displays->product_name}}</td>
{{--            <td>{{$displays->product_price}}</td>--}}
{{--            <td>{{$displays->product_price}}</td>--}}
{{--            <td>{{$displays->product_price}}</td>--}}
        </tr>
    @endforeach
    </tbody>
</table>
</div>
{{--<table align="center" class="table table-striped table-bordered table-hover table-checkable order-column dataTable no-footer" id="sample_1" style="width: 831px;" role="grid" aria-describedby="sample_1_info">--}}
{{--    <thead>--}}
{{--    <tr role="row">--}}
{{--        <th title="Product Image" class="dt-body-left sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Image: activate to sort column ascending" style="width: 42px;">Image</th>--}}
{{--        <th title="Product Name" class="dt-body-left sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Product: activate to sort column ascending" style="width: 54px;">Product</th>--}}
{{--        <th title="Processor benchmark score from performance tests" class="dt-body-center sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="CPU Bench: activate to sort column descending" style="width: 43px;">Daraz</th>--}}
{{--        <th title="Graphics benchmark score from performance tests" class="dt-body-center sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="GPU Bench: activate to sort column descending" style="width: 43px;">Sastodeal</th>--}}
{{--        <th title="Average user rating" class="dt-body-center sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Rating: activate to sort column descending" style="width: 44px;">DealAyo</th>--}}
{{--    </tr>--}}
{{--    </thead>--}}
{{--    <tbody>--}}

{{--    <tr role="row" class="odd">--}}
{{--        <td class=" dt-body-right"><img src="https://sd.azureedge.net/0/images/product/75215/TELE-REDMI-11-PURPLE-PURPLE-p-0.jpg" height="100" width="100"/></td>--}}
{{--        <td class=" dt-body-left"><a id="prodid12" href="/smartphones/Huawei-P30-ELE-L29-ELE-L29-BC">Xiaomi Redmi 6 (3/64)GB</a></td>--}}
{{--        <td class=" dt-body-center"><span class="goodScoreBox">Rs.18000</span></td>--}}
{{--        <td class=" dt-body-center"><span class="goodScoreBox">Rs.20000</span></td>--}}
{{--        <td class=" dt-body-center">N/A</td>--}}
{{--    </tr>--}}
{{--    <tr role="row" class="even">--}}
{{--        <td class=" dt-body-left"><img src="https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-note-5-ai-dual-camera.jpg" height="100" width="100"/></td>--}}
{{--        <td class=" dt-body-left"><a id="prodid16" href="/smartphones/Huawei-P30-ELE-L29-BLK">Xiaomi Redmi Note 5 AI(4GB+64GB)</a></td>--}}
{{--        <td class=" dt-body-center"><span class="goodScoreBox">Rs.27900</span></td>--}}
{{--        <td class=" dt-body-center"><span class="goodScoreBox">Rs.24900</span></td>--}}
{{--        <td class=" dt-body-center">Rs.28000</td>--}}
{{--    </tr>--}}
{{--    <tr role="row" class="odd">--}}
{{--        <td class=" dt-body-left"><img src="https://sd.azureedge.net/0/images/product/62316/SAM-CY-RAB-6-p-0.jpg" height="100" width="100"/></td>--}}
{{--        <td class=" dt-body-left"><a id="prodid24" href="/smartphones/Samsung-Galaxy-S10e-SM-G970U1">Samsung Galaxy S9+ (G965-128GB)</a></td>--}}
{{--        <td class=" dt-body-center"><span class="goodScoreBox">Rs.100000</span></td>--}}
{{--        <td class=" dt-body-center"><span class="goodScoreBox">Rs.94000</span></td>--}}
{{--        <td class=" dt-body-center">Rs.98000</td>--}}
{{--    </tr>--}}
{{--    <tr role="row" class="even">--}}
{{--        <td class=" dt-body-left"><img src="https://www.dealayo.com/media/catalog/product/cache/1/small_image/300x375/9df78eab33525d08d6e5fb8d27136e95/h/u/huawei-y5-2017-4g-gray-2.jpg" height="100" width="100"/></td>--}}
{{--        <td class=" dt-body-left"><a id="prodid42" href="/smartphones/Huawei-P30-ELE-L29-ELE-L29-AUR">Huawei Y5 2017</a></td>--}}
{{--        <td class=" dt-body-center"><span class="goodScoreBox">N/A</span></td>--}}
{{--        <td class=" dt-body-center"><span class="goodScoreBox">N/A</span></td>--}}
{{--        <td class=" dt-body-center">Rs.15000</td>--}}
{{--    </tr>--}}
{{--    <tr role="row" class="odd">--}}
{{--        <td class=" dt-body-left"><img class="smallimg" src="https://sd.azureedge.net/0/images/product/75728/2-C-75728.jpg" alt="Huawei Mate 20 Pro 51092YBR" height="100" width="100"></td>--}}
{{--        <td class=" dt-body-left"><a id="prodid66" href="/smartphones/Huawei-Mate-20-Pro-51092YBR">Xiaomi Redmi 8a</a></td>--}}
{{--        <td class=" dt-body-center"><span class="goodScoreBox">N/A</span></td>--}}
{{--        <td class=" dt-body-center"><span class="goodScoreBox">Rs.12999</span></td>--}}
{{--        <td class=" dt-body-center">Rs.12000</td>--}}
{{--    </tr>--}}
{{--    <tr role="row" class="even">--}}
{{--        <td class=" dt-body-left"><img class="smallimg" src="https://sd.azureedge.net/0/images/product/62314/SAM-CY-RAB-4-p-0.jpg" height="100" width="100"></td>--}}
{{--        <td class=" dt-body-left"><a id="prodid37" href="/smartphones/Apple-iPhone-7-A1778" height="100" width="100">Samsung Galaxy S10+</a></td>--}}
{{--        <td class=" dt-body-center"><span class="goodScoreBox">N/A</span></td>--}}
{{--        <td class=" dt-body-center"><span class="goodScoreBox">Rs.105900</span></td>--}}
{{--        <td class=" dt-body-center">N/A</td>--}}
{{--    </tr>--}}
{{--    <tr role="row" class="odd">--}}
{{--        <td class=" dt-body-left"><img class="smallimg" src="https://sd.azureedge.net/0/images/product/62494/SD-SAM-YC-13-p-0.jpeg" height="100" width="100" alt="Apple iPhone 7 7-32GB-JTBLK CDMA"></td>--}}
{{--        <td class=" dt-body-left"><a id="prodid165" href="/smartphones/Apple-iPhone-7-7-32GB-JTBLK-CDMA">Samsung Galaxy J4</a></td>--}}
{{--        <td class=" dt-body-center"><span class="goodScoreBox">N/A</span></td>--}}
{{--        <td class=" dt-body-center"><span class="goodScoreBox">Rs.14000</span></td>--}}
{{--        <td class=" dt-body-center">N/A</td>--}}
{{--    </tr>--}}
{{--    <tr role="row" class="even">--}}
{{--        <td class=" dt-body-left"><img src="https://static-01.daraz.com.np/p/bf928b0d4e4b97f10ce0c485400d96d3.jpg" height="100" width="100"></td>--}}
{{--        <td class=" dt-body-left"><a id="prodid10" href="https://static-01.daraz.com.np/p/bf928b0d4e4b97f10ce0c485400d96d3.jpg" height="100" width="100">Samsung Galaxy Note 10+</a></td>--}}
{{--        <td class=" dt-body-center"><span class="goodScoreBox">Rs.129500</span></td>--}}
{{--        <td class=" dt-body-center"><span class="goodScoreBox">N/A</span></td>--}}
{{--        <td class=" dt-body-center">Rs.129599</td>--}}
{{--    </tr>--}}
{{--    <tr role="row" class="odd">--}}
{{--        <td class=" dt-body-left"><img class="smallimg" src="https://images-na.ssl-images-amazon.com/images/I/81SRRlYUoIL._AC_UL160_.jpg" height="100" width="100" alt="Asus ROG Phone ZS600KL-S845-8G512G"></td>--}}
{{--        <td class=" dt-body-left"><a id="prodid21" href="/smartphones/Asus-ROG-Phone-ZS600KL-S845-8G512G">Asus ROG Phone</a></td>--}}
{{--        <td class=" dt-body-center"><span class="goodScoreBox">Rs.129500</span></td>--}}
{{--        <td class=" dt-body-center"><span class="goodScoreBox">Rs.129500</span></td>--}}
{{--        <td class=" dt-body-center">N/A</td>--}}
{{--    </tr>--}}
{{--    <tr role="row" class="even">--}}
{{--        <td class=" dt-body-left"><img src="https://fdn2.gsmarena.com/vv/bigpic/lg-v35-.jpg" height="100" width="100"></td>--}}
{{--        <td class=" dt-body-left"><a id="prodid22" href="/smartphones/LG-V35-Thinq" height="100" width="100">LG V35 Thinq</a></td>--}}
{{--        <td class=" dt-body-center"><span class="goodScoreBox">Rs.129500</span></td>--}}
{{--        <td class=" dt-body-center"><span class="goodScoreBox">Rs.129500</span></td>--}}
{{--        <td class=" dt-body-center">N/A</td>--}}
{{--    </tr>--}}
{{--    </tbody>--}}
{{--</table>--}}
</body>
</html>

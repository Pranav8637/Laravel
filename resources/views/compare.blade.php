@extends('layouts.app')

@section('content')

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
        <link href="{{asset('css/frontend_css/main.css')}}" rel="stylesheet">
        <link href="{{asset('css/frontend_css/line-icons.css')}}" rel="stylesheet">

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

    <div _ngcontent-serverapp-c4="" class="contents">
    <div align="center" class="search-bar">
        <div class="search-inner">
            <div class="form-group inputwithicon">
                <input autocomplete="off" autofocus="" type="text" placeholder="Search">
                <!---->
            </div>
            <button class="btn btn-common" type="button"><i class="lni-search"></i> Search Now </button>
        </div>
    </div>
    </div>

    <div></div>

    <section _ngcontent-serverapp-c5="" class="section-padding" id="categories">
        <div _ngcontent-serverapp-c5="" class="container">
            <div _ngcontent-serverapp-c5="" class="row">
                <div _ngcontent-serverapp-c5="" class="col-12 text-center">
                    <div _ngcontent-serverapp-c5="" class="heading">
                        <h1 _ngcontent-serverapp-c5="" class="section-title">Products Categories</h1>
                        <h4 _ngcontent-serverapp-c5="" class="sub-title">Find the best deals</h4>
                        <app-loader _ngcontent-serverapp-c5="" _nghost-serverapp-c16="">
                            <!---->
                        </app-loader>
                    </div>
                </div>
                <!---->
                <div _ngcontent-serverapp-c5="" class="col-lg-2 col-md-3 col-xs-12">
                    <a _ngcontent-serverapp-c5="" href="{{route('browse.product/mobile')}}">
                        <div _ngcontent-serverapp-c5="" class="category-icon-item lis-bg1">
                            <div _ngcontent-serverapp-c5="" class="icon-box">
                                <div _ngcontent-serverapp-c5="" class="icon"><i _ngcontent-serverapp-c5="" class="lni-mobile"></i></div>
                                <h4 _ngcontent-serverapp-c5="">Phones</h4>
                                <p _ngcontent-serverapp-c5="" class="categories-listing">5425</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div _ngcontent-serverapp-c5="" class="col-lg-2 col-md-3 col-xs-12">
                    <a _ngcontent-serverapp-c5="" href="/browse/Laptop">
                        <div _ngcontent-serverapp-c5="" class="category-icon-item lis-bg2">
                            <div _ngcontent-serverapp-c5="" class="icon-box">
                                <div _ngcontent-serverapp-c5="" class="icon"><i _ngcontent-serverapp-c5="" class="lni-laptop"></i></div>
                                <h4 _ngcontent-serverapp-c5="">Laptop</h4>
                                <p _ngcontent-serverapp-c5="" class="categories-listing">2026</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div _ngcontent-serverapp-c5="" class="col-lg-2 col-md-3 col-xs-12">
                    <a _ngcontent-serverapp-c5="" href="/browse/Television">
                        <div _ngcontent-serverapp-c5="" class="category-icon-item lis-bg3">
                            <div _ngcontent-serverapp-c5="" class="icon-box">
                                <div _ngcontent-serverapp-c5="" class="icon"><i _ngcontent-serverapp-c5="" class="lni-display"></i></div>
                                <h4 _ngcontent-serverapp-c5="">Television</h4>
                                <p _ngcontent-serverapp-c5="" class="categories-listing">1504</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div _ngcontent-serverapp-c5="" class="col-lg-2 col-md-3 col-xs-12">
                    <a _ngcontent-serverapp-c5="" href="/browse/Camera">
                        <div _ngcontent-serverapp-c5="" class="category-icon-item lis-bg4">
                            <div _ngcontent-serverapp-c5="" class="icon-box">
                                <div _ngcontent-serverapp-c5="" class="icon"><i _ngcontent-serverapp-c5="" class="lni-camera"></i></div>
                                <h4 _ngcontent-serverapp-c5="">Camera</h4>
                                <p _ngcontent-serverapp-c5="" class="categories-listing">1362</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div _ngcontent-serverapp-c5="" class="col-lg-2 col-md-3 col-xs-12">
                    <a _ngcontent-serverapp-c5="" href="/browse/Washing%2520Machine">
                        <div _ngcontent-serverapp-c5="" class="category-icon-item lis-bg5">
                            <div _ngcontent-serverapp-c5="" class="icon-box">
                                <div _ngcontent-serverapp-c5="" class="icon"><i _ngcontent-serverapp-c5="" class="lni-leaf"></i></div>
                                <h4 _ngcontent-serverapp-c5="">Washing Machine</h4>
                                <p _ngcontent-serverapp-c5="" class="categories-listing">1069</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div _ngcontent-serverapp-c5="" class="col-lg-2 col-md-3 col-xs-12">
                    <a _ngcontent-serverapp-c5="" href="/browse/Speaker">
                        <div _ngcontent-serverapp-c5="" class="category-icon-item lis-bg6">
                            <div _ngcontent-serverapp-c5="" class="icon-box">
                                <div _ngcontent-serverapp-c5="" class="icon"><i _ngcontent-serverapp-c5="" class="lni-home"></i></div>
                                <h4 _ngcontent-serverapp-c5="">Speaker</h4>
                                <p _ngcontent-serverapp-c5="" class="categories-listing">1049</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div _ngcontent-serverapp-c5="" class="col-lg-2 col-md-3 col-xs-12">
                    <a _ngcontent-serverapp-c5="" href="/browse/Fan">
                        <div _ngcontent-serverapp-c5="" class="category-icon-item lis-bg7">
                            <div _ngcontent-serverapp-c5="" class="icon-box">
                                <div _ngcontent-serverapp-c5="" class="icon"><i _ngcontent-serverapp-c5="" class="lni-home"></i></div>
                                <h4 _ngcontent-serverapp-c5="">Fan</h4>
                                <p _ngcontent-serverapp-c5="" class="categories-listing">867</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div _ngcontent-serverapp-c5="" class="col-lg-2 col-md-3 col-xs-12">
                    <a _ngcontent-serverapp-c5="" href="/browse/Tablet">
                        <div _ngcontent-serverapp-c5="" class="category-icon-item lis-bg8">
                            <div _ngcontent-serverapp-c5="" class="icon-box">
                                <div _ngcontent-serverapp-c5="" class="icon"><i _ngcontent-serverapp-c5="" class="lni-mobile"></i></div>
                                <h4 _ngcontent-serverapp-c5="">Tablet</h4>
                                <p _ngcontent-serverapp-c5="" class="categories-listing">774</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div _ngcontent-serverapp-c5="" class="col-lg-2 col-md-3 col-xs-12">
                    <a _ngcontent-serverapp-c5="" href="/browse/Rice%2520Cooker">
                        <div _ngcontent-serverapp-c5="" class="category-icon-item lis-bg9">
                            <div _ngcontent-serverapp-c5="" class="icon-box">
                                <div _ngcontent-serverapp-c5="" class="icon"><i _ngcontent-serverapp-c5="" class="lni-home"></i></div>
                                <h4 _ngcontent-serverapp-c5="">Rice Cooker</h4>
                                <p _ngcontent-serverapp-c5="" class="categories-listing">740</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div _ngcontent-serverapp-c5="" class="col-lg-2 col-md-3 col-xs-12">
                    <a _ngcontent-serverapp-c5="" href="/browse/Headphone">
                        <div _ngcontent-serverapp-c5="" class="category-icon-item lis-bg10">
                            <div _ngcontent-serverapp-c5="" class="icon-box">
                                <div _ngcontent-serverapp-c5="" class="icon"><i _ngcontent-serverapp-c5="" class="lni-home"></i></div>
                                <h4 _ngcontent-serverapp-c5="">Headphone</h4>
                                <p _ngcontent-serverapp-c5="" class="categories-listing">700</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div _ngcontent-serverapp-c5="" class="col-lg-2 col-md-3 col-xs-12">
                    <a _ngcontent-serverapp-c5="" href="/browse/Gaming">
                        <div _ngcontent-serverapp-c5="" class="category-icon-item lis-bg11">
                            <div _ngcontent-serverapp-c5="" class="icon-box">
                                <div _ngcontent-serverapp-c5="" class="icon"><i _ngcontent-serverapp-c5="" class="lni-heart"></i></div>
                                <h4 _ngcontent-serverapp-c5="">Gaming</h4>
                                <p _ngcontent-serverapp-c5="" class="categories-listing">599</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div _ngcontent-serverapp-c5="" class="col-lg-2 col-md-3 col-xs-12">
                    <a _ngcontent-serverapp-c5="" href="/browse/Vacuum%2520Cleaner">
                        <div _ngcontent-serverapp-c5="" class="category-icon-item lis-bg12">
                            <div _ngcontent-serverapp-c5="" class="icon-box">
                                <div _ngcontent-serverapp-c5="" class="icon"><i _ngcontent-serverapp-c5="" class="lni-heart"></i></div>
                                <h4 _ngcontent-serverapp-c5="">Vacuum Cleaner</h4>
                                <p _ngcontent-serverapp-c5="" class="categories-listing">564</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div _ngcontent-serverapp-c5="" class="col-lg-2 col-md-3 col-xs-12">
                    <a _ngcontent-serverapp-c5="" href="/browse/Projector">
                        <div _ngcontent-serverapp-c5="" class="category-icon-item lis-bg13">
                            <div _ngcontent-serverapp-c5="" class="icon-box">
                                <div _ngcontent-serverapp-c5="" class="icon"><i _ngcontent-serverapp-c5="" class="lni-home"></i></div>
                                <h4 _ngcontent-serverapp-c5="">Projector</h4>
                                <p _ngcontent-serverapp-c5="" class="categories-listing">429</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div _ngcontent-serverapp-c5="" class="col-lg-2 col-md-3 col-xs-12">
                    <a _ngcontent-serverapp-c5="" href="/browse/Earphone">
                        <div _ngcontent-serverapp-c5="" class="category-icon-item lis-bg14">
                            <div _ngcontent-serverapp-c5="" class="icon-box">
                                <div _ngcontent-serverapp-c5="" class="icon"><i _ngcontent-serverapp-c5="" class="lni-home"></i></div>
                                <h4 _ngcontent-serverapp-c5="">Earphone</h4>
                                <p _ngcontent-serverapp-c5="" class="categories-listing">246</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div _ngcontent-serverapp-c5="" class="col-lg-2 col-md-3 col-xs-12">
                    <a _ngcontent-serverapp-c5="" href="/browse/Graphic%2520Card">
                        <div _ngcontent-serverapp-c5="" class="category-icon-item lis-bg15">
                            <div _ngcontent-serverapp-c5="" class="icon-box">
                                <div _ngcontent-serverapp-c5="" class="icon"><i _ngcontent-serverapp-c5="" class="lni-home"></i></div>
                                <h4 _ngcontent-serverapp-c5="">Graphic Card</h4>
                                <p _ngcontent-serverapp-c5="" class="categories-listing">89</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div _ngcontent-serverapp-c5="" class="col-lg-2 col-md-3 col-xs-12">
                    <a _ngcontent-serverapp-c5="" href="/browse/Desktop">
                        <div _ngcontent-serverapp-c5="" class="category-icon-item lis-bg16">
                            <div _ngcontent-serverapp-c5="" class="icon-box">
                                <div _ngcontent-serverapp-c5="" class="icon"><i _ngcontent-serverapp-c5="" class="lni-display"></i></div>
                                <h4 _ngcontent-serverapp-c5="">Desktop</h4>
                                <p _ngcontent-serverapp-c5="" class="categories-listing">84</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div _ngcontent-serverapp-c5="" class="col-lg-2 col-md-3 col-xs-12">
                    <a _ngcontent-serverapp-c5="" href="/browse/Cooling%2520Pad">
                        <div _ngcontent-serverapp-c5="" class="category-icon-item lis-bg17">
                            <div _ngcontent-serverapp-c5="" class="icon-box">
                                <div _ngcontent-serverapp-c5="" class="icon"><i _ngcontent-serverapp-c5="" class="lni-home"></i></div>
                                <h4 _ngcontent-serverapp-c5="">Cooling Pad</h4>
                                <p _ngcontent-serverapp-c5="" class="categories-listing">53</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div _ngcontent-serverapp-c5="" class="col-lg-2 col-md-3 col-xs-12">
                    <a _ngcontent-serverapp-c5="" href="/browse/Home%2520Automation">
                        <div _ngcontent-serverapp-c5="" class="category-icon-item lis-bg18">
                            <div _ngcontent-serverapp-c5="" class="icon-box">
                                <div _ngcontent-serverapp-c5="" class="icon"><i _ngcontent-serverapp-c5="" class="lni-home"></i></div>
                                <h4 _ngcontent-serverapp-c5="">Home Automation</h4>
                                <p _ngcontent-serverapp-c5="" class="categories-listing">5</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    </body>
    </html>


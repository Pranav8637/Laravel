@extends('layouts.app')

<!-- Styles -->
<link href="{{asset('css/frontend_css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('css/frontend_css/owl.carousel.css')}}" rel="stylesheet">
<link href="{{asset('css/frontend_css/stylesfrominternet.css')}}" rel="stylesheet">

@section('content')
    <div class="section-padding">
        <div class="container">
            <div class="product-information row">
                <div class="col-lg-8 col-md-12 col-xs-12">
{{--                    //app image--}}
                    <div class="ads-details-wrapper">
                        <div  class="owl-carousel owl-theme owl-loaded owl-drag" id="owl-demo">
                            <!---->
                            <div class="owl-stage-outer">
                                <div class="owl-stage" style="transform: translate3d(-1280px, 0px, 0px); transition: all 0s ease 0s; width: 3200px;">
                                    <div class="owl-item cloned" style="width: 610px; margin-right: 30px;">
                                        <div  class="item">
                                            <div  class="product-img d-flex justify-content-center"><img  alt="" class="img-fluid" src="https://choicemandu.com/image/cache/catalog/samsung-galaxy-a10s-1-1000x1000.jpg"><span  class="homes-tag featured pointer">Socheko</span><span  class="price-save">Rs. 12,999.00</span>
                                                <!----><span  class="homes-tag rent"><i  class="lni-tag"></i> 16.1 % Off</span></div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 610px; margin-right: 30px;">
                                        <div  class="item">
                                            <div  class="product-img d-flex justify-content-center"><img  alt="" class="img-fluid" src="https://choicemandu.com/image/cache/catalog/samsung-galaxy-a10s-1-1000x1000.jpg"><span  class="homes-tag featured pointer">Socheko</span><span  class="price-save">Rs. 12,999.00</span>
                                                <!----><span  class="homes-tag rent"><i  class="lni-tag"></i> 16.1 % Off</span></div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 610px; margin-right: 30px;">
                                        <div  class="item">
                                            <div  class="product-img d-flex justify-content-center"><img  alt="" class="img-fluid" src="https://choicemandu.com/image/cache/catalog/samsung-galaxy-a10s-1-1000x1000.jpg"><span  class="homes-tag featured pointer">Socheko</span><span  class="price-save">Rs. 12,999.00</span>
                                                <!----><span  class="homes-tag rent"><i  class="lni-tag"></i> 16.1 % Off</span></div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 610px; margin-right: 30px;">
                                        <div  class="item">
                                            <div  class="product-img d-flex justify-content-center"><img  alt="" class="img-fluid" src="https://choicemandu.com/image/cache/catalog/samsung-galaxy-a10s-1-1000x1000.jpg"><span  class="homes-tag featured pointer">Socheko</span><span  class="price-save">Rs. 12,999.00</span>
                                                <!----><span  class="homes-tag rent"><i  class="lni-tag"></i> 16.1 % Off</span></div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 610px; margin-right: 30px;">
                                        <div  class="item">
                                            <div  class="product-img d-flex justify-content-center"><img  alt="" class="img-fluid" src="https://choicemandu.com/image/cache/catalog/samsung-galaxy-a10s-1-1000x1000.jpg"><span  class="homes-tag featured pointer">Socheko</span><span  class="price-save">Rs. 12,999.00</span>
                                                <!----><span  class="homes-tag rent"><i  class="lni-tag"></i> 16.1 % Off</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav disabled">
                                <div class="owl-prev"><i class="lni-chevron-left"></i></div>
                                <div class="owl-next"><i class="lni-chevron-right"></i></div>
                            </div>
                            <div class="owl-dots disabled">
                                <div class="owl-dot active"><span></span></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

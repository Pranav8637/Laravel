@extends('layouts.app')

<!-- Styles -->
<link href="{{asset('css/frontend_css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('css/frontend_css/owl.carousel.css')}}" rel="stylesheet">
{{--<link href="{{asset('css/frontend_css/stylesfrominternet.css')}}" rel="stylesheet">--}}

@section('content')
    <div class="body-wrpr clearfix">
        <div class="prdct-dtl__ttl-cntnr">
            @foreach($detail as $details)
                <h1 itemprop="name" class="prdct-dtl__ttl" data-mspid="12867">{{$details->product_name}}</h1><span class="prdct-dtl__ttl-vrnt" data-size="64 GB"></span>
                @break
            @endforeach
            <div class="prdct-dtl__tlbr clearfix">
{{--                <div class="prdct-dtl__tlbr-rtng">--}}
{{--                </div>--}}
            </div>
        </div>
        <div class="sctn prdct-dtl clearfix">
            <div class="prdct-dtl__left">
                    <div class="prdct-dtl__img-wrpr"> <img class="prdct-dtl__img" src="{{asset('assets/frontend_images/Cover/'.$details->filename)}}"> </div>
            </div>
            <div class="prdct-dtl__rght">
                <div class="prdct-dtl__cntr">
                    <div class="prdct-dtl__prc"> <span class="prdct-dtl__prc-lbl">Best Price:</span> <span>Rs.</span> <span class="prdct-dtl__prc-val">28,499</span> </div>
                    <div class="prdct-dtl__vrnt-wrpr">
                        <div class="prdct-dtl__vrnt-item prdct-dtl__vrnt-size">
{{--                            <div class="prdct-dtl__vrnt-hdr clearfix">--}}
{{--                                <div class="prdct-dtl__vrnt-ttl">VARIANTS</div>--}}
{{--                            </div>--}}
{{--                            <div class="avlbl-sizes">--}}
{{--                                <div class="avlbl-sizes__item-wrpr js-open-link avlbl-sizes__item-wrpr--slctd " data-open-link="https://www.mysmartprice.com/mobile/samsung-galaxy-s9-msp12867"> <span class="avlbl-sizes__item">64 GB</span> </div>--}}
{{--                                <div class="avlbl-sizes__item-wrpr js-open-link " data-open-link="https://www.mysmartprice.com/mobile/samsung-galaxy-s9-128gb-msp14577"> <span class="avlbl-sizes__item">128 GB</span> </div>--}}
{{--                                <div class="avlbl-sizes__item-wrpr js-open-link " data-open-link="https://www.mysmartprice.com/mobile/samsung-galaxy-s9-256gb-msp14299"> <span class="avlbl-sizes__item">256 GB</span> </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                    <div class="prc-box prc-tbl--fullcards">
                        @foreach($detail as $details)
                        <div class="prc-tbl__row-wrpr">
                                <div class="prc-tbl__row clearfix">
                                    <div class="prc-tbl__logo"><h5>{{$details->scraped_product_name}}</h5>
                                    </div>
                                <div class="prc-tbl__info">
                                    <div class="prc-tbl__prc">Rs.{{$details->product_price}}</div>
                                </div>
                                <div class="prc-tbl__info">
                                    <a rel="nofollow" target="_blank" href="{{$details->site_url}}">{{$details->site_name}}</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
{{--                        <div class="prc-tbl__row-wrpr " data-storename="amazon">--}}
{{--                            <div class="prc-tbl__row clearfix">--}}
{{--                                <div class="prc-tbl__logo"><img class="prdct-dtl__str-icon" src="https://assets.mspimages.in/logos/store-logo/amazon_store.png"></div>--}}
{{--                                <div class="prc-tbl__info">--}}
{{--                                    <div class="prc-tbl__prc">₹29,700</div>--}}
{{--                                </div>--}}
{{--                                <div class="prc-tbl__btn">--}}
{{--                                    <a rel="nofollow" target="_blank" href="https://www.mysmartprice.com/out/sendtostore.php?mspid=12867&amp;access_point=desktop&amp;l1=c&amp;top_category=electronics&amp;category=mobile&amp;id=302472573&amp;store=amazon&amp;gtsprice=29700&amp;hashmap=aHR0cDovL3d3dy5hbWF6b24uaW4vZ3Avb2ZmZXItbGlzdGluZy9CMDdDOVk4VFNXLz9zb3J0PXByaWNl" class="bttn bttn--gts prc-tbl__gts-btn js-prc-tbl__gts-btn" data-url="https://www.mysmartprice.com/out/sendtostore.php?mspid=12867&amp;access_point=desktop&amp;l1=c&amp;top_category=electronics&amp;category=mobile&amp;id=302472573&amp;store=amazon&amp;gtsprice=29700&amp;hashmap=aHR0cDovL3d3dy5hbWF6b24uaW4vZ3Avb2ZmZXItbGlzdGluZy9CMDdDOVk4VFNXLz9zb3J0PXByaWNl"></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
{{--                    <div class="kyspc clearfix">--}}
{{--                        <h3 class="kyspc__hdr"> Key Specifications  </h3>--}}
{{--                        <ul class="kyspc__list clearfix">--}}
{{--                            <li class="kyspc__item kyspc__item--cpu">Samsung Exynos 9810</li>--}}
{{--                            <li class="kyspc__item kyspc__item--ram">4GB RAM</li>--}}
{{--                            <li class="kyspc__item kyspc__item--strge">64GB internal storage</li>--}}
{{--                            <li class="kyspc__item kyspc__item--bttry">3000 mAh battery</li>--}}
{{--                            <li class="kyspc__item kyspc__item--cmra">12MP rear &amp; 8MP selfie</li>--}}
{{--                            <li class="kyspc__item kyspc__item--aspct">5.8 inches</li>--}}
{{--                            <li class="kyspc__item kyspc__item--sim">Dual, Nano-SIM (Hybrid Slot )</li>--}}
{{--                            <li class="kyspc__item kyspc__item--os">Android v8.0 (Oreo)</li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                </div>
            </div>
            <div class="prdct-dtl__rght" style="border-top: 1px solid #dfe1e8;">
                <div class="widget">
                    <h4 class="widget-title">Price Drop Alert</h4>
                    <div class="agent-inner">
                        <div class="mb-4">
                            <div class="agent-title" style="margin: 20px">
                                <div class="d-flex justify-content-center">
                                    <span class="d-flex justify-content-around">
                                        <img class="img-thumbnail" src="https://cdn1.storehippo.com/s/58b6b898fe14ad9f7ef50fb8/ms.settings/5256837ccc4abf1d39000001/webp/5c936891f0a9eb03b7037da3-480x480.png" alt="Socheko">
                                    </span>
                                </div>
                            </div>
                            <input  class="form-control ng-untouched ng-pristine ng-valid" placeholder="Your Email" type="email" style="margin-bottom: 20px">
                            <input class="form-control" disabled="" placeholder="Actual Price" type="text" style="margin-bottom: 20px">
                            <p style="margin-bottom: 20px">We will email you when we detect a lower price on <b _ngcontent-serverapp-c38="">Samsung Galaxy A10s (A107)</b></p>
                            <button class="btn btn-common btn-block mt-4" type="submit"><i class="lni-send"></i>Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--@foreach($detail as $details)--}}
{{--<h1>{{$details->product_id}}</h1>--}}
{{--<h1>{{$details->product_name}}</h1>--}}
{{--    @break--}}
{{--@endforeach--}}
@endsection


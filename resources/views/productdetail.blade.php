@extends('layouts.app')

<!-- Styles -->
<link href="{{asset('css/frontend_css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('css/frontend_css/owl.carousel.css')}}" rel="stylesheet">
{{--<link href="{{asset('css/frontend_css/stylesfrominternet.css')}}" rel="stylesheet">--}}

@section('content')
    <div class="body-wrpr clearfix">
        <div class="prdct-dtl__ttl-cntnr">
            @foreach($detail as $details)
                <h1 itemprop="name" class="prdct-dtl__ttl" data-mspid="12867">{{$details->name}}</h1><span class="prdct-dtl__ttl-vrnt" data-size="64 GB"></span>
                @break
            @endforeach
            <div class="prdct-dtl__tlbr clearfix">
{{--                <div class="prdct-dtl__tlbr-rtng">--}}
{{--                </div>--}}
            </div>
        </div>
        <div class="sctn prdct-dtl clearfix">
            <div class="prdct-dtl__left" style="margin-top: 200px;">
                    <div class="prdct-dtl__img-wrpr"> <img class="prdct-dtl__img" src="{{asset('assets/frontend_images/Cover/'.$details->filename)}}"> </div>
            </div>
            <div class="prdct-dtl__rght">
                <div class="prdct-dtl__cntr">
{{--                    @foreach($price as $prices)--}}
{{--                        <h1>{{$prices}}</h1>--}}
                        <div class="prdct-dtl__prc"> <span class="prdct-dtl__prc-lbl">Best Price:</span> <span>Rs.</span> <span class="prdct-dtl__prc-val">{{$price}}</span> </div>
{{--                    @endforeach--}}
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
                            @if($details->created_at == $date_today)
                        <div class="prc-tbl__row-wrpr">
                                <div class="prc-tbl__row clearfix">
                                    <div class="prc-tbl__logo"><h5>{{$details->product_name}}</h5>
                                    </div>
                                <div class="prc-tbl__info">
                                    <label>Today's Price</label>
{{--                                    @if($details->created_at == $date_today)--}}
                                    <div class="prc-tbl__prc"><span>Rs.</span>{{$details->product_price}}</div>
{{--                                    @endif--}}
                                </div>
                                <div class="prc-tbl__info">
                                    <a rel="nofollow" target="_blank" href="{{$details->site_name}}">{{$details->source_name}}</a>
                                </div>
                            </div>
                        </div>
                            @endif
                        @endforeach
                    </div>
{{--                            <div class="prc-box prc-tbl--fullcards">--}}
{{--                            @foreach($detail as $details)--}}
{{--                                @if($details->created_at == $date_yesterday)--}}
{{--                                    <div class="prc-tbl__row-wrpr">--}}
{{--                                        <div class="prc-tbl__row clearfix">--}}
{{--                                            <div class="prc-tbl__logo"><h5>{{$details->product_name}}</h5>--}}
{{--                                            </div>--}}
{{--                                            <div class="prc-tbl__info">--}}
{{--                                                <label>Yesterday's Price</label>--}}
{{--                                                --}}{{--                                    @if($details->created_at == $date_today)--}}
{{--                                                <div class="prc-tbl__prc"><span>Rs.</span>{{$details->product_price}}</div>--}}
{{--                                                --}}{{--                                    @endif--}}
{{--                                            </div>--}}
{{--                                            <div class="prc-tbl__info">--}}
{{--                                                <a rel="nofollow" target="_blank" href="{{$details->site_name}}">{{$details->source_name}}</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                @endif--}}
{{--                            @endforeach--}}


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
{{--                    </div>--}}
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
                    <h4 class="widget-title">Subscribe us for new updates!!</h4>
                    <div class="agent-inner">
                        <div class="mb-4">
                            <div class="agent-title" style="margin: 20px">
                                <div class="d-flex justify-content-center">
                                    <span class="d-flex justify-content-around">
                                        <img src="{{asset('assets/frontend_images/Cover/price drop.jpg')}}" style="height: 40px;">
                                    </span>
                                </div>
                            </div>
                            <form method="POST" action="{{route('subscription')}}" enctype="multipart/form-data">
                                @csrf
                            @auth()
                                <input type="hidden" name="product_id" id="product_id" value="{{$details->product_id}}">
                            <input name="email" class="form-control ng-untouched ng-pristine ng-valid" value="{{Auth::user()->email}}" type="email" style="margin-bottom: 20px">
                            @else
                                    <input id="email" name="email" type="email" class="form-control" placeholder="Enter Your Email!" @error('email') is-invalid @enderror name="email" value="{{ old('email') }}" required autocomplete="email">
                            @endif
{{--                                <input type="hidden" value="{{product_id}}">--}}
                                <p style="margin-bottom: 20px">We will email you when we detect a lower price on <b _ngcontent-serverapp-c38="">{{$details->name}}</b></p>
                            <button class="btn btn-common btn-block mt-4" type="submit"><i class="lni-send"></i>Subscribe</button>
                            </form>
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


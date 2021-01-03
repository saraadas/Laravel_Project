@extends('public_layouts.public_main')




{{--Page Title--}}
@section('title')
    Home
@endsection




@section('content')

    <!-- Banner Section -->
    <section class="banner-section banner-four">
        <div class="banner-bottom-pattern"></div>

        <div class="banner-carousel owl-theme owl-carousel">
            <!-- Slide Item -->
            @foreach ($category as $cat)

                <div class="slide-item">
                    <div class="image-layer" style="background-image:url({{asset("uploads/images/$cat->image")}})"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <div class="content">
                                <div class="inner">
                                    <h2 style="color: white">Find deals on hotels, farms , and much more...</h2>
                                    <div class="text">From cozy country farms to funky city hotels</div>
                                    <div class="link-box">
                                        <a href="/paradise/grid-category/{{$cat->id}}" class="theme-btn btn-style-two"><span class="btn-title">Discover {{$cat->name}}</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        @endforeach


        <!-- Slide Item -->

    </section>
    <!--End Banner Section -->

    <!--Featured Section-->
    <section class="featured-section-four">
        <span class="dotted-pattern dotted-pattern-11"></span>
        <div class="circles-two">
            <div class="c-1"></div>
            <div class="c-2"></div>
        </div>
        <div class="auto-container">
            <div class="row clearfix">
                <!--Text Column-->
                <div class="text-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="sec-title">
                            <h2>Book a reservation<br> to win a free camping adventure<br> in one of the best camps in Jordan.
                            </h2>
                        </div>
                    </div>
                </div>
                <!--Image Column-->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <span class="dotted-pattern dotted-pattern-10"></span>
                        <div class="image-box clearfix">
                            <figure class="image wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="{{asset('public_theme/images/resource/featured-image-13.jpg')}}" alt="" title=""></figure>
                            <figure class="image wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms"><img src="{{asset('public_theme/images/resource/featured-image-14.jpg')}}" alt="" title=""></figure>
                            {{--                            <figure class="image wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms"><img src="{{asset('public_theme/images/resource/featured-image-16.jpg')}}" alt="" title=""></figure>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--Filters Section-->
    <section class="filters-section style-three">
        <div class="auto-container clearfix">
            <div class="form-box default-form filter-form wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                <form method="post" action="room-single.html">
                    <div class="row clearfix">
                        <div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="field-label">Date From</div>
                            <div class="field-inner">
                                <input id="arrival-date" class="date-picker" type="text" name="field-name" value="Nov 02. 2019" placeholder="">
                                <label for="arrival-date" class="icon flaticon-down-arrow"></label>
                            </div>
                        </div>
                        <div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="field-label">Date to</div>
                            <div class="field-inner">
                                <input id="depart-date" class="date-picker" type="text" name="field-name" value="Nov 12. 2019" placeholder="">
                                <label for="depart-date" class="icon flaticon-down-arrow"></label>
                            </div>
                        </div>
                        <div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="field-label">Places</div>
                            <div class="field-inner">
                                <div class="check-sel-box">
                                    <div class="check-sel-btn">
                                        <span class="adult-info">Hotels</span>
                                    </div>
                                    <ul class="check-sel-droplist">
                                        <li>
                                            <div class="sel-title">Select Place:</div>
                                            <div class="clearfix">
                                                <div class="radio-block adult-block"><input type="radio" name="adult-group" id="radio-1" value="Hotels" checked="" ><label for="radio-1">Hotels</label></div>
                                                <div class="radio-block adult-block"><input type="radio" name="adult-group" id="radio-2" value="Resorts" ><label for="radio-2">Resorts</label></div>
                                                <div class="radio-block adult-block"><input type="radio" name="adult-group" id="radio-3" value="Farms"><label for="radio-3">Farms</label></div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="field-label">Location</div>
                            <div class="field-inner">
                                <div class="check-sel-box">
                                    <div class="check-sel-btn">
                                        <span class="child-info">Amman</span>
                                    </div>
                                    <ul class="check-sel-droplist">
                                        <li>
                                            <div class="sel-title">Select Location:</div>
                                            <div class="clearfix">
                                                <div class="radio-block child-block"><input type="radio" name="child-group" id="radio-5" value="Amman" checked=""><label for="radio-5">Amman,Jordan</label></div>
                                                <div class="radio-block child-block"><input type="radio" name="child-group" id="radio-6" value="Zarqa"><label for="radio-6">Zarqa,Jordan</label></div>
                                                <div class="radio-block child-block"><input type="radio" name="child-group" id="radio-7" value="Mafraq"><label for="radio-7">Mafraq,Jordan</label></div>
                                                <div class="radio-block child-block"><input type="radio" name="child-group" id="radio-8" value="Irbid"><label for="radio-8">Irbid,Jordan</label></div>
                                                <div class="radio-block child-block"><input type="radio" name="child-group" id="radio-9" value="Jarash"><label for="radio-9">Jarash,Jordan</label></div>
                                                <div class="radio-block child-block"><input type="radio" name="child-group" id="radio-10" value="Ajloun"><label for="radio-10">Ajloun,Jordan</label></div>
                                                <div class="radio-block child-block"><input type="radio" name="child-group" id="radio-11" value="Al Balqa"><label for="radio-11">Al Balqa,Jordan</label></div>
                                                <div class="radio-block child-block"><input type="radio" name="child-group" id="radio-12" value="Ma'an"><label for="radio-12">Ma'an,Jordan</label></div>
                                                <div class="radio-block child-block"><input type="radio" name="child-group" id="radio-13" value="Tafilah"><label for="radio-13">Tafilah,Jordan</label></div>
                                                <div class="radio-block child-block"><input type="radio" name="child-group" id="radio-14" value="Al Karak"><label for="radio-14">Al Karak,Jordan</label></div>
                                                <div class="radio-block child-block"><input type="radio" name="child-group" id="radio-15" value="Aqaba"><label for="radio-15">Aqaba,Jordan</label></div>
                                                <div class="radio-block child-block"><input type="radio" name="child-group" id="radio-16" value="Madaba"><label for="radio-16">Madaba,Jordan</label></div>


                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-xl-12 col-lg-3 col-md-3 col-sm-12">
                            <div class="field-label e-label">&nbsp;</div>
                            <div class="field-inner">
                                <button class="theme-btn btn-style-one"><span class="btn-title">Check Availability</span></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!--Rooms Section-->
    <section class="rooms-section-four">
        <div class="pattern-top"></div>
        <div class="auto-container">
            <div class="sec-title centered">
                <h2>Hotels & Resorts</h2>
                <div class="lower-text">One of our top picks in Jordan.</div>
            </div>
            <div class="row clearfix">
                <div class="column col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="room-block-one height-three wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="image-layer" style="background-image: url({{asset('public_theme/images/gallery/hilton.jpg')}});"></div>
                                <figure class="image"><img src="{{asset('public_theme/images/gallery/1.jpg')}}" alt="" title=""></figure>
                            </div>
                            <div class="cap-box">
                                <div class="cap-inner">
                                    <div class="price">From <span>$70.00</span></div>
                                    <h6>Hilton Dead Sea Resort & Spa</h6>
                                </div>
                            </div>
                            <div class="hover-box">
                                <div class="hover-inner">
                                    <h4>Hilton Dead Sea Resort & Spa</h4>
                                    <div class="pricing clearfix">
                                        <div class="price">From <span>$70.00</span></div>
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                    </div>

                                    <div class="text">Experience World-class Service at Hilton Dead Sea Resort & Spa</div>
                                    <div class="link-box"><a href="room-single.html" class="theme-btn btn-style-one"><span class="btn-title">Book Now</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="room-block-one height-three wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="image-layer" style="background-image: url({{asset('public_theme/images/gallery/W.jpg')}});"></div>
                                <figure class="image"><img src="{{asset('public_theme/images/gallery/W.jpg')}}" alt="" title=""></figure>
                            </div>
                            <div class="cap-box">
                                <div class="cap-inner">
                                    <div class="price">From <span>$110.00</span></div>
                                    <h6>W Amman</h6>
                                </div>
                            </div>
                            <div class="hover-box">
                                <div class="hover-inner">
                                    <h4>W Amman</h4>
                                    <div class="pricing clearfix">
                                        <div class="price">From <span>$110.00</span></div>
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                    </div>

                                    <div class="text">Get the celebrity treatment with world-class service at W Amman</div>
                                    <div class="link-box"><a href="room-single.html" class="theme-btn btn-style-one"><span class="btn-title">Book Now</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="room-block-one height-four wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="image-layer" style="background-image: url({{asset('public_theme/images/gallery/Almanara.jpg')}});"></div>
                                <figure class="image"><img src="{{asset('public_themeimages/gallery/3.jpg')}}" alt="" title=""></figure>
                            </div>
                            <div class="cap-box">
                                <div class="cap-inner">
                                    <div class="price">From <span>$90.00</span></div>
                                    <h6>Al Manara, a Luxury Collection Hotel, Saraya Aqaba</h6>
                                </div>
                            </div>
                            <div class="hover-box">
                                <div class="hover-inner">
                                    <h4>Al Manara, a Luxury Collection Hotel, Saraya Aqaba</h4>
                                    <div class="pricing clearfix">
                                        <div class="price">From <span>$90.00</span></div>
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                    </div>

                                    <div class="text">Get the celebrity treatment with world-class service at Al Manara, a Luxury Collection Hotel, Saraya Aqaba</div>
                                    <div class="link-box"><a href="room-single.html" class="theme-btn btn-style-one"><span class="btn-title">Book Now</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="room-block-one height-three wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="image-layer" style="background-image: url({{asset('public_theme/images/gallery/moven.jpg')}});"></div>
                                <figure class="image"><img src="{{asset('public_theme/images/gallery/moven.jpg')}}" alt="" title=""></figure>
                            </div>
                            <div class="cap-box">
                                <div class="cap-inner">
                                    <div class="price">From <span>$80.00</span></div>
                                    <h6>Mövenpick Resort & Spa Tala Bay Aqaba</h6>
                                </div>
                            </div>
                            <div class="hover-box">
                                <div class="hover-inner">
                                    <h4>Mövenpick Resort & Spa Tala Bay Aqaba</h4>
                                    <div class="pricing clearfix">
                                        <div class="price">From <span>$80.00</span></div>
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                    </div>

                                    <div class="text">Experience World-class Service at Mövenpick Resort & Spa Tala Bay Aqaba</div>
                                    <div class="link-box"><a href="room-single.html" class="theme-btn btn-style-one"><span class="btn-title">Book Now</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="room-block-one height-three wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="image-layer" style="background-image: url({{asset('public_theme/images/gallery/kemp.jpg')}});"></div>
                                <figure class="image"><img src="{{asset('public_theme/images/gallery/kemp.jpg')}}" alt="" title=""></figure>
                            </div>
                            <div class="cap-box">
                                <div class="cap-inner">
                                    <div class="price">From <span>$75.00</span></div>
                                    <h6>Kempinski Hotel Ishtar Dead Sea</h6>
                                </div>
                            </div>
                            <div class="hover-box">
                                <div class="hover-inner">
                                    <h4>Kempinski Hotel Ishtar Dead Sea</h4>
                                    <div class="pricing clearfix">
                                        <div class="price">From <span>$75.00</span></div>
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                    </div>

                                    <div class="text">Experience World-class Service at Kempinski Hotel Ishtar Dead Sea</div>
                                    <div class="link-box"><a href="room-single.html" class="theme-btn btn-style-one"><span class="btn-title">Book Now</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--Offers Section-->
    <section class="offers-section-three alternate">
        <div class="outer-container clearfix">
            <div class="row clearfix">
                <div class="image-column col-lg-6 col-md-12">
                    <div class="inner">
                        <div class="image-layer" style="background-image: url({{asset('public_theme/images/gallery/naya.jpg')}});"></div>
                    </div>
                </div>
                <div class="text-column clearfix col-lg-6 col-md-12">
                    <div class="circles">
                        <div class="c-1"></div>
                        <div class="c-2"></div>
                    </div>
                    <div class="inner">
                        <div class="carousel-box">
                            <div class="single-item-carousel owl-theme owl-carousel">
                                <div class="slide-item">
                                    <div class="inner-box">
                                        <div class="price">Start From: <span>$100.00 Per Night</span></div>
                                        <h3>Spend Lovely Days at <br>Villa Naya</h3>
                                        <div class="text">VILLA NAYA Branch 3 Jerash </div>
                                        <ul class="features">
                                            <li> located in Rujm al Miḑmār. This self-catered villa features a private pool, a garden, grill facilities, free WiFi and free private parking.</li>
                                            <li>The villa features 3 bedrooms, 2 bathrooms, a flat-screen TV with satellite channels, a dining area, a fully equipped kitchen, and a patio with pool views.</li>
                                        </ul>
                                        <div class="link-box"><a href="room-single.html" class="theme-btn btn-style-two"><span class="btn-title">Get Offer</span></a></div>
                                    </div>
                                </div>
                                <div class="slide-item">
                                    <div class="inner-box">
                                        <div class="price">Special Offers</div>
                                        <h3>Book Now<br>For 2 days and get one day for free</h3>
                                        <div class="text">The villa offers a à la carte or halal breakfast.</div>
                                        <ul class="features">
                                            <li>A terrace is available for guests at VILLA NAYA Branch 3 Jerash Jordan to use.</li>
                                            <li>Free Private Parking Available On Site</li>
                                        </ul>
                                        <div class="link-box"><a href="room-single.html" class="theme-btn btn-style-two"><span class="btn-title">Get Offer</span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br>
    <br>

    <!--Why Section-->
    <section class="why-us-two alternate">
        <div class="pattern-top"></div>
        <span class="dotted-pattern dotted-pattern-6"></span>
        <span class="tri-pattern tri-pattern-5"></span>
        <div class="circles">
            <div class="c-1"></div>
            <div class="c-2"></div>
        </div>
        <div class="auto-container">
            <div class="sec-title centered">
                <h2>Why Choose Hotera</h2>
                <div class="lower-text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</div>
            </div>
            <div class="row clearfix">
                <!--Feature Box-->
                <div class="feature-box-two col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="circle"></span>
                            <span class="flaticon-wine"></span>
                        </div>
                        <h4>Restaurant & Bar</h4>
                    </div>
                </div>

                <!--Feature Box-->
                <div class="feature-box-two col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="circle"></span>
                            <span class="flaticon-modem"></span>
                        </div>
                        <h4>Free Wi-Fi</h4>
                    </div>
                </div>

                <!--Feature Box-->
                <div class="feature-box-two col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="circle"></span>
                            <span class="flaticon-swimming-pool-1"></span>
                        </div>
                        <h4>Pool Access</h4>
                    </div>
                </div>

                <!--Feature Box-->
                <div class="feature-box-two col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="circle"></span>
                            <span class="flaticon-conference"></span>
                        </div>
                        <h4>Conference Room</h4>
                    </div>
                </div>

                <!--Feature Box-->
                <div class="feature-box-two col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="circle"></span>
                            <span class="flaticon-aromatherapy"></span>
                        </div>
                        <h4>Health & Beauty</h4>
                    </div>
                </div>

                <!--Feature Box-->
                <div class="feature-box-two col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="circle"></span>
                            <span class="flaticon-cardio"></span>
                        </div>
                        <h4>Body Fitness</h4>
                    </div>
                </div>

                <!--Feature Box-->
                <div class="feature-box-two col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="circle"></span>
                            <span class="flaticon-snowboard"></span>
                        </div>
                        <h4>Snowboard Rent</h4>
                    </div>
                </div>

                <!--Feature Box-->
                <div class="feature-box-two col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="circle"></span>
                            <span class="flaticon-bowling"></span>
                        </div>
                        <h4>Game Zone</h4>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!--News Section-->
   

@endsection

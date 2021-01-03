@extends('public_layouts.public_main')


@section('title')

@endsection


@section('content')



    <section class="banner-section banner-three">
        <div class="banner-bottom-pattern"></div>

        <div class="banner-carousel owl-theme owl-carousel">
            <!-- Slide Item -->
            <div class="slide-item">
                <div class="image-layer" style="background-image: url(images/main-slider/7.jpg);"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <div class="content">
                            <div class="inner">
                                <h1>World’s Best <br>Mountain Hotel.</h1>
                                <div class="text">Amet consectetur adipisicing elit sed do eiusmod tempor incididunt
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide Item -->
            <div class="slide-item">
                <div class="image-layer" style="background-image: url(images/main-slider/8.jpg);"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <div class="content">
                            <div class="inner">
                                <h1>World’s Best <br>Mountain Hotel.</h1>
                                <div class="text">Amet consectetur adipisicing elit sed do eiusmod tempor incididunt
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide Item -->
            <div class="slide-item">
                <div class="image-layer" style="background-image: url(images/main-slider/9.jpg);"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <div class="content">
                            <div class="inner">
                                <h1>World’s Best <br>Mountain Hotel.</h1>
                                <div class="text">Amet consectetur adipisicing elit sed do eiusmod tempor incididunt
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--End Banner Section -->

    <!--Filters Section-->
    <section class="filters-section style-two">
        <span class="dotted-pattern dotted-pattern-7"></span>
        <span class="tri-pattern tri-pattern-6"></span>
        <div class="auto-container clearfix">
            <div class="form-box default-form filter-form-two wow fadeInRight" data-wow-delay="0ms"
                 data-wow-duration="1500ms">
                <h2>Book Your Room</h2>
                <form method="post" action="/paradise/donebooking">
                    @csrf
                    <div class="outer clearfix">
                        <div class="form-group">
                            <div class="field-label">Arrival</div>
                            <div class="field-inner">
                                <input id="arrival-date" class="date-picker" type="text" name="arrival"
                                       value="Nov 02. 2019" placeholder="">
                                <span class="alt-icon flaticon-calendar-2"></span>
                                <label for="arrival-date" class="icon flaticon-down-arrow"></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="field-label">Departure</div>
                            <div class="field-inner">
                                <input id="depart-date" class="date-picker" type="text" name="departure"
                                       value="Nov 12. 2019" placeholder="">
                                <span class="alt-icon flaticon-calendar-2"></span>
                                <label for="depart-date" class="icon flaticon-down-arrow"></label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="field-inner">
                                <button type="submit" class="theme-btn btn-style-one"><span class="btn-title">Book
                                        Here</span></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>


    <section class="featured-section-three">
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
                            <h2>Quality <br>Holidays With Us</h2>
                        </div>
                        <div class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                        <ul class="features">
                            <li>Enim ad minim veniam quis nostrud.</li>
                            <li>Minim veniam quis nostrud.</li>
                        </ul>
                        <div class="signature"><img src="images/resource/signature-1.png" alt="" title=""></div>
                    </div>
                </div>
                <!--Image Column-->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="image-box">
                            <figure class="image wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="images/resource/featured-image-11.jpg" alt="" title=""></figure>
                            <div class="cap wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1500ms"><span>25</span> Years of Exp.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

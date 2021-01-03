
@extends('public_layouts.public_main')

@section('content')


    <!-- Banner Section -->
    <section class="page-banner">
        <div class="image-layer" style=""></div>
        <div class="banner-bottom-pattern"></div>

        <div class="banner-inner">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <h1>Stay in Touch with Paradise</h1>
                    <div class="page-nav">
                        <ul class="bread-crumb clearfix">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!--Contact Section-->
    <section class="contact-section-two">
        <div class="auto-container clearfix">
            <div class="row clearfix">

                <div class="info-col col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="u-text">Feel Free to visit or call us during the woking hours (9:00AM,6:00PM)</div>

                        <div class="info">
                            <div class="info-block">
                                <div class="block-inner">
                                    <div class="icon-box wow zoomInStable" data-wow-delay="0ms" data-wow-duration="2000ms"><span class="flaticon-placeholder-1"></span></div>
                                    <h4>Address</h4>
                                    <div class="text">Building No,6 Business Park  , Amman Jordan</div>
                                </div>
                            </div>
                            <div class="info-block">
                                <div class="block-inner">
                                    <div class="icon-box wow zoomInStable" data-wow-delay="300ms" data-wow-duration="2000ms"><span class="flaticon-technology-2"></span></div>
                                    <h4>Phone Number</h4>
                                    <div class="text">
                                        <a href="tel:(+48)564-334-21-22-34">(+962) 7788991010</a> <br>
                                        <a href="tel:(+48)564-334-21-25">(+962) 7988987128</a>
                                    </div>
                                </div>
                            </div>
                            <div class="info-block">
                                <div class="block-inner">
                                    <div class="icon-box wow zoomInStable" data-wow-delay="600ms" data-wow-duration="2000ms"><span class="flaticon-email-1"></span></div>
                                    <h4>Email Address</h4>
                                    <div class="text">
                                        <a href="mailto:info@hotera.com">info@paradise.com</a> <br>
                                        <a href="mailto:info@example.com">info@booking_service.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-col col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="form-box default-form contact-form-two wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <h3>Have Any Question?</h3>
                            <div class="text">Please complete the details below and then click on Submit and we’ll be in contact</div>
                            <form method="post" action="https://submit-form.com/XOVU60aa" target="_self" id="contact-form">

                                <input
                                    type="hidden"
                                    name="_redirect"
                                    value="http://127.0.0.1:8000/index"
                                />

                                <div class="form-group">
                                    <div class="field-inner">
                                        <input type="text" name="firstname" value="" placeholder="First name" required="">
                                    </div>
                                </div>
                                      <div class="form-group">
                                    <div class="field-inner">
                                        <input type="text" name="lastname" value="" placeholder="Last name" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="field-inner">
                                        <input type="email" name="email" value="" placeholder="Email" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="field-inner">
                                        <input type="text" name="phone" value="" placeholder="Phone" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="field-inner">
                                        <textarea name="message" placeholder="Message" required=""></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="theme-btn btn-style-one"><span class="btn-title">Send Message</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--Team Section-->
    <div>
        <h1 style="text-align: center;">Our Team</h1>
    </div>
    <section class="team-section">
        <div class="circles-two">
            <div class="c-1"></div>
            <div class="c-2"></div>
        </div>
        <span class="dotted-pattern dotted-pattern-3"></span>
        <span class="tri-pattern tri-pattern-3"></span>
        <div class="auto-container">
            <div class="row clearfix">

                <!--Team-->
                <div class="team-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="" alt="" title=""></a></figure>
                            <div class="social">
                                <ul>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="info-box">
                            <div class="info-inner">
                                <h4>Mohammad Yacoub</h4>
                                <div class="designation">Web Developer</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Team-->
                <div class="team-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="" alt="" title=""></a></figure>
                            <div class="social">
                                <ul>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="info-box">
                            <div class="info-inner">
                                <h4>Sara Adas</h4>
                                <div class="designation">Web Developer</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Team-->
                <div class="team-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="" alt="" title=""></a></figure>
                            <div class="social">
                                <ul>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="info-box">
                            <div class="info-inner">
                                <h4>Anas Melhem</h4>
                                <div class="designation">Web Developer</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Team-->
                <div class="team-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="" alt="" title=""></a></figure>
                            <div class="social">
                                <ul>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="info-box">
                            <div class="info-inner">
                                <h4>Tala Mohammad</h4>
                                <div class="designation">Web Developer</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Team-->
                <div class="team-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">

                </div>

                <!--Team-->
                <div class="team-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="" alt="" title=""></a></figure>
                            <div class="social">
                                <ul>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="info-box">
                            <div class="info-inner">
                                <h4>Kawthar Ahmad</h4>
                                <div class="designation">Web Developer</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Main Footer -->



<!--End pagewrapper--><!--Scroll to top--><div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-up-arrow"></span></div>

<script src="{{asset('public_theme/js/jquery.js')}}"></script>
<script src="{{asset('public_theme/js/popper.min.js')}}"></script>
<script src="{{asset('public_theme/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public_theme/js/jquery-ui.js')}}"></script>
<script src="{{asset('public_theme/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('public_theme/js/owl.js')}}"></script>
<script src="{{asset('public_theme/js/scrollbar.js')}}"></script>
<script src="{{asset('public_theme/js/appear.js')}}"></script>
<script src="{{asset('public_theme/js/validate.js')}}"></script>
<script src="{{asset('public_theme/js/wow.js')}}"></script>
<script src="{{asset('public_theme/js/custom-script.js')}}"></script>

<!--Google Map-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHJe2MPH8B-gLzZu5QI0Alc73nvkLuuqQ"></script>
<script src="{{asset('public_theme/js/map-script.js')}}"></script>

</body>
</html>
@endsection

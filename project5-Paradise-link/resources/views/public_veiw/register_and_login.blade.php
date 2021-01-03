@extends('public_layouts.public_main')

@section('content')

    <!-- Banner Section -->
    <section class="page-banner">
        <div class="image-layer" style="background-image:url({{asset('public_theme/images/background/banner-image-4.jpg')}});"></div>
        <div class="banner-bottom-pattern"></div>

        <div class="banner-inner">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <h1>Create Account</h1>
                    <div class="page-nav">
                        <ul class="bread-crumb clearfix">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Register</li>
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
                <div class="form-col col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="form-box default-form contact-form-two wow fadeInRight" data-wow-delay="0ms"
                             data-wow-duration="1500ms">
                            <h4>Login </h4>
                            <form method="post" action="/paradise/login" id="contact-form">
                                @csrf
                                @if(session('notuser'))
                                <div class="text-danger alert">"Your Not User! Please Register Now >>"</div>
                                {{session()->forget('notuser')}}
                                @endif
                                <div class="form-group">
                                    <div class="field-inner">
                                        <input type="email" name="email" value="" placeholder="Email" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="field-inner">
                                        <input type="password" name="password" value="" placeholder="password"
                                               required="">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <button type="submit" class="theme-btn btn-style-one"><span
                                            class="btn-title">Login</span></button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="form-col col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="form-box default-form contact-form-two wow fadeInRight" data-wow-delay="0ms"
                             data-wow-duration="1500ms">
                            <h4>Don't Have an Account? <br>Please Register Here </h4>
                            <form method="post" action="/paradise/register" >
                                @csrf
                                <div class="form-group">
                                    <div class="field-inner">
                                        <input type="text" name="name" value="" placeholder="Full name"
                                               required="">
                                        @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="field-inner">
                                        <input type="email" name="email" value="" placeholder="Email" required="">
                                    </div>
                                    @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="field-inner">
                                        <input type="password" name="password" value="" placeholder="password"
                                               required="">
                                        @error('password')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="field-inner">
                                        <input type="password" name="password_confirmation" value=""
                                               placeholder="confirm password" required="">
                                        @error('password_confirmation')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="field-inner">
                                        <input type="text" name="mobile" value="" placeholder="Phone" required="">
                                        @error('mobile')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="theme-btn btn-style-one"><span class="btn-title">Create
                                                Account</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>






<!--End pagewrapper--><!--Scroll to top--><div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-up-arrow"></span></div>

@endsection

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

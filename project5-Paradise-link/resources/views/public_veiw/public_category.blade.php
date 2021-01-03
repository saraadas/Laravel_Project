@extends('public_layouts.public_main')



{{--Page Title--}}
@section('title')

@endsection

@section('content')

    <!-- Banner Section -->
    <section class="page-banner">
        <div class="image-layer" style="background-image:url({{asset('public_theme/images/background/cat.jpg')}});"></div>
        <div class="banner-bottom-pattern"></div>

        <div class="banner-inner">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <h1>Our {{$category->name}}</h1>
                    <div class="page-nav">
                        <ul class="bread-crumb clearfix">
                            <li><a href="{{route('index')}}">Home</a></li>
                            <li class="active">Our {{$category->name}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!--Team Section-->
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

                @foreach ($places as $place)
                    <div class="team-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="/paradise/grid-rooms/{{$place->id}}"><img src="{{asset
                                ("uploads/images/$place->image")}}" style="width: 25rem; height: 20rem;" alt="" title=""></a></figure>

                            </div>

                            <div class="info-box">
                                <div class="info-inner">
                                    <h4>{{$place->name}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>

@endsection

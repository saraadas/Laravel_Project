@extends('public_layouts.public_main')

@section('title')

@endsection


@section('content')

    <!-- Banner Section -->
    <section class="page-banner" style="background-color: white;">




    <section class="rooms-section">
        <div class="auto-container">
            <!--Filters Section-->
            <div class="row clearfix">

                @foreach($places as $place)
                    <div class="room-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="{{asset("uploads/images/$place->image")}}" style="height: 20rem; width: 30rem;" alt="" title=""></figure>
                            </div>
                            <div class="lower-box">
                                <h4 style="color: black;">{{$place->name}}</h4>
                                <div class="pricing clearfix">
                                    <div class="price">Location: <span>{{$place->location}}</span></div>
                                </div>
                                @if($place->category_id == '3')
                                <div class="link-box"><a href="/paradise/all-farm/{{$place->id}}" class="theme-btn btn-style-three"><span
                                            class="btn-title">More Details</span></a></div>
                                    @elseif($place->category_id == '1')
                                <div class="link-box"><a href="/paradise/grid-rooms/{{$place->id}}" class="theme-btn btn-style-three"><span
                                            class="btn-title">More Details</span></a></div>


                                @elseif($place->category_id == '2')
                                    <div class="link-box"><a href="/paradise/grid-rooms/{{$place->id}}" class="theme-btn btn-style-three"><span
                                                class="btn-title">More Details</span></a></div>

                                @endif

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection

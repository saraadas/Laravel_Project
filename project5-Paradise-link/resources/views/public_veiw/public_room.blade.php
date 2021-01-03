@extends('public_layouts.public_main')


{{--Page Title--}}
@section('title')

@endsection

@section('content')

    <!-- Banner Section -->
    <section class="page-banner">
        <div class="image-layer" style="background-image:url({{asset('public_theme/images/background/room.png')}});"></div>
        <div class="banner-bottom-pattern"></div>

        <div class="banner-inner">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <h1>{{$place->name}} Rooms</h1>
                    <div class="page-nav">
                        <ul class="bread-crumb clearfix">
                            <li><a href="{{route('index')}}">Home</a></li>
                            <li class="active">{{$place->name}} Rooms</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!--Rooms Section-->
    <section class="rooms-section">
        <div class="auto-container">
            <!--Filters Section-->
            <div class="filters-section filters-container">
                <div class="form-box default-form filter-form wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <form method="post" action="room-single.html">
                        <div class="row clearfix">
                            <div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="field-label">Stay</div>
                                <div class="field-inner">
                                    <input id="arrival-date" class="date-picker" type="text" name="field-name" value="Nov 02. 2019" placeholder="">
                                    <label for="arrival-date" class="icon flaticon-down-arrow"></label>
                                </div>
                            </div>
                            <div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="field-label">Room type</div>
                                <div class="field-inner">
                                    <select class="custom-select-box">
                                        <option>Balcony Room</option>
                                        <option>Deluxe Room</option>
                                        <option>Superior Room</option>
                                        <option>Luxury Room</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="field-label">Guests</div>
                                <div class="field-inner">
                                    <div class="check-sel-box">
                                        <div class="check-sel-btn">
                                            <span class="adult-info">2 Adults.</span>
                                            <span class="child-info">1 Children</span>
                                        </div>
                                        <ul class="check-sel-droplist">
                                            <li>
                                                <div class="sel-title">Select Adults:</div>
                                                <div class="clearfix">
                                                    <div class="radio-block adult-block"><input type="radio" name="adult-group" id="radio-1" value="1 Adults."><label for="radio-1">1</label></div>
                                                    <div class="radio-block adult-block"><input type="radio" name="adult-group" id="radio-2" value="2 Adults." checked=""><label for="radio-2">2</label></div>
                                                    <div class="radio-block adult-block"><input type="radio" name="adult-group" id="radio-3" value="3 Adults."><label for="radio-3">3</label></div>
                                                    <div class="radio-block adult-block"><input type="radio" name="adult-group" id="radio-4" value="4 Adults."><label for="radio-4">4</label></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sel-title">Select Children:</div>
                                                <div class="clearfix">
                                                    <div class="radio-block child-block"><input type="radio" name="child-group" id="radio-5" value="1 Children" checked=""><label for="radio-5">1</label></div>
                                                    <div class="radio-block child-block"><input type="radio" name="child-group" id="radio-6" value="2 Children"><label for="radio-6">2</label></div>
                                                    <div class="radio-block child-block"><input type="radio" name="child-group" id="radio-7" value="3 Children"><label for="radio-7">3</label></div>
                                                    <div class="radio-block child-block"><input type="radio" name="child-group" id="radio-8" value="4 Children"><label for="radio-8">4</label></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="field-label e-label">&nbsp;</div>
                                <div class="field-inner">
                                    <button class="theme-btn btn-style-one"><span class="btn-title">Start  Filter</span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row clearfix">

                @foreach($rooms as $room)

                <div class="room-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="/paradise/single-room/{{$room->id}}"><img src="{{asset("uploads/images/$room->image")}}" alt="" title=""></a></figure>
                        </div>
                        <div class="lower-box">
                            <h4>{{$room->room_name}}</h4>
                            <div class="pricing clearfix">
                                <div class="price">Price : <span> $ {{$room->price}}</span></div>
                            </div>

                            <div class="link-box"><a href="/paradise/single-room/{{$room->id}}" class="theme-btn btn-style-three"><span
                                        class="btn-title">More Details</span></a></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection

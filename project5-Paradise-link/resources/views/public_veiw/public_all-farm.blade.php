@extends('public_layouts.public_main')


{{--Page Title--}}
@section('title')
    All Farms
@endsection


@section('content')

    <!-- Banner Section -->
    <section class="page-banner">
        <div class="image-layer" style="background-image:url({{asset('public_theme/images/background/far.jpg')}});"></div>
        <div class="banner-bottom-pattern"></div>

        <div class="banner-inner">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <h1>Farms List</h1>
                    <div class="page-nav">
                        <ul class="bread-crumb clearfix">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Farms</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!--Rooms Section-->
    <section class="rooms-section rooms-list">
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
                                <div class="field-label">Farm Location</div>
                                <div class="field-inner">
                                    <select class="custom-select-box">
                                        <option>Amman,Jordan</option>
                                        <option>Irbid,Jordan</option>
                                        <option>Aqaba,Jordan</option>
                                        <option>Mafraq,Jordan</option>
                                        <option>Jarash,Jordan</option>
                                        <option>Ajloun,Jordan</option>
                                        <option>Al Balqa,Jordan</option>
                                        <option>Ma'an,Jordan</option>
                                        <option>Madaba,Jordan</option>
                                        <option>Al Tafilah,Jordan</option>
                                        <option>Al Karak,Jordan</option>
                                        <option>Zarqa,Jordan</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="field-label">Capacity</div>
                                <div class="field-inner">
                                    <div class="check-sel-box">
                                        <div class="check-sel-btn">
                                            <span class="adult-info">2-5 Persons</span>
                                        </div>
                                        <ul class="check-sel-droplist">
                                            <li>
                                                <div class="sel-title">Select Capacity:</div>
                                                <div class="clearfix">
                                                    <div class="radio-block adult-block"><input type="radio" name="adult-group" id="radio-1" value="2-5 Persons"><label for="radio-1">2-5 Persons</label></div>
                                                    <div class="radio-block adult-block"><input type="radio" name="adult-group" id="radio-2" value="5-10 Persons" checked=""><label for="radio-2">5-10 Persons</label></div>
                                                    <div class="radio-block adult-block"><input type="radio" name="adult-group" id="radio-3" value="10-15 Persons"><label for="radio-3">10-15 Persons</label></div>
                                                    <div class="radio-block adult-block"><input type="radio" name="adult-group" id="radio-4" value="15-20 Persons"><label for="radio-4">15-20 Persons</label></div>
                                                    <div class="radio-block adult-block"><input type="radio" name="adult-group" id="radio-5" value="20-25 Persons"><label for="radio-5">20-25 Persons</label></div>


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
            <div class="rooms-box">

                <!--Room-->
                @foreach ($places as $place )
                    <div class="room-block-four wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                      <div class="inner-box">
                       <div class="image-box">
                             <figure class="image"><img src="{{asset("uploads/images/$place->image")}}" alt="" title=""></figure>
                            <div class="image-layer" style="background-image: url({{asset("uploads/images/$place->image")}});"></div>
                <a class="overlink" href="/paradise/all-farm/{{$place->id}}"></a>
                     </div>

                    <div class="content-box">
                      <h4>{{$place->name}}</h4>
                      <div class="text">{{$place->desc}}</div>
                      <div class="text">Location : {{$place->location}} </div>
                      <div class="text">Capacity : {{$place->capacity}}</div>
{{--                      <div class="link-row clearfix">--}}
{{--                 <div class="pricing clearfix">--}}
{{--                    <div class="price">From <span>${{$place->price}}</span></div>--}}
{{--                 </div>--}}
                    <div class="link-box"><a href="/paradise/all-farm/{{$place->id}}" class="theme-btn
                 btn-style-one"><span class="btn-title">More Details</span></a></div>
            </div>
        </div>
    </div>
</div>


  @endforeach
            </div>
        </div>
    </section>

@endsection

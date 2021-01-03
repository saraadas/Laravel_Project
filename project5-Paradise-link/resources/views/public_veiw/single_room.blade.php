@extends('public_layouts.public_main')


@section('title')

@endsection


@section('content')



    <div class="sidebar-page-container blog-single">
        <div class="circles-two">
            <div class="c-1"></div>
            <div class="c-2"></div>
        </div>

        <span class="dotted-pattern dotted-pattern-5"></span>
        <span class="tri-pattern tri-pattern-8"></span>

        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-content">
                        <div class="post-details">
                            <div class="inner-box">

                                <div class="image-box">
                                    <figure class="image"><img src="{{asset("uploads/images/$room->image")}}" alt="" title=""></figure>
                                </div>
                                <div class="lower-box">

                                    <h3>{{$room->room_name}} </h3>
                                    <div class="text">
                                        <p><h4>Description:</h4>{{$room->desc}}</p>
                                        <ul>
                                            <li>Style: {{$room->style}}</li>
                                            <li>Capacity: {{$room->capacity}}</li>
                                            <li>Price: ${{$room->price}}</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!--Comments Area-->

                        <div class="link-box">

                            <a href="/paradise/bookingroom/{{$room->id}}" class="theme-btn btn-style-one"><span
                                    class="btn-title">Book Your Stay</span></a>
                        </div>





                        <!--Leave Comment Form-->
                        <div class="sidebar-side col-lg-12 col-md-12 col-sm-12">
                            <aside class="sidebar blog-sidebar">


                            </div>

                    </div>
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar blog-sidebar">
                        <!--Sidebar Widget-->



                        <div class="sidebar-widget gallery wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="widget-inner">
                                <div class="sidebar-title">
                                    <h4>Popular Gallery</h4>
                                </div>
                                <div class="images clearfix">
                                    @foreach($images as $image)
                                    <div class="image">

                                        <a href="{{asset("uploads/images/$image->img")}}" class="lightbox-image" data-fancybox="gallery">

                                                <img style="width:9rem;height: 6rem;" src="{{asset("uploads/images/$image->img")}}" alt="" title=""></a>

                                    </div>
                                    @endforeach
                                    </div>
                                </div>
                            </div>


                        <div class="sidebar-widget popular-tags wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="widget-inner">
                                <div class="sidebar-title">
                                    <h4>Tags</h4>
                                </div>
                                <ul class="tags-list clearfix">
                                    <li><a href="#">Vacation</a></li>
                                    <li><a href="#">Luxury</a></li>
                                    <li><a href="#">Sea</a></li>
                                    <li><a href="#">Suite</a></li>
                                    <li><a href="#">Superior</a></li>
                                    <li><a href="#">Travel</a></li>
                                    <li><a href="#">Deluxe</a></li>
                                    <li><a href="#">Villa</a></li>
                                </ul>
                            </div>
                        </div>


                    </aside>
                </div>

            </div>
        </div>
    </div>
@endsection

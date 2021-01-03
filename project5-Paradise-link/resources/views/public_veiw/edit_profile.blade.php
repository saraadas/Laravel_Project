@extends('public_layouts.public_main')

@section('title')
Edit User Profile
@endsection


@section('content')



    <!-- Banner Section -->
    <section class="page-banner">
        <div class="image-layer" style=""></div>
        <div class="banner-bottom-pattern"></div>

        <div class="banner-inner">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <h1>Edit Your Profile</h1>
                    <div class="page-nav">
                        <ul class="bread-crumb clearfix">
                            <li><a href="/paradise/profile/{id}">Profile</a></li>
                            <li class="active">Edit Profile </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!--Event Single Section-->
    <section class="event-single">
        <span class="dotted-pattern dotted-pattern-3"></span>
        <span class="tri-pattern tri-pattern-3"></span>
        <div class="auto-container">

            <div class="container rounded bg-white mt-5 mb-5">
                <div class="row">

                    <div class="container rounded bg-white mt-5 mb-5">
                        <div class="row">

                            <div class="col-md-12 ">
                                <div class="p-3 py-5">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h4 class="text-right">Edit Your Profile</h4>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-8"><label class="labels">Name</label><input type="text"
                                                                                                       class="form-control"  value="{{$user->name}}"></div>
                                        <div class="col-md-8"><label class="labels">Email</label><input type="text"
                                                                                                        class="form-control"  value="{{$user->email}}"></div>
                                        <div class="col-md-8"><label class="labels">Mobile</label><input type="text"
                                                                                                         class="form-control"  value="00{{$user->mobile}}"></div>
                                        <div class="col-md-8"><label class="labels">Old Password</label><input type="password" class="form-control"  value=""></div>
                                        <div class="col-md-8"><label class="labels">New Password</label><input type="password" class="form-control"  value=""></div>



                                    </div>

                                    <div class="mt-5 text-left"><button class="btn btn-dark profile-button" type="button">Update Profile</button></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
        </div>
        </div>
@endsection

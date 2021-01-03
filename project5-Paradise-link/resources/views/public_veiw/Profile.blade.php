@extends('public_layouts.public_main')

@section('title')
User Profile
@endsection


@section('content')

    <!-- Banner Section -->
    <section class="page-banner">
        <div class="image-layer" style=""></div>
        <div class="banner-bottom-pattern"></div>

        <div class="banner-inner">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <h1>Your Profile</h1>
                    <div class="page-nav">
                        <ul class="bread-crumb clearfix">
                            <li><a href="/index">Home</a></li>
                            <li class="active">Profile</li>
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

                    <div class="col-md-6">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Profile Settings</h4>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-8"><label class="labels">Name : {{$user->name}} </label></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-8"><label class="labels">Email : {{$user->email}}</label>   </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-8"><label class="labels">Mobile :  00{{$user->mobile}}</label>
                                </div>

                            </div>

                               <div class="mt-5 text-left">
                                   <a href="/paradise/editprofile/{{$user->id}}">
                                   <button class="btn btn-dark profile-button" type="button">Edit Profile</button>
                                   </a>
                               </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 py-5">
                            <h4 class="text-left">Booking History</h4>
                            <br>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Date From:</th>
                                    <th scope="col">Date To:</th>
                                    <th scope="col">Place Name:</th>
                                    <th scope="col">Price:</th>
                                    <th scope="col">Delete:</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($bookings as $booking)
                                <tr>
                                    <td>{{$booking->date_from}}</td>
                                    <td>{{$booking->date_to}}</td>
                                    <td>{{$room->room_name}}</td>
                                    <td>{{$booking->additional_info}}</td>
                                    <td> <a href="/paradise/booking/{{$booking->id}}"><i class="far fa-trash-alt
                                    text-danger"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    @endforeach
                                </tr>
                                <tr>

                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

@endsection

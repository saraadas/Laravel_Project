<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Room;
use Carbon\Carbon;
use App\User;
use Illuminate\Http\Request;


class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = $request->session()->get('user_id');
        $booking = new Booking();
        $booking->user_id = $request->session()->get('user_id');
        $booking->room_id = $request->session()->get('room_id');
        $booking->additional_info = $request->session()->get('room_price');
//        $booking->date_from = $request->input('arrival');
        $booking->date_from = Carbon::createFromFormat('m/d/Y', $request->input('arrival'))->format('Y-m-d');
//        $booking->date_to = $request->input('departure');
        $booking->date_to = Carbon::createFromFormat('m/d/Y', $request->input('departure'))->format('Y-m-d');
        $booking->save();
        $request->session()->put('success',"Your Book is Successes");
        return redirect("/paradise/profile/$user_id");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        $user_id = $booking->user_id;
        $user = User::where('id','=',$booking->user_id)->get()->first();
        Booking::findOrFail($booking->id)->delete();
        return redirect("/paradise/profile/$user->id");
    }

    public function check(Request $request,$id)
    {
        if(session('user')){
            $room = Room::where('id','=',$id)->get()->first();
            $room_id = $room->id;
            $room_price = $room->price;

//            $user_id = session('user_id');
//            $user_id = $request->session()->get('user_id');
            $request->session()->put('room_id',$room_id);
            $request->session()->put('room_price',$room_price);

            return view('public_veiw.booking_room');
        }else{
            $room = Room::where('id','=',$id)->get()->first();
            $room_id = $room->id;
            $room_price = $room->price;
//            $user_id = session('user_id');
//            $user_id = $request->session()->get('user_id');
            $request->session()->put('room_id',$room_id);
            $request->session()->put('room_price',$room_price);
            $request->session()->put('usernotlogin','Please Login to Complete Your book');
            return redirect('/paradise/login-register');
        }
    }


}

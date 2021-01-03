<?php

namespace App\Http\Controllers;

use App\Category;
use App\Image;
use App\place;
use App\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
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
        $room = Room::all();
//        $places = place::all();
        $category = Category::where('name','=','Farms')->first();
        if($category){
            $category_id = $category->id;
        }else{
            $category_id = "1";
        }

        $places = place::where('category_id', '!=',"$category_id")->get();

        return view('dashboard_veiw.manage_room',compact('room','places'));
    }

    public function validation($request)
    {
        $request->validate([
            'style' => 'required',
            'price' => 'required',
            'desc' => 'required',
            'room_name' => 'required',
            'capacity' => 'required',
            'image'=>'required',
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validation($request);

        if ($request->file('image')) {
            $file = $request->file('image') ;
            $ext = $file->getClientOriginalExtension() ;
            $filename = time() . '.' . $ext ;
            $file->move('uploads/images', $filename);
        }

        $place = place::findOrFail($request->input('select_place'));
        $room = new Room;
        $room->room_name = $request->input('room_name');
        $room->desc = $request->input('desc');
        $room->capacity = $request->input('capacity');
        $room->price = $request->input('price');
        $room->style = $request->input('style');
        $room->image = $filename;

        $place->rooms()->save($room);
        return redirect('/dashboard/manage_room');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        $places = place::all();
        return view('dashboard_veiw.manage_room_edit',compact('room','places'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {

        $request->validate([
            'style' => 'required',
            'price' => 'required',
            'desc' => 'required',
            'room_name' => 'required',
            'capacity' => 'required',
        ]);

        if ($request->file('image')) {
            $file = $request->file('image') ;
            $ext = $file->getClientOriginalExtension() ;
            $filename = time() . '.' . $ext ;
            $file->move('uploads/images', $filename);
        }else {
            $filename = $place->image;
        }

        $room = Room::find($room->id);
        $room->room_name = $request->room_name;
        $room->desc = $request->desc;
        $room->price = $request->price;
        $room->style = $request->style;
        $room->capacity = $request->capacity;
        $room->image = $filename;
        $room->save();
        return redirect('/dashboard/manage_room');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        Room::findOrFail($room->id)->delete();
        return redirect('/dashboard/manage_room');
    }

    public function gridview($id)
    {
//        $rooms = Room::all();
//        $rooms = Room::find($room->id);
        $rooms = Room::where('place_id','=',$id)->get();
        $place = place::where('id','=',$id)->get()->first();
        return view('public_veiw.public_room',compact('rooms','place'));
    }

    public function singleroom($id){
        $images = Image::where('room_id','=',$id)->get();
        $room = Room::where('id','=',$id)->get()->first();
        return view('public_veiw.single_room',compact('room','images'));
    }

}

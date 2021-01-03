<?php

namespace App\Http\Controllers;

use App\Category;
use App\Image;
use App\place;
use App\Room;
use Illuminate\Http\Request;

class ImageController extends Controller
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
        $rooms = Room::all();
//        $places = place::all();
        $category = Category::where('name','=','Farms')->first();
        if($category){
            $category_id = $category->id;
        }else{
            $category_id = "1";
        }
        $places = place::where('category_id', '=', $category_id )->get();

        $images = Image::all();

        return view('dashboard_veiw.manage_image',compact('rooms','places','images'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'mimes:jpeg,jpg,png,gif|max:10000|required',
        ]);

        if ($request->file('image')) {
            $file = $request->file('image') ;
            $ext = $file->getClientOriginalExtension() ;
            $filename = time() . '.' . $ext ;
            $file->move('uploads/images', $filename);
        }

              $place = place::find($request->input('select_place'));
              $room = Room::find($request->input('select_room'));
              $image = new Image;
              $image->img = $filename;
              $image->place_id = $request->input('select_place');
              $image->room_id = $request->input('select_room');
              $image->save();
        return redirect('/dashboard/manage_images');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        $rooms = Room::all();
//        $places = place::all();
        $category = Category::where('name','=','Farms')->first();
        if($category){
            $category_id = $category->id;
        }else{
            $category_id = "1";
        }

        $places = place::where('category_id', '=', $category_id )->get();

        return view('dashboard_veiw.manage_image_edit',compact('places','rooms','image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        $image = Image::find($image->id);

        if ($request->file('image')) {
            $file = $request->file('image') ;
            $ext = $file->getClientOriginalExtension() ;
            $filename = time() . '.' . $ext ;
            $file->move('uploads/images', $filename);
        }else {
            $filename = $image->img;
        }

        $image->img = $filename;
        $image->place_id = $request->input('select_place');
        $image->room_id = $request->input('select_room');
        $image->save();
        return redirect('/dashboard/manage_images');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        Image::findOrFail($image->id)->delete();
        return redirect('/dashboard/manage_images');
    }
}

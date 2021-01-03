<?php

namespace App\Http\Controllers;
use App\Category;
use App\Image;
use App\place;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        $categorys = Category::all();
        $places = place::all();

        return view('dashboard_veiw.manage_places',compact('categorys','places'));
    }

    public function validation($request)
    {
        $request->validate([
            'select_location' => 'required',
            'select_category' => 'required',
            'desc' => 'required',
            'name' => 'required',
//            'capacity' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif|max:10000|required',
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
//        place::create([
//            "cat_id"         =>  $request->select_category,
//            "name"           =>  $request->name,
//            "desc"           =>  $request->desc,
//            "location"       =>  $request->select_location,
//            "stars"          =>  $request->select_stars,
//            "num_rooms"      =>  $request->num_rooms,
//            "capacity"       =>  $request->capacity,
//            "image"          =>  $filename,
//        ]);
        $category = Category::findOrFail($request->input('select_category'));
        $place = new place;
        $place->name = $request->input('name');
        $place->desc = $request->input('desc');
        $place->location = $request->input('select_location');
        $place->stars = $request->input('select_stars');
        $place->num_rooms = $request->input('num_rooms');
        $place->capacity = $request->input('capacity');
        $place->price = $request->input('price');
        $place->image = $filename;

        $category->places()->save($place);
        return redirect('/dashboard/manage_places');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\place  $place
     * @return \Illuminate\Http\Response
     */
    public function show(place $place)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\place  $place
     * @return \Illuminate\Http\Response
     */
    public function edit(place $place)
    {
        $categorys = Category::all();
        return view('dashboard_veiw.manage_places_edit',compact('place','categorys'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\place  $place
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, place $place)
    {
        $request->validate([
            'select_location' => 'required',
            'select_category' => 'required',
            'desc' => 'required',
            'name' => 'required',
            'capacity' => 'required',

        ]);

        $place = place::find($place->id);

        if ($request->file('image')) {
            $file = $request->file('image') ;
            $ext = $file->getClientOriginalExtension() ;
            $filename = time() . '.' . $ext ;
            $file->move('uploads/images', $filename);
        }else {
            $filename = $place->image;
        }

        $place->name = $request->name;
        $place->desc = $request->desc;
        $place->location = $request->select_location;
        $place->stars = $request->select_stars;
        $place->num_rooms = $request->num_rooms;
        $place->capacity = $request->capacity;
        $place->price = $request->input('price');
        $place->image = $filename;
        $place->save();
        return redirect('/dashboard/manage_places');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\place  $place
     * @return \Illuminate\Http\Response
     */
    public function destroy(place $place)
    {
        place::findOrFail($place->id)->delete();
        return redirect('/dashboard/manage_places');
    }



    public function viewallfarm(){

        $category = Category::where('name','=','Farms')->first();
        if($category){
            $category_id = $category->id;
        }else{
            $category_id = "3";
        }
        $places = place::where('category_id','=',$category_id)->get();
        return view('public_veiw.public_all-farm',compact('places'));
    }

    public function viewfarm($id){
        $images = Image::where('place_id','=',$id)->get();
        $place = place::where('id','=',$id)->get()->first();
        return view('public_veiw.single_farm',compact('place','images'));
    }

    public function search(){
        $search=$_GET['query'];
        $places = place::where('name','LIKE','%'.$search.'%')->get();
        return view('public_veiw.search',compact('places'));
    }

}

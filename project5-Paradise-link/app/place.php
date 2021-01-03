<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class place extends Model
{
    protected $fillable = ['name', 'desc', 'location', 'stars', 'num_rooms', 'capacity', 'image'];

    public function getcategoryname()
    {
        return Category::where('id', $this->category_id)->first()->name;
    }

    public function rooms()
    {

        return $this->hasMany('App\Room');
    }

    public function placeimages()
    {

        return $this->hasMany('App\Image');
    }

}

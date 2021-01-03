<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable=['room_name','place_id','style','desc','price','capacity'];


    public function getplacename(){

        return place::where('id',$this->place_id)->first()->name;
    }
    public function roomimages()
    {

        return $this->hasMany('App\Image');
    }
}

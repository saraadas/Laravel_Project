<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function places()
    {
        return $this->belongsTo(place::class);
    }

    public function rooms()
    {
        return $this->belongsTo(Room::class);
    }

    public function getplaceyname()
    {
        if($this->place_id == null){
            return "---";
        }else{
        return place::where('id', $this->place_id)->first()->name;}
    }

    public function getroomname()
    {
        if($this->room_id == null){
            return "---";
        }else{
        return Room::where('id', $this->room_id)->first()->room_name;}
    }

}

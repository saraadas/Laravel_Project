<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable =['name','image'];

    public function places(){

        return $this->hasMany('App\place');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable=[
        'title',
        'location',
        'description',
       
        
  
      ];
      public function images(){
        return $this->hasMany('App\Image');
      }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable=[
        'commentable_type',
        'commentable_id',
        'comment',
        'commentor_body',
        'commentor_email'
       
        
  
      ];
}

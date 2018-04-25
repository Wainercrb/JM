<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table = "post";
    public $timestamps = false;
    //join with media_post
    public function Meadia()
    {
      return $this->hasOne('App\Models\MediaPost');
    }
}

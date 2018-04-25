<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mediaPost extends Model
{
    protected $table = "mediapost";
    public $timestamps = false;
    //join with body post
    public function Post()
    {
       return $this->belongsTo('App\Models\Post', 'id_post');
    }
}

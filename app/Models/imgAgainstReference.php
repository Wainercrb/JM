<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class imgAgainstReference extends Model
{
    protected $table = "imgagainstreference";
    public $timestamps = false;

    public function AgainstReference()
    {
       return $this->belongsTo('App\Models\ImgAgainstReference', 'id_againstReference');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class againsReference extends  Model
{
   protected $table = "againstreference";
   public $timestamps = false;

   public function Measurements()
   {
     return $this->hasOne('App\Models\Measurements');
   }

   public function ImgAgainstReference()
   {
     return $this->hasOne('App\Models\ImgAgainstReference');
   }
}

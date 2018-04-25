<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class measurements extends  Model
{
   protected $table = "measurements";
   public $timestamps = false;

   public function AgainstReference()
   {
      return $this->belongsTo('App\Models\Measurements', 'id_againstReference');
   }
}

<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class teeths extends Model
{
    protected $table = "teeths";
    public $timestamps = false;
    public function References()
    {
      return $this->belongsToMany('App\Models\Reference', 'ReferenceTeeths',
                                  'id_teeth', 'id_reference');
    }
}

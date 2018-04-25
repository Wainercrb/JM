<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class reference extends Model
{
    protected $table = "reference";
    public $timestamps = false;
    public function teeths()
    {
      return $this->belongsToMany('App\Models\Teeths', 'ReferenceTeeths',
                                  'id_reference', 'id_teeth');
    }
    public function dentalStates()
    {
      return $this->belongsToMany('App\Models\Dentalstate', 'ReferenceDentalState',
                                  'id_reference', 'id_dentalState');
    }
}

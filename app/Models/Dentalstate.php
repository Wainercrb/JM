<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dentalstate extends Model
{
    protected $table = "dentalstate";
    public $timestamps = false;

    public function dentalStates()
    {
      return $this->belongsToMany('App\Models\Dentalstate', 'ReferenceDentalState',
                                  'id_dentalState', 'id_reference');
    }
}

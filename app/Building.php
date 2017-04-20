<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
  //
  protected $fillable = [
      'id',
      'nama',
      'harga_pagi',
      'harga_sore',
      'fasilitas',
      'keterangan',
      'foto',

  ];

  public function transaction(){
    return $this->hasMany('App\Transaction','building_id','id');
  }
}

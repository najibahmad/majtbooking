<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $fillable = [
        'id',
        'sapaan',
        'nama',
        'tlp',
        'hp',
        'alamat',

    ];

    public function transaction(){
      return $this->hasMany('App\Transaction','customer_id','id');
    }
}

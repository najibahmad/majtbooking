<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $fillable = [
        'id',
        'tgl_booking',
        'tgl_sewa',
        'waktu',
        'status',
        'harga',
        'dp',
        'customer_id',
        'building_id',
    ];

    protected $dates = ['tgl_booking','tgl_sewa'];

    public function customer(){
      return $this->belongsTo('App\Customer','customer_id');
    }
    public function building(){
      return $this->belongsTo('App\Building','building_id');
    }


}

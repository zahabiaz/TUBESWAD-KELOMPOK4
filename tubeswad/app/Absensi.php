<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    protected $table ='absensi';
    protected $dates = ['created_at'];
    protected $guarded;

     public function user(){
        return $this->belongsTo(User::class);
    }
}

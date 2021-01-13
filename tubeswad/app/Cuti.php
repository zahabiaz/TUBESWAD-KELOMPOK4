<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
    protected $table ='cuti';
    protected $dates = ['created_at'];
    protected $guarded;

     public function user(){
        return $this->belongsTo(User::class);
    }
}

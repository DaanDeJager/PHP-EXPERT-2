<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Fietsen extends Model
{
    protected $table = 'fietsens';
    public $primaryKey = 'id';
    public $timestamps = false;
    use HasFactory;

    public function user(){
        return $this->belongsTo('App\Models\User');
        return $this->belongsTo('App\Models\User','user_id','id');
    }
    public function reparaties(){
        return $this->hasMany('App\Models\Reparatie');


    }
}

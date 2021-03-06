<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Reparatie extends Model
{
    use HasFactory;
    protected $table = 'reparaties';
    public $primaryKey = 'id';

    public function user(){
        return $this->belongsTo('App\Models\User');
        return $this->belongsTo('App\Models\User','user_id','id');

    }
    public function fietsen(){
        return $this->belongsTo('App\Models\Fietsen');
        return $this->belongsTo('App\Models\Fietsen','fiets_id','id');

    }
}


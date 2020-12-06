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
    }
}


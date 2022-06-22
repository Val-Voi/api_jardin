<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nino extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'niños';
    public $timestamps = false;

    public function nivel(){
        return $this->belongsTo(Nivel::class);
    }
}

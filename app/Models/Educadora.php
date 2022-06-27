<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Educadora extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'educadoras';
    public $timestamps = false;

    public function niveles(){
        return $this->belongsToMany(Nivel::class);
    }
}

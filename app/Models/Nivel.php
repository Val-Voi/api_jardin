<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    use HasFactory;

    protected $table = 'niveles';
    public $timestamps = false;

    public function educadoras(){
        return $this->belongsToMany(Educadora::class);
    }
}

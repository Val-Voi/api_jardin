<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $table = 'eventos';
    public $timestamps = false;

    public function nino(){
        return $this->belongsTo(Nino::class);
    }
}

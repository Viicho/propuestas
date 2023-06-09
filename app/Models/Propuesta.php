<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Propuesta extends Model
{
    use HasFactory;
    protected $table = 'propuestas';



    public function estudiante():BelongsTo{
        return $this->belongsTo(Estudiante::class);
    }

    public function profesores(){
        return $this->belongsToMany(Profesor::class);
    }
}

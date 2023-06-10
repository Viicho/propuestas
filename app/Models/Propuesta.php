<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Propuesta extends Model
{
    use HasFactory;
    protected $table = 'propuestas';



    public function estudiante():BelongsTo{
        return $this->belongsTo(Estudiante::class);
    }

    public function profesores():BelongsToMany{
        return $this->belongsToMany(Profesor::class);
    }

    public function comentariosConPivot():BelongsToMany{
        return $this->belongsToMany(Profesor::class)->withPivot(['comentario']);
    }


    
}

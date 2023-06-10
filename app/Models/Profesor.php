<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Profesor extends Model
{
    use HasFactory;
    protected $table = 'profesores';

    public function propuestas():BelongsToMany{
        return $this->belongsToMany(Propuesta::class);
    }
    
}

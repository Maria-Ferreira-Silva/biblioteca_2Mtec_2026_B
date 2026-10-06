<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $table = 'autores';

    protected $primaryKey = 'AUTCODIGO';

    public function timestamps() { return false; } 

    protected $fillable = [
        'AUTNOME',
        'AUTPSEUDONIMO',
        'AUTBIOGRAFIA',
        'AUTPAISNASC',
    ];
}

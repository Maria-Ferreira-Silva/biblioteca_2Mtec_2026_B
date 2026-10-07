<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Modelo representativo da tabela de autores do banco de dados.
 */
class Autor extends Model
{
    protected $table = 'autores';

    protected $primaryKey = 'AUTCODIGO';

    public $timestamps = false;

    protected $fillable = [
        'AUTNOME',
        'AUTPSEUDONIMO',
        'AUTBIOGRAFIA',
        'AUTPAISNASC',
    ];
}

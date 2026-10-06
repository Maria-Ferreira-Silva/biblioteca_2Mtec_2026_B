<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Modelo representativo da tabela de gêneros literários do banco de dados.
 */
class Genero extends Model
{
    protected $table = 'GENEROS';

    protected $primaryKey = 'GNRCODIGO';

    public $timestamps = false;

    protected $fillable = [
        'GNRNOME',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Genero extends Model
{
    protected $table = 'GENEROS';

    protected $primaryKey = 'GNRCODIGO';

    public function $timestamps = false;

    protected $fillable = [
        'GNRNOME',
    ];
}

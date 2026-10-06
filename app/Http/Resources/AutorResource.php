<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AutorResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->AUTCODIGO,
            'nome' => $this->AUTNOME,
            'pseudonimo' => $this->AUTPSEUDONIMO,
            'biografia' => $this->AUTBIOGRAFIA,
            'pais_origem' => $this->AUTPAISNASC,
        ];
    }
}

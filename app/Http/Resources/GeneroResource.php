<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GeneroResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'nome' => $this->GNRNOME,
            'codigo' => $this->GNRCODIGO,
        ];
    }
}

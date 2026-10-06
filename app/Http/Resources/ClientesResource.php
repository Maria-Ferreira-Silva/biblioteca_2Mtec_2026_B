<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ClientesResource extends JsonResource
{
    public function toArray(Request $request): array
    {

        return [
            'nome' => $this->CLINOME,
            'email' => $this->CLIEMAIL,
            'telefone' => $this->CLITELEFONE,
            'data_nascimento' => $this->CLIDTNASC ? $this->CLIDTNASC->format('Y-m-d') : null,
        ];

    }
}

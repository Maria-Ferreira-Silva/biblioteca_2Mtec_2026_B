<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Resource responsável por formatar os dados de saída de um cliente.
 */
class ClientesResource extends JsonResource
{
    /**
     * Transforma o recurso em um array para o JSON de saída.
     */
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

<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Resource responsável por formatar os dados de saída de um usuário do sistema.
 */
class UsersResource extends JsonResource
{
    /**
     * Transforma o recurso em um array para o JSON de saída.
     */
    public function toArray(Request $request): array
    {

        return [
            'id' => $this->id,
            'nome' => $this->name,
            'email' => $this->email,

        ];

    }
}

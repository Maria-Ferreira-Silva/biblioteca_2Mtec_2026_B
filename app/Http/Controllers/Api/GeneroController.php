<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Controller responsável por gerenciar as requisições de gêneros literários na API.
 */
class GeneroController extends Controller
{
    /**
     * Lista todos os gêneros cadastrados com paginação.
     */
    public function index()
    {
        //
    }

    /**
     * Cadastra um novo gênero literário.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Exibe os detalhes de um gênero específico.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Atualiza os dados de um gênero existente.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove um gênero literário do sistema.
     */
    public function destroy(string $id)
    {
        //
    }
}

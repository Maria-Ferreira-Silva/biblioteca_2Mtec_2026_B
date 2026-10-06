<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Controller responsável por gerenciar as requisições de clientes na API.
 */
class ClienteController extends Controller
{
    /**
     * Lista todos os clientes cadastrados com paginação.
     */
    public function index()
    {
        //
    }

    /**
     * Cadastra um novo cliente no sistema.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Exibe os detalhes de um cliente específico.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Atualiza os dados de um cliente existente.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove um cliente do sistema.
     */
    public function destroy(string $id)
    {
        //
    }
}

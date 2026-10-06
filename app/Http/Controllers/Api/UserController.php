<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Controller responsável por gerenciar os dados dos usuários na API.
 */
class UserController extends Controller
{
    /**
     * Lista todos os usuários cadastrados com paginação.
     */
    public function index()
    {
        //
    }

    /**
     * Cadastra um novo usuário no sistema.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Exibe os detalhes de um usuário específico.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Atualiza os dados de um usuário existente.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove um usuário do sistema.
     */
    public function destroy(string $id)
    {
        //
    }
}

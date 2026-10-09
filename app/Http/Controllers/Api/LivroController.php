<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function index()
    {
        
        return response()->json(Livro::with('autor')->get(), 200);
    }

    public function show($id)
    {
        $livro = Livro::with('autor')->find($id);

        if (!$livro) {
            return response()->json(['message' => 'Livro não encontrado'], 404);
        }

        return response()->json($livro, 200);
    }
}
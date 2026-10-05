<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Autor;                 
use App\Http\Resources\AutorResource; 

class AutorController extends Controller
{
public function index()
    {
        
        return AutorResource::collection(Autor::paginate(10));
    }

public function show($id)
    {
        $autor = Autor::findOrFail($id);
        return new AutorResource($autor);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpresasController extends Controller
{
    public function CadastroEmpresas()
    {
       return view('cadastros.cadastroEmpresas');
    }
}

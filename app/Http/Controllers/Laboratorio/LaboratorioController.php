<?php

namespace App\Http\Controllers\Laboratorio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LaboratorioController extends Controller
{
    /*
     * Métodos para os técnicos
     */
    public function coletarSangue()
    {
        return view('laboratorio.coletar-sangue');
    }

    public function estoqueSangue()
    {
        return view('laboratorio.estoque-sangue');
    }

    public function analiseSangue()
    {
        return view('laboratorio.analise-sangue');
    }

    public function agenda()
    {
        return view('laboratorio.agenda');
    }

    public function relatorios()
    {
        return view('laboratorio.relatorios');
    }

    public function comunicacao()
    {
        return view('laboratorio.comunicacao');
    }
}

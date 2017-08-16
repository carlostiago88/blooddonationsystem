<?php

namespace App\Http\Controllers\Laboratorio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Laboratorio;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\SangueManager;

class LaboratorioController extends Controller
{
    protected $model_user;

    public function construct()
    {
        $this->middleware(Auth);
    }

    public function listarAgendados()
    {
        $laboratorio_id = Auth::user()->laboratorio_id;
        $agenda_info = new SangueManager();
        return view('laboratorio.listar-agendados')->with([
            'agenda_info' => $agenda_info->agendaLaboratorio($laboratorio_id),
        ]);
    }

    /*
     * Métodos para os técnicos
     */
    public function coletarSangue(Request $request)
    {
        $doador_id = $request->input('doador_id');
        $laboratorio_id = Auth::user()->laboratorio_id;
        $agenda_info = new SangueManager();
        $impedimentos = DB::table('impedimentos')->where('status', '1')->orderBy('nome', 'asc')->get();
        $avisos = DB::table('avisos')->where('status', '1')->orderBy('nome', 'asc')->get();

        return view('laboratorio.coletar-sangue')->with([
            'doador_info' => $agenda_info->agendaLaboratorioCompleto($laboratorio_id,$doador_id),
            'impedimentos' => $impedimentos,
            'avisos' => $avisos
        ]);
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

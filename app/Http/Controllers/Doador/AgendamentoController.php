<?php

namespace App\Http\Controllers\Doador;

use App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use DB;

class AgendamentoController extends Controller
{
    use \App\Http\Controllers\WebControllerTrait;

    protected $model;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('doador.agendar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, \App\Doador $model)
    {
        $this->model = $model;
        $id = $request->user()->id;
        $result = $this->show($id);

        $disabled = '';

        if ($result != null) {
            Session::flash('alert-class', 'alert-warning');
            Session::flash('message', 'Seu cadastro pode estar desatualizado');
        } else {
            Session::flash('alert-class', 'alert alert-dismissible alert-danger');
            Session::flash('message', 'Voce precisa completar o seu cadastro pessoal para poder agendar.');
            $disabled = 'disabled';
        }

        $laboratorios = DB::table('laboratorios')->orderBy('nome', 'asc')->get();

        return view('doador.agendar', [
            'disabled' => $disabled,
            'pessoa_id' => $id,
            'laboratorios' => $laboratorios,
        ]);
        //return back()->with('success','Item created successfully!');
    }

    public function store(Request $request){

    }
}

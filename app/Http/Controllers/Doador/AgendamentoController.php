<?php

namespace App\Http\Controllers\Doador;

use App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use DB;
use Carbon\Carbon;

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
        $id = Auth::user()->id;

        $result = $this->model->where('user_id', $id)->first();
        $momento = date("d/m/Y", strtotime($result->updated_at));
        $disabled = '';

        if ($result != null) {
            Session::flash('alert-class', 'alert-info');
            Session::flash('message', 'Seu cadastro foi atualizado em '.$momento);
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

    public function store(Request $request)
    {

    }
}

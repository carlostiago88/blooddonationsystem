<?php

namespace App\Http\Controllers\Laboratorio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Laboratorio;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\SangueManager;
use Symfony\Component\HttpFoundation\Session\Session;

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
        $impedimentos_def = DB::table('impedimentos')->where([
            'status' => '1',
            'tipo_impedimento' => 'definitivo'
        ])->orderBy('nome', 'asc')->get();
        $impedimentos_temp = DB::table('impedimentos')->where([
            'status' => '1',
            'tipo_impedimento' => 'temporario'
        ])->orderBy('nome', 'asc')->get();
        $avisos = DB::table('avisos')->where('status', '1')->orderBy('nome', 'asc')->get();

        return view('laboratorio.coletar-sangue')->with([
            'doador_info' => $agenda_info->agendaLaboratorioCompleto($laboratorio_id, $doador_id),
            'impedimentos_def' => $impedimentos_def,
            'impedimentos_temp' => $impedimentos_temp,
            'avisos' => $avisos
        ]);
    }

    public function receberFormulario(Request $request)
    {
        //$id = $request->user()->id;
        //dd($request->all());
        $key = array_search('1', $request->all());
        $doador_id = $request->input('doador_id');

        $blackList = array();
        for ($i = 1; $i < $request->input('maxCount'); $i++) {

            if (array_key_exists("tp-" . $i, $request->all())) {
                DB::table('doador_impedimento')->insert([
                    [
                        'user_id' => $request->input('doador_id'),
                        'impedimento_id' => $i,
                        'status' => $request->input('tp-' . $i),
                        'created_at' => \Carbon\Carbon::now(),
                        'updated_at' => \Carbon\Carbon::now()
                    ],
                ]);
                if ($request->input('tp-' . $i) == 0) {
                    $blackList = $i;
                }
            }
        }
        if ($blackList == null) {

            DB::table('agendamentos')
                ->where([
                    'user_id' => $request->input('doador_id'),
                    'status' => 1
                ])
                ->update(['situacao' => 'doacao em andamento']);


            DB::table('bolsas')->where([
                'doador_id' => $request->input('doador_id'),
                'laboratorio_id' => Auth::user()->laboratorio_id,
            ])->update(['status' => 0]);

            $bolsa_chave = sha1(time());
            DB::table('bolsas')
                ->insert([
                    'doador_id' => $request->input('doador_id'),
                    'laboratorio_id' => Auth::user()->laboratorio_id,
                    'tecnico_id' => Auth::user()->id,
                    'bolsa_origem_id' => 0,
                    'agendamento_id' => 1,
                    'bolsa_chave' => $bolsa_chave,
                    'status' => 1,
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now()
                ]);

            $request->session()->put('doador_info', [
                'doador_id' => $request->input('doador_id'),
                'laboratorio_id' => Auth::user()->laboratorio_id,
                'tecnico_id' => Auth::user()->id,
                'bolsa_origem_id' => 0,
                'bolsa_chave' => $bolsa_chave,
                'status' => 1,
            ]);

            return redirect()->route('laboratorio.gerar-idbolsa')->with([
                'success' => 'Você já pode coletar. Atente-se para o ID da bolsa que foi gerado.',
                'bolsa_chave' => $bolsa_chave,
            ]);
        } else {
            Session::flash('alert-class', 'alert alert-dismissible alert-danger');
            Session::flash('message', 'O doador não esta apto para doação.');
            $disabled = 'disabled';

            DB::table('agendamentos')
                ->where([
                    'user_id' => $request->input('doador_id'),
                    'status' => 1
                ])
                ->update(['situacao' => 'doacao não realizada']);
            return view('laboratorio.receber-formulario', [
                'disabled' => $disabled,
            ]);
        }

        //$result = $this->model->create($request->all());
    }

    public function gerarIdbolsa(Request $request)
    {
        //$doador_info = Session::get('doador_info');
        //dd($request->session()->get('doador_info'));
        $doador_info = $request->session()->get('doador_info');
        //var_dump($doador_info);
        $consulta = new SangueManager();
        return view('laboratorio.gerar-idbolsa', [
            'doador_info' => $consulta->detalheDoador($doador_info['doador_id']),
            'bolsa_info' => $consulta->detalharBolsa($doador_info['bolsa_chave']),
        ]);
    }

    public function finalizarColeta(Request $request)
    {

        $sangueManager = new SangueManager();
        $sangueManager->detalharBolsa($request->input('bolsa_chave'));
        DB::table('agendamentos')->where([
            'user_id' => $sangueManager['doador_id'],
            'laboratorio_id' => $sangueManager['lab_id'],
            'status' => 1
        ])->update(['situacao' => 'doacao realizada']);

        return redirect()->route('laboratorio.listar-agendados')->with([
            'success' => 'Coleta realizada com sucesso.',
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

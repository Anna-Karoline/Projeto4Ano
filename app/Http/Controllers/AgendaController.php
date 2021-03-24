<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Agendamento;
use App\Models\Procedimentos;
use Auth;
use Session;
use \Carbon\Carbon;
use App\Http\Requests\StoreUpdateProcedimentoRequest;
use Illuminate\Support\Facades\Gate;

class AgendaController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $dataAtual = Carbon::now("America/Sao_Paulo")->toDateTimeString();
        $filter = date('Y-m-d', strtotime($dataAtual));
        $horarios = Agendamento::where('AGE_DATAIN', '>=', $filter)->orderBy('AGE_DATAIN', 'asc')->get();
        $procedimentos = Procedimentos::get();
        return view('home', compact('user', 'horarios', 'procedimentos'));
    }
    public function todos_horarios()
    {
        if (Gate::allows('admin')) {
            $user = Auth::user();
            $horarios = Agendamento::get();
            return view('home', compact('horarios', 'user'));
        } else {
            return redirect()->route('home');
        }
    }
    public function perfil()
    {
        $user = Auth::user();
        return view('perfil', compact('user'));
    }
    public function lista_horarios()
    {
        $dataA = Carbon::now("America/Sao_Paulo")->toDateTimeString();
        $horarios = Agendamento::where([
            ["AGE_USE_CODIGO", '=', null],
            ["AGE_DATAIN", '>=', $dataA]
        ])->orderBy('AGE_DATAIN', 'asc')->get();
        $procedimentos = Procedimentos::get();
        return view('user.horario', compact('horarios', 'procedimentos'));
    }
    public function search_horarios(Request $request)
    {
        $filter = date('Y-m-d', strtotime($request->filter));
        $horarios = Agendamento::where("AGE_DATAIN", "LIKE", '%' . $filter . '%')->get();
        $procedimentos = Procedimentos::get();
        return view('user.horario', compact('horarios', 'procedimentos'));
    }
    public function user_horarios()
    {
        $dataA = Carbon::now("America/Sao_Paulo")->toDateTimeString();
        $horarios = Agendamento::where([
            ["AGE_USE_CODIGO", '=', Auth::user()->id],
            ["AGE_DATAIN", '>=', $dataA]
        ])->orderBy('AGE_DATAIN', 'asc')->get();
        return view('user.userHorario', compact('horarios'));
    }
    public function create()
    {
        if (Gate::allows('admin')) {
            $msg = "";
            return view('admin.criarHorario', compact('msg'));
        } else {
            return redirect()->route('home');
        }
    }
    public function agendar(Request $request)
    {
        $codigo = (int)$request->age_codigo;
        $age = Agendamento::where("AGE_CODIGO", '=', $codigo)->first();
        #$age = Agendamento:
        if (!$age)
            return redirect()->back();
        $age->update([
            'AGE_USE_CODIGO' => Auth::user()->id,
            'AGE_PRO_CODIGO'  => $request->AGE_PRO_CODIGO
        ]);
        return redirect()->route('user_horarios');
    }
    public function desmarcar(Request $request)
    {
        $codigo = (int)$request->age_codigo;
        $age = Agendamento::where("AGE_CODIGO", '=', $codigo)->first();
        #$age = Agendamento:
        if (!$age)
            return redirect()->back();
        $age->update([
            'AGE_USE_CODIGO' => null,
            'AGE_PRO_CODIGO'  => null
        ]);
        return redirect()->route('user_horarios');
    }
    public function updateUser(Request $request)
    {
        $use = User::find(Auth::user()->id);
        #$age = Agendamento:

        if ($request->password != "") {
            if ($request->password == $request->passwordComfirmed) {
                $use->update([
                    'name' => $request->name, 'endereço' => $request->endereco,
                    'telefone' => $request->telefone, 'cpf' => $request->cpf,
                    'password' => bcrypt($request->password)
                ]);
            } else {
                Session::flash('message', "Erro: As senhas não são iguais");
            }
        } else {
            $use->update([
                'name' => $request->name, 'endereço' => $request->endereco,
                'telefone' => $request->telefone, 'cpf' => $request->cpf
            ]);
        }
        return redirect()->route('perfil');
    }

    public function destroy($id)
    {
        if (Gate::allows('admin')) {
            $horario = Agendamento::find($id);
            if (!$horario)
                return redirect()->back();
            $horario->delete();
            return redirect()->route('home');
        } else {
            return redirect()->route('home');
        }
    }
    public function store(Request $request)
    {
        if (Gate::allows('admin')) {
            $colisao = false;
            $horarios = Agendamento::get();
            $data1 = $request->post('AGE_DATAIN');
            $data2 = $request->post('AGE_DATAFI');
            $datain = date('Y-m-d G:i:s', strtotime($data1));
            $datafi = date('Y-m-d G:i:s', strtotime($data2));
            foreach ($horarios as $horario) {
                if (
                    (strtotime($datain) > strtotime($horario->AGE_DATAIN)
                        and strtotime($datain) < strtotime($horario->AGE_DATAFI))
                    or (strtotime($datafi) > strtotime($horario->AGE_DATAIN)
                        and strtotime($datafi) < strtotime($horario->AGE_DATAFI))
                    or (strtotime($datain) < strtotime($horario->AGE_DATAIN)
                        and strtotime($datafi) > strtotime($horario->AGE_DATAFI))
                )
                    $colisao = true;
            }
            if (!$colisao and (strtotime($datain) < strtotime($datafi))) {
                if ($request->post('intervalo') != null) {
                    $dataCalculoIN = date_create($data1);
                    $dataCalculoFI = date_create($data2);
                    $resultado = date_diff($dataCalculoIN, $dataCalculoFI);
                    $minutos = $resultado->d * 1440;
                    $minutos = $minutos + ($resultado->h * 60);
                    $minutos = $minutos + ($resultado->i);
                    #date('d/m/Y', strtotime($data. ' + 2 days'));
                    #floor(7.3);
                    #$minutos = date_interval_format($resultado, '%i');
                    $intervalo = (int)$request->post('intervalo');
                    $repetir = (int)floor((float)($minutos / $intervalo));
                    for ($i = 0; $i < $repetir; $i++) {
                        $age = new Agendamento;
                        $age->AGE_DATAIN = date('Y-m-d G:i:s', strtotime($datain . ' + ' . ($i * $intervalo) . ' minutes'));
                        $age->AGE_DATAFI = date('Y-m-d G:i:s', strtotime($datain . ' + ' . ($i + 1) * $intervalo . ' minutes'));
                        $age->AGE_DISPONIVEL = $request->AGE_DISPONIVEL;
                        $age->save();
                    }
                } else {
                    $data = $request->only('AGE_DATAIN', 'AGE_DATAFI', 'AGE_DISPONIVEL');
                    Agendamento::create($data);
                }
                return redirect()->route('home');
            }
            $msg = "já existe um horario nesse intervalo ou a Data final é menor do que a data inicial";
            return view('admin.criarHorario', compact('msg'));
        } else {
            return redirect()->route('home');
        }
    }
    public function createProcedimento()
    {
        if (Gate::allows('admin')) {
            $msg = "";
            return view('admin.criarProcedimento', compact('msg'));
        } else {
            return redirect()->route('home');
        }
    }
    public function storeProcedimento(StoreUpdateProcedimentoRequest $request)
    {
        $data = $request->only('name', 'descricao', 'preco');
        $procedimento = Procedimentos::create($data);
        return redirect()->route('procedimentos');
    }
    public function lista_procedimentos()
    {

        $procedimentos = Procedimentos::get();
        return view('admin.procedimentos', compact('procedimentos'));
    }
    public function destroyProcedimento($id)
    {
        $procedimento = Procedimentos::find($id);
        if (!$procedimento)
            return redirect()->back();
        $procedimento->delete();
        return redirect()->route('procedimentos');
    }
    public function editProcedimento($id)
    {
        $procedimento = Procedimentos::find($id);
        if (!$procedimento)
            return redirect()->back();
        return view('admin.editarProcedimento', compact('procedimento'));
    }
    public function updateProcedimento(Request $request, $id)
    {
        $procedimento = Procedimentos::find($id);
        if (!$procedimento)
            return redirect()->back();
        #$age = Agendamento:
        $procedimento->update($request->all());
        return redirect()->route('procedimentos');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Agendamento;
use Auth;

class AgendaController extends Controller
{
    public function index(){
        $user = Auth::user();
        $horarios = Agendamento::get();
        
        return view('home', compact('user','horarios'));
    }
    public function lista_horarios(){
        $horarios = Agendamento::where("AGE_USE_CODIGO", '=', null)->get();
        return view('user.horario', compact('horarios'));
    }
    public function create(){
        return view('admin.criarHorario');
    }
    public function agendar(Request $request){
        $codigo = (int)$request->age_codigo;
        $age = Agendamento::where("AGE_CODIGO", '=', $codigo)->first();
        #$age = Agendamento:
        $age->update(['AGE_USE_CODIGO' => Auth::user()->id]);
        return redirect()->route('horarios');
    }

    public function destroy($id){
        $horario = Agendamento::find($id);
        if(!$horario)
            return redirect()->back();
        $horario->delete();
        return redirect()->route('home');
    }
    public function store(Request $request){
        $colisao = false;
        $horarios = Agendamento::get();
        $data1 = $request->post('AGE_DATAIN');
        $data2 = $request->post('AGE_DATAFI');
        $datain= date('Y-m-d G:i:s', strtotime($data1));
        $datafi = date('Y-m-d G:i:s', strtotime($data2));
        foreach($horarios as $horario){
            if(($datain > $horario->AGE_DATAIN and $datain < $horario->AGE_DATAFI)
                or ($datafi > $horario->AGE_DATAIN and $datafi < $horario->AGE_DATAFI)
                or ($datain < $horario->AGE_DATAIN and $datafi > $horario->AGE_DATAFI))
                $colisao = true;
        }
        
        if(!$colisao){
            if($request->post('intervalo') != null){
                $dataCalculoIN = date_create($data1);
                $dataCalculoFI = date_create($data2);
                $resultado = date_diff($dataCalculoIN, $dataCalculoFI);
                $minutos = $resultado->d*1440;
                $minutos = $minutos+($resultado->h*60);
                $minutos = $minutos+($resultado->i);
                #date('d/m/Y', strtotime($data. ' + 2 days'));
                #floor(7.3);
                #$minutos = date_interval_format($resultado, '%i');
                $intervalo = (int)$request->post('intervalo');
                $repetir = (int)floor((float)($minutos/$intervalo));
                for ($i = 0; $i < $repetir; $i++) {
                    $age = New Agendamento;
                    $age->AGE_DATAIN = date('Y-m-d G:i:s', strtotime($datain .' + '.($i*$intervalo).' minutes'));
                    $age->AGE_DATAFI = date('Y-m-d G:i:s', strtotime($datain .' + '.($i+1)*$intervalo.' minutes'));
                    $age->AGE_DISPONIVEL = $request->AGE_DISPONIVEL;
                    $age->save();
                }
            }else{
                $data = $request->only('AGE_DATAIN', 'AGE_DATAFI', 'AGE_DISPONIVEL');
                Agendamento::create($data);
            }
            return redirect()->route('horarios');
        }
        $msg="já existe um horario nesse intervalo";
        return view('admin.criarHorario', compact('msg'));
        
    }

}

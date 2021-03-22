@extends('layouts.saodbase')

@section('content')
    <div  class = " card shadow mb-4 " >
        <div  class = " card-header py-3 " >
            <h6  class = " m-0 font-weight-bold text-primary " > Cadastro de Consulta </h6 >
        </div >
        <div  class = " card-body ">
            <form action="{{ route('store_horario') }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Data e horario de Inicio</label>
                        <input type="datetime-local" class="form-control" name="AGE_DATAIN"
                        required >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Data e horario de fim</label>
                        <input required type="datetime-local" class="form-control" name='AGE_DATAFI'>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="hidden" name='AGE_DISPONIVEL' value="0">
                        <label for="intervalo">intervalo</label>
                        <input type="number" id="intervalo" class="form-control" name="intervalo">
                    </div>
                </div>
                @if($msg != "")
                    <div class="form-row">
                        <div class="form-group col-md-7">
                           {{$msg}}
                        </div>
                    </div>
                @endif
                <div class="form-row">
                    <div class="form-group col-md-7">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                </div>
                
            </form>
        </div>
@endsection
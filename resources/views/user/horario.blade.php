@extends('layouts.saodbase')

@section('content')
<div class=" card shadow mb-4 ">
    <div class=" card-header py-3 ">
        <h6 class=" m-0 font-weight-bold text-primary "> Consultas </h6>
    </div>
    <div class=" card-body ">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing=" 0 ">
                <thead>
                    <tr>
                        <th> Data</th>
                        <th> hora de início</th>
                        <th> hora de fim</th>
                        <th> procedimento </th>
                        <th> Opções </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($horarios as $horario)
                    <tr>
                        <form action="{{ route('agendar_horario') }}" Method="POST">
                            @csrf
                            <th>{{ date('d-m-Y', strtotime($horario->AGE_DATAIN)) }}</th>
                            <th>{{ substr($horario->AGE_DATAIN, 10, 6) }}</th>
                            <th>{{ substr($horario->AGE_DATAFI, 10, 6) }}</th>
                            <th>
                                <SELECT NAME="AGE_PRO_CODIGO" class="form-control">
                                    @foreach($procedimentos as $procedimento)
                                    <OPTION value="{{ $procedimento->id }}">
                                        {{ $procedimento->name }}
                                    </OPTION>
                                    @endforeach
                                </SELECT>
                            </th>
                            <input type="hidden" name="age_codigo" value="{{ $horario->AGE_CODIGO }}">
                            <th>
                                <button type="submit" class="btn btn-primary">
                                    Agendar
                                </button>
                            </th>
                        </form>
                    </tr>
                    @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
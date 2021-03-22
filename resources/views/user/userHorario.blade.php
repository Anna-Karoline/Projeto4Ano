@extends('layouts.saodbase')

@section('content')
<div class=" card shadow mb-4 ">
    <div class=" card-header py-3 ">
        <h6 class=" m-0 font-weight-bold text-primary "> Minhas Consultas </h6>
    </div>
    <div class=" card-body ">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing=" 0 ">
                <thead>
                    <tr>
                        <th> Data</th>
                        <th> hora de início</th>
                        <th> hora de fim</th>
                        <th> Opções </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($horarios as $horario)
                    <tr>

                        <th>{{ date('d-m-Y', strtotime($horario->AGE_DATAIN)) }}</th>
                        <th>{{ substr($horario->AGE_DATAIN, 10, 6) }}</th>
                        <th>{{ substr($horario->AGE_DATAFI, 10, 6) }}</th>
                        <input type="hidden" name="age_codigo" value="{{ $horario->AGE_CODIGO }}">
                        <th>

                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
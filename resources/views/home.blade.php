@extends('layouts.saodbase')

@section('content')
<div>
    @if($user->admin== false)
    <h1> BEM VINDO</h1>
    <div class=" card shadow mb-4 ">
        <div class=" card-header py-3 ">
            <h6 class=" m-0 font-weight-bold text-primary ">Nosso Consultorio</h6>
        </div>
        <div class="card-body">
            <h5> Apresentação</h5>
            <p align="justify"> A clinica fica localizada na área central da cidade de Caicó-RN, foi fundada em 2005 pelos Dr. Halley Mestrinho com a idéia de oferecer um atendimento ideal aos pacientes de Odontologia. O quadro de profissionais conta com profissionais experientes e altamente qualificados, permanentemente atualizados com os constantes avanços da odontologia.
                Nossa principal missão é oferecer à sociedade tratamento odontológico diferenciado e inovador com alta tecnologia, qualidade e conforto.</p>
            <p>Endereço: Av. Cel. Martiniano, 882 - CENTRO, Caicó - RN, 59300-000 </p>
            <p>Telefone: (84) 99936-0505</p>
            <p>E-mail: clinicaOdont@gmail.com</p>


        </div>
        <div class=" card-header py-3 ">
            <h6 class=" m-0 font-weight-bold text-primary ">Saúde Bucal</h6>
        </div>
        <div class="card-body">
            <h5> Higiene Bucal</h5>
            <p align="justify">Uma boa higiene bucal diminui o risco de desenvolvimento de problemas bucais e dentários. É importante ressaltar que doenças da boca têm relação direta com o fumo, o consumo de álcool e a má alimentação. Estudos científicos também comprovam que a saúde bucal tem íntima relação com a saúde geral, pois a boca interage com todas as estruturas do corpo. As más condições de higiene bucal podem causar doenças bucais, que, por sua vez, podem levar a enfermidades (ou agravá-las), principalmente doenças cardiovasculares e diabetes.</p>

            <h5> Problemas comuns que podem ser causados pela falta de higiene bucal </h5>
            <p align="justify"> Cárie: desintegração do dente provocada pela higiene inadequada, ingestão de doces e carboidratos ou, ainda, por complicações de outras doenças que diminuem a quantidade de saliva na boca. (Ex.: pessoas em tratamento quimioterápico ou radioterápico para o câncer).</p>

            <p align="justify"> Mau hálito: tem várias causas, dentre elas: higiene bucal inadequada (falta de escovação adequada e falta do uso do fio dental); gengivite; ingestão de certos alimentos como, alho ou cebola; tabaco e produtos alcoólicos; boca seca (causada por certos medicamentos, por distúrbios e por menor produção de saliva durante o sono); doenças sistêmicas como câncer, diabetes, problemas com o fígado e rins.</p>

            <p align="justify"> Gengivite: inflamação da gengiva provocada pela placa bacteriana.</p>

            <p align="justify"> Placa bacteriana: é o conjunto de bactérias que coloniza a cavidade bucal. A placa bacteriana fixa-se principalmente nas regiões de difícil limpeza, como a região entre a gengiva e os dentes ou a superfície dos dentes de trás, provocando cáries e formação de tártaro.</p>

            <p align="justify">Tártaro: é o endurecimento da placa bacteriana na superfície dos dentes.</p>

        </div>

        <div class=" card-header py-3 ">
            <h6 class=" m-0 font-weight-bold text-primary ">Procedimentos</h6>
        </div>
        <div class="card-body">
            @foreach ($procedimentos as $procedimento)
                <h5>{{ $procedimento->name }}</h5>
                <p align="justify">{{ $procedimento->descricao }}</p>
            @endforeach
        </div>
        <div class=" card-header py-3 ">
            <h6 class=" m-0 font-weight-bold text-primary ">Valores dos procedimentos</h6>
        </div>
        <div class="card-body">
            <table class=" table table-bordered " id=" dataTable " width=" 100% " cellspacing=" 0 ">
                <thead>
                    <tr>
                        <th> Nome </th>
                        <th> Valor </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($procedimentos as $procedimento)
                    <tr>
                        <th>{{ $procedimento->name }}</th>
                        <th>R$ {{ $procedimento->preco }}</th>
                    </tr>
                    @endforeach
                </tbody>
               



                <nav aria-label="Navegação de página exemplo"></nav>
            </table>

        </div>
    </div>
    @elseif($user->admin == true)
    <div class=" card shadow mb-4 ">
        <div class=" card-header py-3 ">
            <h6 class=" m-0 font-weight-bold text-primary "> Consultas </h6>
            <p></p>
            <a href="{{ route('todos_horarios') }}"> Visualizar todos os horarios</a>
            @if (Session::has('message'))
                <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif
        </div>
        <div class=" card-body ">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing=" 0 ">
                    <thead>
                        <tr>
                            <th> paciente</th>
                            <th> Data</th>
                            <th> hora de inicio</th>
                            <th> hora de fim</th>
                            <th> Opções </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($horarios as $horario)
                        <tr>
                            <th>
                                @if($horario->AGE_USE_CODIGO != null)
                                   {{$horario->usuario->name}}
                                @endif
                            </th>
                            <th>{{ date('d-m-Y', strtotime($horario->AGE_DATAIN)) }}</th>
                            <th>{{ substr($horario->AGE_DATAIN, 10, 6) }}</th>
                            <th>{{ substr($horario->AGE_DATAFI, 10, 6) }}</th>
                            <th>
                                <form action="{{ route('destroy_horario', $horario->AGE_CODIGO) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        Excluir
                                    </button>
                                    @if($horario->AGE_USE_CODIGO != null)
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{ $horario->AGE_CODIGO }}" data-whatever="@mdo">
                                        Detalhar
                                    </button>
                                    @endif
                                </form>
                            </th>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @foreach ($horarios as $horario)
    <div class="modal fade" id="exampleModal{{ $horario->AGE_CODIGO }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                @if($horario->AGE_USE_CODIGO != null)
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ $horario->usuario->name }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Procedimento: {{ $horario->procedimento->name }}</p>
                    <p>endereço: {{ $horario->usuario->endereco }}</p>
                    <p>telefone: {{ $horario->usuario->telefone }}</p>
                    <p>cpf: {{ $horario->usuario->cpf }}</p>
                    <p>email: {{ $horario->usuario->email }}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>

                </div>
                @endif
            </div>
        </div>
    </div>
    @endforeach
    @endif
</div>
@endsection
@section('script')
<script type="text/javascript">
    $('#exampleModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('New message to ' + recipient)
        modal.find('.modal-body input').val(recipient)
    })
</script>
@endsection
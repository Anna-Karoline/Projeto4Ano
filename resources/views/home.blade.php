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

            <h5>Consulta odontológica</h5>
            <p align="justify">A consulta odontológica garante a manutenção de uma boca saudável e a descoberta dos problemas dentários bem no início. A principal motivação para não deixar de ir ao dentista é a prevenção dos mais diversos problemas dentários. O dentista avalia a boca e os dentes, e solicita exames em busca de sinais de qualquer alteração.</p>
            <p align="justify">Toda consulta odontológica é acompanhada de limpeza dental profunda. Ela é indicada para todos os pacientes porque mesmo a pessoa com os melhores hábitos de higiene bucal não consegue retirar todas as impurezas e alcançar todos os espaços entre os dentes.</p>

            <h5>Restauração</h5>
            <p align="justify">Esse procedimento é bastante comum e costuma ser recomendado em casos de cárie ou fratura, pois a restauração consiste na reconstrução do dente e visa restabelecer tanto a forma quanto a função de cada elemento dental afetado. O dentista faz um procedimento para remover a parte deteriorada do dente e preenche essa área com materiais específicos, a fim de impedir a entrada de bactérias e a deterioração do dente. A restauração ajuda a prevenir uma deterioração posterior do dente. </p>

            <h5>Extração</h5>
            <p align="justify">Na extração simples, uma vez que a área é anestesiada, o dente é descolado do osso com um tipo de alavanca, e então extraído com um fórceps dentário. Seu dentista também poderá suavizar e remodelar o osso que sustenta o dente. Terminada esta etapa, ele poderá optar por fechar a área com alguns pontos cirúrgicos.</p>

            <h5>Limpeza</h5>
            <p align="justify">Muitos procedimentos preventivos podem ser feitos, incluindo a limpeza dentária.O processo da limpeza no consultório consiste na remoção da placa e do tártaro sobre os dentes, por meio de escovas rotatórias e pasta profilática, instrumentos manuais ou por meio do aparelho de ultrassom odontológico.Por isso que esse procedimento é tão importante. Com as ferramentas e técnicas adequadas, a limpeza, também chamada de profilaxia dental, é profunda e mais efetiva do que a feita diariamente em casa com a escova e o fio dental. </p>

            <h5>Tratamento de canal</h5>
            <p align="justify">O método remove esse tecido interno do dente e, depois, veda o canal para restabelecer a saúde bucal, a exemplo deste passo a passo:</p>
            <p align="justify">Inicialmente, a polpa comprometida do dente é identificada pelo especialista a partir de exames clínicos e de imagem;depois, remove-se a polpa e ocorre a limpeza dos canais, que devem ser preenchidos com material específico;por último, a cavidade é preenchida e o dentista sela a região para não haver complicações futuras.</p>

            <h5>Aplicação tópica de flúor</h5>
            <p align="justify">A técnica de aplicação do flúor é feita pelo dentista, e pode ser realizada de diversas formas, entre elas, o bochecho da solução, a aplicação direta de verniz de flúor, ou com o uso de moldeiras ajustáveis com gel. O flúor concentrado deve ficar em contato com os dentes por 1 minuto, e após a aplicação, é necessário ficar ao menos 30 minutos a 1 hora sem ingerir alimentos ou líquidos.</p>

            <h5>Raspagem supragengival </h5>
            <p align="justify"> Neste procedimento, é feita a retirada do tártaro mais visível do dente. A remoção é realizada por instrumentos manuais, como os extratores de tártaro ou com o uso de um ultrassom odontológico.</p>

            <h5>Gengivoplastia</h5>
            <p align="justify">A gengivoplastia é um procedimento relativamente simples, que pode ser feito em pouquíssimo tempo. Os cuidados se iniciam com os exames pré-operatórios, que incluem moldagens, imagens de raio X e outras preparações, para garantir a saúde do paciente e conversar sobre o resultado esperado.</p>
            <p align="justify">Além disso, o tratamento gengival é fundamental para seguir com a cirurgia. O paciente deve ter gengivas saudáveis e fortes para que o dentista dê seu aval para a realização do procedimento.</p>
            <p align="justify">No dia da cirurgia, o primeiro passo é a antissepsia da região, feita para garantir que não há bactérias ou qualquer tipo de sujeira na boca do paciente. Em seguida, é administrado o medicamento anestésico, cujo objetivo é garantir o conforto e evitar qualquer tipo de dor durante o procedimento. Por isso, é possível dizer que a gengivoplastia não dói.</p>
            <p align="justify">As ferramentas utilizadas pelo dentista podem variar desde um bisturi normal para os elétricos a laser. Esse tipo de diferença interfere no tempo de cirurgia, mas não no resultado.</p>

            <h5>Radiografia</h5>
            <p align="justify"> A radiografia odontológica (também conhecida como Raio-X odontológico) é um exame que utiliza doses seguras de radiação para a obtenção de imagens utilizadas em diagnósticos, no planejamento e no acompanhamento da evolução de um tratamento realizado por dentistas, cirurgiões e ortodontistas.</p>

            <h5>Colocação do aparelho fixo</h5>
            <p align="justify"> Esse é um produto feito exclusivamente para realinhar não só os dentes, mas também a mordida do paciente em questão. Desse modo, o realinhamento pode ser feito tanto por razões puramente estéticas (visando a um sorriso mais bonito e harmônico) como por motivos de saúde, quando ocorrem problemas por causa dos dentes tortos.</p>
            <p align="justify">Os aparelhos são, de modo geral, feitos com uma mistura de diversos materiais. Entre eles, podemos citar o metal, o plástico e até mesmo a porcelana. Todos eles são seguros e não oferecem riscos aos pacientes.</p>
            <p align="justify">A sua estrutura é composta pelos bráquetes (componentes metálicos que podem ter cores diferentes ou serem transparentes) e fios que, quando fixados aos bráquetes, auxiliam na movimentação dos dentes. Vale a pena lembrar que esse é um processo gradual, ou seja, não ocorre de um dia para o outro. O objetivo é evitar dores e desconfortos e garantir que os resultados sejam duradouros.</p>

            <h5>Clareamento</h5>
            <p align="justify">É uma microlimpeza da estrututura do dente. Por causa de pigmentos externos, com o passar do tempo, o dente fica com uma cor mais amarelada. Por meio da ação dos radicais livres, como oxigênio, é provocada a oxidação dos pigmentos orgânicos agindo na oxidação de proteínas e aminoácidos, além da possibilidade do clareamento da estrutura mineral do dente.</p>

            <h5>Implante dentário</h5>
            <p align="justify">O implante dentário é um procedimento que consiste na fixação de um pino no maxilar para servir de apoio para a colocação de umm dente, sendo indicado nos casos em que a pessoa perdeu um ou mais dentes devido a cáries, periodontite ou infecções.</p>
            <p align="justify">Esse procedimento é feito sob anestesia local para que a incisão na gengiva e a fixação no osso não é sentida. Além disso, após o procedimento, o dentista pode indicar o uso de medicamentos anti-inflamatórios, antibióticos e analgésicos para favorecer a recuperação e diminuir a dor que pode ser sentida </p>
            <p align="justify"> Após uma avaliação inicial, pode ser iniciado o processo de implante dentário, em que o dentista realiza a higienização bucal completa da pessoa, aplica anestésico no local em que será realizado o procedimento, faz a excisão de algum dente, caso haja necessidade, e faz um corte na gengiva para que seja possível ter contato com o osso que irá servir de base para o implante. Em seguida, é realizado um pequeno furo no osso para encaixar corretamente o pino que sustentará o dente e, assim, ser possível ter sucesso no implante</p>
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
                <tr>
                    <th> Consulta odontológica </th>
                    <th> R$ 150,00 </th>
                </tr>
                <tr>
                    <th> Restauração </th>
                    <th> R$ 150,00 </th>
                </tr>
                <tr>
                    <th> Extração</th>
                    <th> R$ 100,00 </th>
                </tr>
                <tr>
                    <th> Limpeza </th>
                    <th> R$ 100,00 </th>
                </tr>
                <tr>
                    <th> Tratamento de canal </th>
                    <th> R$ 300,00</th>
                </tr>
                <tr>
                    <th> Aplicação tópica de flúor </th>
                    <th> R$ 50,00 </th>
                </tr>
                <tr>
                    <th> Raspagem supragengival </th>
                    <th> R$ 180,00 </th>
                </tr>
                <tr>
                    <th> Radiografia </th>
                    <th> R$ 300,00 </th>
                </tr>
                <tr>
                    <th> Gengivoplastia </th>
                    <th> R$ 1.850,00 </th>
                </tr>
                <tr>
                    <th> Colocação do aparelho fixo </th>
                    <th> R$ 2.000,00 </th>
                </tr>
                </tr>
                <tr>
                    <th> Clareamento </th>
                    <th> R$ 1.800,00</th>
                </tr>

                <tr>
                    <th> Implante dentário </th>
                    <th> R$ 2.000,00 </th>
                </tr>


                <nav aria-label="Navegação de página exemplo"></nav>


        </div>
    </div>
    @elseif($user->admin == true)
    <div class=" card shadow mb-4 ">
        <div class=" card-header py-3 ">
            <h6 class=" m-0 font-weight-bold text-primary "> Consultas </h6>
            <p></p>
            <a href="{{ route('todos_horarios') }}"> Visualizar todos os horarios</a>
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
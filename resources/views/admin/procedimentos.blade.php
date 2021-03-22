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
                        <th> Nome</th>
                        <th> descricao</th>
                        <th> preco R$</th>
                        <th> Opções </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($procedimentos as $procedimento)
                    <tr>
                        <th>{{ $procedimento->name }}</th>
                        <th>{{ $procedimento->descricao }}</th>
                        <th>{{ $procedimento->preco }}</th>
                        <th>
                            <form action="{{ route('destroy_procedimento', $procedimento->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    Excluir
                                </button>
                                <a href="{{ route('editar_procedimento', $procedimento->id) }}"
                                class="btn btn-danger">Editar</a>
                            </form>
                            
                        </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
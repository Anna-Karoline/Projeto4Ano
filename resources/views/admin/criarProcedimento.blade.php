@extends('layouts.saodbase')


@section('content')


<div class=" card shadow mb-4 ">
    <div class=" card-header py-3 ">
        <h6 class=" m-0 font-weight-bold text-primary "> Cadastrar Procedimentos </h6>
    </div>
    <div class=" card-body ">
        <form action="{{ route('store_procedimento') }}" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Nomeproc">Nome</label>
                    <input type="text" class="form-control" id="name" placeholder="Limpeza" name="name"
                    required>
                </div>
                <div class="form-group col-md-6">
                    <label for="Pproc">Preço R$</label>
                    <input type="number"  required step="0.01"
                    name="preco" class="form-control" id="Pproc" placeholder="5">
                </div>
            </div>
            <div class="form-group">
                <label for="Dproc">descricao do procedimento</label>
                <input type="text" class="form-control" id="Dproc" required
                placeholder="Esse procedimento tem como intuito.." name="descricao">
            </div>
            <div class="form-group">
            <button class="btn btn-primary" type="submit">Cadastrar</button>
            </div>
        </form>
    </div>
</div>
@endsection
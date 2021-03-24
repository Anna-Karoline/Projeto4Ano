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
                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                    id="name" placeholder="Limpeza" name="name" required>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="Pproc">Preço R$</label>
                    <input type="number" required step="0.01" name="preco" class="form-control 
                    @error('preco') is-invalid @enderror" id="Pproc" placeholder="5">
                    @error('preco')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="Dproc">descricao do procedimento</label>
                <input type="text" class="form-control @error('descricao') is-invalid @enderror" id="Dproc" required placeholder="Esse procedimento tem como intuito.." name="descricao">
                @error('descricao')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit">Cadastrar</button>
            </div>
        </form>
    </div>
</div>
@endsection
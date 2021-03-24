@extends('layouts.saodbase')


@section('content')


<div class=" card shadow mb-4 ">
    <div class=" card-header py-3 ">
        <h6 class=" m-0 font-weight-bold text-primary "> Editar procedimento Procedimentos </h6>
    </div>
    <div class=" card-body ">
        <form action="{{ route('update_procedimento', $procedimento->id) }}" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Nomeproc">Nome</label>
                    <input required type="text" class="form-control @error('name') is-invalid @enderror"
                    value="{{ $procedimento->name }}" 
                    placeholder="Limpeza" name="name">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="Pproc">Preço R$</label>
                    <input required type="number" step="0.01" name="preco" value="{{ $procedimento->preco }}"
                    class="form-control @error('preco') is-invalid @enderror" id="Pproc" placeholder="5">
                    @error('preco')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="Dproc">descricao do procedimento</label>
                <input required type="text" class="form-control @error('descricao') is-invalid @enderror" id="Dproc" value="{{ $procedimento->descricao }}"
                placeholder="Esse procedimento tem como intuito.." name="descricao">
                @error('descricao')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Editar</button>
            </div>
        </form>
    </div>
</div>
@endsection
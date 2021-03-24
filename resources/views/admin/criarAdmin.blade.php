@extends('layouts.saodbase')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register_admin') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cpf" class="col-md-4 col-form-label text-md-right">CPF</label>

                            <div class="col-md-6">
                                <input id="cpf" type="text" class="form-control @error('cpf') is-invalid @enderror"
                                name="cpf" required autocomplete="cpf" value="{{ old('cpf') }}" maxlength="14" minlength="11">
                                @error('cpf')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-md-4 col-form-label text-md-right">Telefone</label>

                            <div class="col-md-6">
                                <input id="telefone" type="text" class="form-control  @error('telefone') is-invalid @enderror"
                                name="telefone" required autocomplete="telefone"
                                maxlength="14" onkeypress="mask(this,tel)" value="{{ old('telefone') }}">
                                @error('telefone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Endereço</label>

                            <div class="col-md-6">
                                <input id="endereco" type="text" class="form-control @error('endereco') is-invalid @enderror" name="endereco"
                                value="{{ old('endereco') }}" required autocomplete="endereco">
                            </div>
                            @error('endereco')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
<script type="text/javascript">
    function mask(o, f) {
        v_obj = o
        v_fun = f
        setTimeout("execmascara()", 1)
    }

    function execmascara() {
        v_obj.value = v_fun(v_obj.value)
    }



    function tel(v) {
        v = v.replace(/\D/g, "") //Remove tudo o que n�o � d�gito
        v = v.replace(/^(\d{2})(\d)/g, "($1) $2") //Coloca par�nteses em volta dos dois primeiros d�gitos
        v = v.replace(/(\d)(\d{4})$/, "$1-$2") //Coloca h�fen entre o quarto e o quinto d�gitos
        return v
    }
    function cpf(v) {
        v = v.replace(/\D/g, "") //Remove tudo o que não é dígito
        v = v.replace(/(\d{3})(\d)/, "$1.$2") //Coloca um ponto entre o terceiro e o quarto dígitos
        v = v.replace(/(\d{3})(\d)/, "$1.$2") //Coloca um ponto entre o terceiro e o quarto dígitos
        //de novo (para o segundo bloco de números)
        v = v.replace(/(\d{3})(\d{1,2})/, "$1-$2") //Coloca um hífen entre o terceiro e o quarto dígitos
        return v
    }
    var options = {
        onKeyPress: function() {
            var masks = ['000.000.000-00'];
            $('#cpf').mask((cpf.length > 14) ? masks[1] : masks[0], op);
        }
    }
    $('#cpf').length > 11 ? $('#cpf').mask('00.000.000-00', options) : $('#cpf').mask('000.000.000-00', options);
</script>

@endsection

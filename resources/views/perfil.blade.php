@extends('layouts.saodbase')


@section('content')
<div class=" card shadow mb-4 ">
    <div class=" card-header py-3 ">
        <h6 class=" m-0 font-weight-bold text-primary "> Perfil do Administrador </h6>
    </div>
    <div class=" card-body ">
        <form action="?" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-row col-md-7">
                    <label for="inputEmail4">Nome Completo</label>
                    <input type="text" class="form-control" value="{{ $user->name }}" id="inputNome"
                    name="name" placeholder="Amelia Pereira Brito" disabled="true">
                </div>
                <div class="form-row col-md-5">
                    <label for="inputCpf" id="cpf">CPF</label>
                    <input type="text" class="form-control" id="inputCpf" value="{{ $user->cpf }}" name="cpf"
                    placeholder="000.000.000-00" disabled="true" onkeypress="mask(this, cpf)" maxlength="14">
                </div>
            </div>
            <div class="form-row">
                <label for="inputAddress2">Endereço</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="São Paulo, 75"
                name="endereco" value="{{ $user->endereco }}" disabled="true">
            </div>
            <div class="form-row">
                <div class="form-group col-6">
                    <label for="inputEmail4">Telefone</label>
                    <input type="text" class="form-control" id="inputNome" 
                    onkeypress="mask(this,tel)" value="{{ $user->telefone }}"
                    name="telefone" placeholder="(84) 9655-4010" disabled="true" maxlength="14">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <button type="button" class="btn btn-secondary" id="btnEdit">Editar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@section('script')
    <script type="text/javascript"> 
        $(document).ready(function() {
          $("#btnEdit").click(function() {
            $("input").prop('disabled', false);
            $("select").prop('disabled', false);

          });
        });


        $(document).ready(function() {
          $("#btnSal").click(function() {
            $("input").prop('disabled', true);
            $("select").prop('disabled', true);

          });
        });



        function mask(o, f) {
          v_obj = o
          v_fun = f
          setTimeout("execmascara()", 1)
        }

        function execmascara() {
          v_obj.value = v_fun(v_obj.value)
        }

        function cep(v) {
          v = v.replace(/D/g, "") //Remove tudo o que não é dígito
          v = v.replace(/^(\d{5})(\d)/, "$1-$2") //Esse é tão fácil que não merece explicações
          return v
        }



        function cpf(v) {
          v = v.replace(/\D/g, "") //Remove tudo o que não é dígito
          v = v.replace(/(\d{3})(\d)/, "$1.$2") //Coloca um ponto entre o terceiro e o quarto dígitos
          v = v.replace(/(\d{3})(\d)/, "$1.$2") //Coloca um ponto entre o terceiro e o quarto dígitos
          //de novo (para o segundo bloco de números)
          v = v.replace(/(\d{3})(\d{1,2})$/, "$1-$2") //Coloca um hífen entre o terceiro e o quarto dígitos
          return v
        }


        function tel(v) {
          v = v.replace(/\D/g, ""); //Remove tudo o que n�o � d�gito
          v = v.replace(/^(\d{2})(\d)/g, "($1) $2"); //Coloca par�nteses em volta dos dois primeiros d�gitos
          v = v.replace(/(\d)(\d{4})$/, "$1-$2"); //Coloca h�fen entre o quarto e o quinto d�gitos
          return v;
        }
      </script>
@endsection
@extends('layouts.app')

@section('content')
    <nav>
        @if($user->admin== false)
            <ul>
                <li>user</li>
                <li>user </li>
                <li> user</li>
            </ul>
        @elseif($user->admin == true)
            <ul>
                @foreach ($horarios as $horario)
                        <li>{{ $horario->AGE_DATAIN }}</li>
                        <li>{{ $horario->AGE_DATAFI }}</li>
                        @if($horario->AGE_USE_CODIGO != null)
                            <li><a href="#"> detalhar </a></li>
                        @endif
                        <form action="{{ route('destroy_horario', $horario->AGE_CODIGO) }}"
                        method = "POST">
                        @csrf
                        @method('DELETE')
                        <li>
                            <button type="submit"> Excluir </button>
                        </li>
                @endforeach
            </ul>
        @endif
    </nav>
@endsection

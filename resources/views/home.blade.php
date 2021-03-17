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
                    <form action="{{ route('agendar_horario') }}" Method="POST">
                        @csrf
                        <li>{{ $horario->AGE_DATAIN }}</li>
                        <li>{{ $horario->AGE_DATAFI }}</li>
                        @if($horario->AGE_USE_CODIGO != null)
                            <li><a href="#"> detalhar </a></li>
                        @endif
                    </form>
                @endforeach
            </ul>
        @endif
    </nav>
@endsection

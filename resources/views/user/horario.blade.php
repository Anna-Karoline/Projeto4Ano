@extends('layouts.app')

@section('content')
    <form>
        <input type="date">
    </form>
    <ul>
        @foreach ($horarios as $horario)
            <form action="{{ route('agendar_horario') }}" Method="POST">
                @csrf
                <li>{{ $horario->AGE_DATAIN }}</li>
                <li>{{ $horario->AGE_DATAFI }}</li>
                <input type="hidden" name="age_codigo" value="{{ $horario->AGE_CODIGO }}">
                <li><button type="submit">Agendar</button></li>
            </form>
        @endforeach
    </ul>

@endsection
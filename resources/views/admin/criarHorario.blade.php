@extends('layouts.app')

@section('content')
    <form action="{{ route('store_horario') }}" method="POST">
        @csrf
        <input type="datetime-local" name="AGE_DATAIN">
        <input type="datetime-local" name='AGE_DATAFI'>
        <input type="hidden" name='AGE_DISPONIVEL' value="0">
        <input type="number" name="intervalo">
        <button type="submit">Criar</button>
    </form>
@endsection
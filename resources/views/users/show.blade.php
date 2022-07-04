@extends('layouts.app')

@section('title', 'Detalhes do usuário')


@section('content')

    <h1>Listagem do usuário {{ $user->name }}</h1>

    <ul>
        <li>{{ $user->name }}</li>
        <li>{{ $user->email }}</li>
        <li>{{ $user->created_at }}</li>
        <br>
        <a href="{{ route('users.index') }}">Voltar</a>
    </ul>

@endsection

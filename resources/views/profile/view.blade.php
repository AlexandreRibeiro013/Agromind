@extends('layouts.app')

@section('content')

<section>
    <h2>Informações da Conta</h2>
    <p>Nome: {{ Auth::user()->name }} </p>
    <p>E-mail: {{ Auth::user()->email }} </p>
    <a href="{{ route('profile.edit') }}">Editar Conta</a>
</section>

<section>
    <h2>Sair da Conta</h2>
    <form method="post" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Sair da Conta</button>
    </form>
</section>

<section>
    <h2>Excluir Conta</h2>
    <form method="post" action="{{ route('profile.destroy') }}">
        @csrf
        @method('delete')
        <div>
            <label for="password">Confirme sua senha para excluir a conta:</label><br>
            <input id="password" type="password" name="password">
            @error('password')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
        <br>
        <button type="submit">Excluir Conta</button>
    </form>
</section>

@endsection
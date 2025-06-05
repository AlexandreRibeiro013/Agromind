@extends('layouts.guest')

@section('content')

<section>
    <h2>Acessar sua Conta</h2>
    <form method="post" action="{{ route('login') }}">
        @csrf

        <div>
            <label for="email">E-mail:</label><br>
            <input type="email" id="email" name="email" value="{{ old('email') }}">
            @error('email')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
        <br>

        <div>
            <label for="password">Senha:</label><br>
            <input type="password" id="password" name="password">
            @error('password')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
        <br>

        <div>
            <button type="submit">Entrar</button>
        </div>
    </form>
</section>

<p>Não possui uma conta? <a href="{{ route('register') }}">Criar</a></p>

@endsection
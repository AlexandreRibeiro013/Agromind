@extends('layouts.guest')

@section('content')

<section>
    <h2>Criar Nova Conta</h2>
    <form method="post" action="{{ route('register') }}">
        @csrf

        <div>
            <label for="name">Nome:</label><br>
            <input type="text" id="name" name="name" value="{{ old('name') }}">
            @error('name')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
        <br>

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
            <label for="password_confirmation">Confirmar Senha:</label><br>
            <input type="password" id="password_confirmation" name="password_confirmation">
            @error('password_confirmation')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
        <br>

        <div>
            <button type="submit">Registrar</button>
        </div>
    </form>
</section>

<p>Já possui uma conta? <a href="{{ route('login') }}">Entrar</a></p>

@endsection
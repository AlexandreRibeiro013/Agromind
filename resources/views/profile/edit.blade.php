@extends('layouts.app')

@section('content')

<section>
    <h2>Atualizar Informações do Perfil</h2>
    <form method="post" action="{{ route('profile.update') }}">
        @csrf
        @method('patch')

        <div>
            <label for="name">Nome:</label><br>
            <input type="text" id="name" name="name" value="{{ old('name', Auth::user()->name,) }}">
            @error('name')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
        <br>

        <div>
            <label for="email">E-mail:</label><br>
            <input type="email" id="email" name="email" value="{{ old('email', Auth::user()->email) }}">
            @error('email')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
        <br>

        <div>
            <button type="submit">Atualizar</button>
        </div>
    </form>
</section>

<section>
    <h2>Atualizar Senha</h2>
    <form method="post" action="{{ route('profile.update.password') }}">
        @csrf
        @method('patch')

        <div>
            <label for="old_password">Senha Antiga:</label><br>
            <input type="password" id="old_password" name="old_password">
            @error('old_password')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
        <br>

        <div>
            <label for="new_password">Nova Senha:</label><br>
            <input type="password" id="new_password" name="new_password">
            @error('new_password')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
        <br>

        <div>
            <label for="new_password_confirmation">Confirmar Nova Senha:</label><br>
            <input type="password" id="new_password_confirmation" name="new_password_confirmation">
            @error('new_password_confirmation')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
        <br>

        <div>
            <button type="submit">Atualizar</button>
        </div>
    </form>
</section>

@endsection
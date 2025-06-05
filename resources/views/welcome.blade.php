@extends('layouts.guest')

@section('content')

    <a href="@auth {{ route('dashboard') }} @else {{ route('register') }} @endauth">
        Gerencie já!
    </a>

@endsection
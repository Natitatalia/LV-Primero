@extends("layouts.landing")
@section("stilos")
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection
@section("titulo","servicios")
@section("cuerpo")
    <h1>nuestros servicios</h1>
    @component("_components.tarjeta")
        @slot("titulo", "tarjeta Titulo 1")
        @slot("parrafo")
            <div>hola</div>
        @endslot        
    @endcomponent
    @component("_components.tarjeta")
        @slot("titulo", "tarjeta Titulo 2")
        @slot("parrafo")
            <div>hola 3</div>
        @endslot        
    @endcomponent
@endsection
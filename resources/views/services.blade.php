@extends("layouts.landing")
@section("titulo","servicios")
@section("cuerpo")
    <h1>nuestros servicios</h1>
    @component("_components.tarjeta")
        @slot("titulo", "tarjeta Titulo")
        @slot("parrafo")
            <div>hola</div>
        @endslot        
    @endcomponent
@endsection
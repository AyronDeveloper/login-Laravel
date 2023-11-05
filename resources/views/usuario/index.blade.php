@extends("layout.planilla")
@section("content")
    <div>
        <div class="titulo">Este es mi primer crud utilizando la tecnologia de Laravel</div class="titulo">
        <div>
            <img class="icono-laravel" src="{{asset('img/laravel.png')}}">
        </div>
    </div>
    <a class="boton session" href="{{route('logueo.user')}}">Iniciar Sesion</a><br>
    <a class="boton register" href="{{route("usuario.register")}}">Registrarme</a>
@endsection
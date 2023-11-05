@extends("layout.planilla")
@section("content")
    @if (session("fallo"))
    <div>{{session("fallo")}}</div>
    @endif

    <div class="contenedor-formulario">
    <form action="{{route('validando.login')}}" method="POST">
        @csrf
        <div>
            <label for="">Correo Electronico</label>
            <input type="text" name="correo">
        </div>
        <div>
            <label for="">Contraseña</label>
            <input type="password" name="contra">
        </div>
        <div class="separador">
            <button class="boton-form ingresar">Ingresar</button>
            <p>No tienes cuenta todavia <a class="boton-atras" style="color: #4E018E" href="{{route('register.user')}}">Registrarme</a></p>
        </div>
        <div>
            <a class="boton-atras" href="{{route('usuario.index')}}">atras</a>
        </div>
    </form>
    </div>
@endsection
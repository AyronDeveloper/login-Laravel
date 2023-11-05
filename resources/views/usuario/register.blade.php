@extends('layout.planilla')
@section("content")
    <div>
        <h1 class="titulo-registro">Registrate futuro developer de laravel</h1>
        <img class="logo-laravel" src="{{asset('img/laravel.png')}}" alt="">
    </div>
    <div class="contenedor-formulario">
        <form action="{{route('register.user')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre">
            </div>
            <div>
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" id="apellido">
            </div>
            <div>
                <label for="edad">Edad</label>
                <input type="number" name="edad" id="edad">
            </div>
            <div>
                <label for="sexo">Sexo</label>
                <select name="sexo" id="sexo">
                    <option selected>---</option>
                    <option value="M">Mujer</option>
                    <option value="H">Hombre</option>
                </select>
            </div>
            <div>
                <label for="fecha">Fecha de nacimiento</label>
                <input type="date" name="fecha" id="fecha">
            </div>
            <div>
                <label for="direccion">Direccion</label>
                <input type="text" name="direccion" id="direccion">
            </div>
            <div>
                <label for="correo">Correo Electronico</label>
                <input type="email" name="correo" id="correo">
            </div>
            <div>
                <label for="contra">Contraseña</label>
                <input type="password" name="contra" id="contra">
            </div>
            <div>
                <label for="recontra">Repita contraseña</label>
                <input type="password" name="recontra" id="recontra">
            </div>
            <div>
                <label for="img">Imagen</label>
                <input type="file" name="imagen" id="img" accept="image/*">
            </div>
            @if (session("password"))
                <div>{{session("password")}}</div>
            @endif
            <div class="separador">
                <button class="boton-form register">Registrarme</button>
            </div>
            <div>
                <a class="boton-atras" href="{{route('usuario.index')}}">Atras</a>
            </div>
        </form>
    </div>
@endsection
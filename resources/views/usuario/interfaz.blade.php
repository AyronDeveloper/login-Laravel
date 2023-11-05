@extends("layout.planilla")
@section("content")
    <div class="contenedor">
        <div class="contenedor-informacion">
            <div class="titulo-usuario">Bienvenido Developer</div>
            <div class="titulo-usuario">{{session("user")->nombre}}</div>
            <div class="contenedor-imagen">
                <img class="imagen-usuario" src="{{session('user')->imagen}}" alt="imagen del usuario">
            </div>
            <div class="un-contenedor">
                <div class="sub-titulo">Nombre y Apellidos</div>
                <div class="info">{{session("user")->nombre}} {{session("user")->apellido}}</div>
            </div>
            <div class="doble-contenedor">
                <div class="content-fecha">
                    <div class="sub-titulo">Fecha de Nacimiento</div>
                    <div class="info">{{session("user")->fecha}}</div>
                </div>
                <div class="content-sexo">
                    <div class="sub-titulo">Sexo</div>
                    <div class="info">{{session("user")->sexo=="H"?"Hombre":"Mujer"}}</div>
                </div>
            </div>
            <div  class="un-contenedor">
                <div class="sub-titulo">Direccion</div>
                <div class="info">{{session("user")->direccion}}</div>
            </div  class="un-contenedor">
            <div  class="un-contenedor">
                <div class="sub-titulo">Correo Electronico</div>
                <div class="info">{{session("user")->email}}</div>
            </div>
            <div>
                <a href="">Cambiar contraseña</a>
            </div>
            <div>
                <a href="{{route('salir.login')}}">Cerrar Session</a>
            </div>
        </div>
    </div>
@endsection
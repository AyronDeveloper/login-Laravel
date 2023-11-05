<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class RegisterController extends Controller
{
    public function __invoke(){
        return view("usuario.index");
    }

    public function create(){
        return view("usuario.register");
    }
    public function store(Request $request){
        if($request->contra === $request->recontra){
            $usuario = new Usuario();
            $usuario->nombre=$request->nombre;
            $usuario->apellido=$request->apellido;
            $usuario->edad=$request->edad;
            $usuario->sexo=$request->sexo;
            $usuario->fecha=$request->fecha;
            $usuario->direccion=$request->direccion;
            $usuario->email=$request->correo;
            $usuario->password=bcrypt($request->contra);
            $imagen=$request->file("imagen")->store("public/img");
            $url = Storage::url($imagen);
            $usuario->imagen=$url;
            $usuario->save();

            return redirect()->route("logueo.user");
        }else{
            return redirect()->route("register.user")->with("password","Las contraseña no son iguales");
        }
    }

    public function getLogin(){
        return view("usuario.login");
    }
    public function validandoLogin(Request $request){

        $credenciales = [
            "email"=>$request->correo,
            "password"=>$request->contra
        ];

        //$remember = ($request->has("remember") ? true:false);

        if(Auth::attempt($credenciales)){

            $user=Auth::user();

            $request->session()->put("user",$user);

            return redirect()->route("interfaz.user");
        }else{
            return redirect()->route("logueo.user")->with("fallo","Los datos que ingreso son incorrectos");
        }
    }
    public function loginOut(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerate();

        return  redirect()->route("logueo.user");
    }

    public function interfaz(){
        return view("usuario.interfaz");
    }

}

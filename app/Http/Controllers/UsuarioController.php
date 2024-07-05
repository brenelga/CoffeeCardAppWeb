<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Models\UsuarioModel;

class UsuarioController extends Controller
{
    public function login(Request $request){
        $usuario = $request->input('Usuario');
        $contrasena = $request->input('Contrasena');

        $user = UsuarioModel::where('Usuario', $usuario)->first();

        if($user && Hash::check($contrasena, $user->Contrasena)){
            Session::put('usuario', $user);

            switch($user->Tipo){
                case 'Usuario':
                    return redirect('/PanelUser');
                case 'Administrador':
                    return redirect('/PanelAdmin');
                case 'Vendedor':
                    return redirect('/PanelVentas');
            }
        } else {
            return redirect('/login')->with('Error', 'Credenciales inválidas');
        }
    }
    public function usuarioDashboard()
    {
        // Verificar si el usuario está autenticado y es de tipo 'usuario'
        if (Session::has('usuario') && Session::get('usuario')->Tipo == 'usuario') {
            return view('usuario');
        }
        return redirect('/login')->with('error', 'Acceso no autorizado');
    }

    public function administradorDashboard()
    {
        // Verificar si el usuario está autenticado y es de tipo 'administrador'
        if (Session::has('usuario') && Session::get('usuario')->Tipo == 'administrador') {
            return view('administrador');
        }
        return redirect('/login')->with('error', 'Acceso no autorizado');
    }

    public function vendedorDashboard()
    {
        // Verificar si el usuario está autenticado y es de tipo 'vendedor'
        if (Session::has('usuario') && Session::get('usuario')->Tipo == 'vendedor') {
            return view('vendedor');
        }
        return redirect('/login')->with('error', 'Acceso no autorizado');
    }

    public function register(Request $request)
    {
        /*$validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:255',
            'ApPat' => 'required|string|max:255',
            'ApMat' => 'nullable|string|max:255',
            'Usuario' => 'required|digits:10|starts_with:5|unique:Usuario',
            'Contrasena' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return redirect('/registro')
                        ->withErrors($validator)
                        ->withInput();
        }*/

        $usuario = new UsuarioModel();
        $usuario->nombre = $request->input('nombre');
        $usuario->ApPat = $request->input('ApPat');
        $usuario->ApMat = $request->input('ApMat');
        $usuario->Usuario = $request->input('Usuario');
        $usuario->Contrasena = Hash::make($request->input('Contrasena'));
        $usuario->Tipo = 'Usuario';

        $usuario->save();

        return redirect('/login')->with('success', 'Registro exitoso. Por favor, inicie sesión.');
    }
}


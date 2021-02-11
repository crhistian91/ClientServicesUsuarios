<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Traits\ApiResponser;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    use ApiResponser;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Description
     * @return type
     */
    public function index()
    {
         $usuarios = Usuario::all();   
         return $this->successResponse($usuarios);
    }

    public function store(Request $request)
    {
        $rules = [
            'documento' => 'required|max:255',
            'nombres'   => 'required|max:255',
            'area'      => 'required|max:255',
        ];

        $this->validate($request, $rules);
        $usuario = Usuario::create($request->all());
        return $this->successResponse($usuario, Response::HTTP_CREATED);
    }

    public function show($usuario)
    {
        
        $usuario = Usuario::findOrfail($usuario);
        return $this->successResponse($usuario, Response::HTTP_CREATED);   

    }

    public function update(Request $request, $usuario)
    {
        
        $rules = [
            'documento' => 'max:255',
            'nombres'   => 'max:255',
            'area'      => 'max:255',
        ];

        $this->validate($request, $rules);
        $usuario = Usuario::findOrfail($usuario);

        $usuario->fill($request->all());

        if ($usuario->isClean()) {
            return $this->errorResponse('Al Menos debe de cambiar un error', Response::HTTP_UNPROCESSABLE_ENTITY);       
        }

        $usuario->save();

        return $this->successResponse($usuario, Response::HTTP_CREATED);   
    }

    public function destroy($usuario)
    {
        
        $usuario = Usuario::findOrfail($usuario);
        $usuario->delete();

        return $this->successResponse($usuario);   
    }

}

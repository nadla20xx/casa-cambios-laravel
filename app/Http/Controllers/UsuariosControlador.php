<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Models\TipoCambio;
use App\Models\Moneda;
use App\Models\Usuario;

use DB;

class UsuariosControlador extends Controller
{
    public function index(Request $request)
    {
        $campo_orden        =   $request->query('campo_orden','id_usuario');
        $direccion_orden    =   $request->query('direccion_orden','desc');
        
        return Usuario::orderBy($campo_orden,$direccion_orden)->get();
    }

    public function show(Request $request,int $id_usuario)
    {
        $respuesta      =   ["success"=>true,"mensaje"=>'Se recupero información',"codigo_error"=>0,'data'=>[]];

        try{
            
            $respuesta['data'] = Usuario::find($id_usuario);

        } catch (Exception $e) {
            $respuesta  =   ["success"=>false,"mensaje"=>'Error al guardar usuario: ' . $e->getMessage(),"codigo_error"=>$e->getCode(),'data'=>[]];
        }finally {
            return response()->json($respuesta, $respuesta['success']?200:500);
        }
    }

    public function store(Request $request)
    {
        $respuesta      =   ["success"=>true,"mensaje"=>'Se genero registro',"codigo_error"=>0];

        try{

            $datos = $request->only(['email', 'password', 'habilitado']);

            $usuario = new Usuario();

            $usuario->email                 =   $datos['email'];
            $usuario->password              =   $datos['password'];
            $usuario->fecha_hora_registro   =   date("Y-m-d H:i:s");
            $usuario->habilitado            =   $datos['habilitado'];

            $usuario->save();

        } catch (Exception $e) {
            $respuesta  =   ["success"=>false,"mensaje"=>'Error al guardar usuario: ' . $e->getMessage(),"codigo_error"=>$e->getCode()];
        }finally {
            return response()->json($respuesta, $respuesta['success']?200:500);
        }        
    }

    public function update(Request $request,int $id_usuario)
    {
        $respuesta      =   ["success"=>true,"mensaje"=>'Se actualizaron datos',"codigo_error"=>0];

        try{
            $datos = $request->only(['email', 'password','habilitado']);

            $usuario = Usuario::find($id_usuario);

            if(!empty($datos['password'])){
                $usuario->password = $datos['password'];
            }

            $usuario->email                 =   $datos['email'];
            $usuario->fecha_hora_registro   =   date("Y-m-d H:i:s");
            $usuario->habilitado            =   $datos['habilitado'];

            $usuario->save();

        } catch (Exception $e) {
            $respuesta  =   ["success"=>false,"mensaje"=>'Error al guardar usuario: ' . $e->getMessage(),"codigo_error"=>$e->getCode()];
        }finally {
            return response()->json($respuesta, $respuesta['success']?200:500);
        }   
    }

    public function delete(Request $request,int $id_usuario)
    {
        $respuesta      =   ["success"=>true,"mensaje"=>'Se elimino registro',"codigo_error"=>0];

        try{
            $datos = $request->only(['id_moneda', 'valor','fecha_cambio','habilitado']);

            $usuario = Usuario::find($id_usuario);

            $usuario->delete();

        } catch (Exception $e) {
            $respuesta  =   ["success"=>false,"mensaje"=>'Error al guardar eleminar registro: ' . $e->getMessage(),"codigo_error"=>$e->getCode()];
        }finally {
            return response()->json($respuesta, $respuesta['success']?200:500);
        }   
    }

    public function VerReporteUsuarios(Request $request):View
    {
         return view('administrador.reporte-usuarios', [
            'usuarios' => Usuario::orderBy("id_usuario","desc")->get(),
        ]);
    }
}

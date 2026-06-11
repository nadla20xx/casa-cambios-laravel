<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

use App\Models\TipoCambio;
use App\Models\Moneda;
use App\Models\Usuario;

use DB;
use Exception;

class TiposCambiosControlador extends Controller
{
    public function index(Request $request)
    {
        $campo_orden        =   $request->query('campo_orden','fecha_cambio');
        $direccion_orden    =   $request->query('direccion_orden','desc');
        
        return TipoCambio::with('Moneda')->orderBy($campo_orden,$direccion_orden)->get();
    }

    public function show(Request $request,int $id_tipo_cambio)
    {
        $respuesta      =   ["success"=>true,"mensaje"=>'Se recupero información',"codigo_error"=>0,'data'=>[]];

        try{
            
            $respuesta['data'] = TipoCambio::find($id_tipo_cambio);

        } catch (Exception $e) {
            $respuesta  =   ["success"=>false,"mensaje"=>'Error al guardar tipo de cambio: ' . $e->getMessage(),"codigo_error"=>$e->getCode(),'data'=>[]];
        }finally {
            return response()->json($respuesta, $respuesta['success']?200:500);
        }
    }

    public function store(Request $request)
    {
        $respuesta      =   ["success"=>true,"mensaje"=>'Se genero registro',"codigo_error"=>0];

        try{
            
            $datos = $request->only(['id_moneda', 'valor','fecha_cambio','habilitado']);

            $tipo_cambio = new TipoCambio();

            $tipo_cambio->id_moneda             =   $datos['id_moneda'];
            $tipo_cambio->valor                 =   $datos['valor'];
            $tipo_cambio->fecha_cambio          =   $datos['fecha_cambio'];
            $tipo_cambio->habilitado            =   $datos['habilitado'];
            $tipo_cambio->fecha_hora_registro   =   date("Y-m-d H:i:s");

            $tipo_cambio->save();

        } catch (Exception $e) {
            $respuesta  =   ["success"=>false,"mensaje"=>'Error al guardar tipo de cambio: ' . $e->getMessage(),"codigo_error"=>$e->getCode()];
        }finally {
            return response()->json($respuesta, $respuesta['success']?200:500);
        }
    }

    public function update(Request $request,int $id_tipo_cambio)
    {
        $respuesta      =   ["success"=>true,"mensaje"=>'Se actualizaron datos',"codigo_error"=>0];

        try{
            $datos = $request->only(['id_moneda', 'valor','fecha_cambio','habilitado']);

            $tipo_cambio = TipoCambio::find($id_tipo_cambio);

            $tipo_cambio->id_moneda                 =   $datos['id_moneda'];
            $tipo_cambio->valor                     =   $datos['valor'];
            $tipo_cambio->fecha_cambio              =   $datos['fecha_cambio'];
            $tipo_cambio->habilitado                =   $datos['habilitado'];
            $tipo_cambio->fecha_hora_modificacion   =   date("Y-m-d H:i:s");

            $tipo_cambio->save();

        } catch (Exception $e) {
            $respuesta  =   ["success"=>false,"mensaje"=>'Error al guardar el tipo de cambio: ' . $e->getMessage(),"codigo_error"=>$e->getCode()];
        }finally {
            return response()->json($respuesta, $respuesta['success']?200:500);
        }
    }

    public function delete(Request $request,int $id_tipo_cambio)
    {
        $respuesta      =   ["success"=>true,"mensaje"=>'Se elimino registro',"codigo_error"=>0];

        try{
            $datos = $request->only(['id_moneda', 'valor','fecha_cambio','habilitado']);

            $tipo_cambio = TipoCambio::find($id_tipo_cambio);

            $tipo_cambio->delete();

        } catch (Exception $e) {
            $respuesta  =   ["success"=>false,"mensaje"=>'Error al guardar eleminar registro: ' . $e->getMessage(),"codigo_error"=>$e->getCode()];
        }finally {
            return response()->json($respuesta, $respuesta['success']?200:500);
        }
    }

    public function RecuperarTipoCambioFecha(Request $request,string $fecha_cambio)
    {
        $respuesta      =   ["success"=>true,"mensaje"=>'Se recupero información',"codigo_error"=>0,'data'=>[]];

        try{
            $tipo_cambio = TipoCambio::where("fecha_cambio",$fecha_cambio)->where("habilitado",1)->orderBy("fecha_cambio","desc")->first();
            
            if(empty($tipo_cambio))
                $tipo_cambio = TipoCambio::where("habilitado",1)->orderBy("fecha_cambio","desc")->first();
            
        } catch (Exception $e) {
            $respuesta  =   ["success"=>false,"mensaje"=>'Error al guardar tipo de cambio: ' . $e->getMessage(),"codigo_error"=>$e->getCode(),'data'=>[]];
        }finally {
            return response()->json($tipo_cambio, $respuesta['success']?200:500);
        }
    }

    public function VerReporteTiposCambio(Request $request):View
    {
        return view('administrador.reporte-tipos-cambio', [
            'tipos_cambios' => TipoCambio::with('Moneda')->orderBy("fecha_cambio","desc")->get(),
            'monedas' => Moneda::get(),
        ]);
    }

    public function VerificarAccesos(Request $request)
    {
        $respuesta      =   ["success"=>true,"mensaje"=>'Accesos validos',"codigo_error"=>0];

        try{
            $datos = $request->only(['email', 'password']);
            
            if (Auth::attempt(['email' => $datos['email'], 'password' => $datos["password"]])) {
                //$request->session()->regenerate();

                $usuario = Usuario::where("email",$datos['email'])->where("password",$datos['password'])->where("habilitado",1)->first();

                $usuario->fecha_hora_ultimo_acceso = date("Y-m-d H:i:s");

                $usuario->save();
            }else{
                $respuesta  =   ["success"=>false,"mensaje"=>'Accesos invalidos',"codigo_error"=>0];
            }

        } catch (Exception $e) {
            $respuesta  =   ["success"=>false,"mensaje"=>'Error al guardar el tipo de cambio: ' . $e->getMessage(),"codigo_error"=>$e->getCode()];
        }finally {
            return response()->json($respuesta, $respuesta['success']?200:500);
        }
    }

    public function CerrarSession(Request $request)
    {
        Auth::logout();
    
        return redirect(route("login"));
    }
}

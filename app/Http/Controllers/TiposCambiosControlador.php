<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Models\TipoCambio;

class TiposCambiosControlador extends Controller
{
    public function index(Request $request)
    {
        $campo_orden        =   $request->query('campo_orden','fecha_cambio');
        $direccion_orden    =   $request->query('direccion_orden','desc');
        
        return TipoCambio::orderBy($campo_orden,$direccion_orden)->get();
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

            $tipo_cambio->id_moneda     =   $datos['id_moneda'];
            $tipo_cambio->valor         =   $datos['valor'];
            $tipo_cambio->fecha_cambio  =   $datos['fecha_cambio'];
            $tipo_cambio->habilitado    =   $datos['habilitado'];

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

            $tipo_cambio->id_moneda     =   $datos['id_moneda'];
            $tipo_cambio->valor         =   $datos['valor'];
            $tipo_cambio->fecha_cambio  =   $datos['fecha_cambio'];
            $tipo_cambio->habilitado    =   $datos['habilitado'];

            $tipo_cambio->save();

        } catch (Exception $e) {
            $respuesta  =   ["success"=>false,"mensaje"=>'Error al guardar el tipo de cambio: ' . $e->getMessage(),"codigo_error"=>$e->getCode()];
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
            'tipos_cambios' => TipoCambio::with('Moneda')->orderBy("fecha_cambio","desc")->get()
        ]);
    }
}

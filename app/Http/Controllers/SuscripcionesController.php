<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Titular;
use App\Suscripcion;
use Carbon\Carbon;

class SuscripcionesController extends Controller
{
    public function index(){
      // return Suscripcion::all();
      return datatables()->eloquent(Suscripcion::query())->toJson();
    }
    public function crear(){
      return view('admin.suscripcion.crear');
    }


    public function store(Request $request){
      $titular = Titular::where('cedula',$request->cedula)->first();
      if ($titular) {
        $sus = new Suscripcion();
        $sus->nombre_recibe = $request->nombre_recibe;
        $sus->pais = $request->pais;
        $sus->estado = $request->estado;
        $sus->ciudad = $request->ciudad;
        $sus->zipcode = $request->zipcode;
        $sus->direccion = $request->direccion;
        $sus->observacion = $request->observacion;
        $sus->jovenes = $request->jovenes;
        $sus->adultos = $request->adultos;
        $sus->ninos = $request->ninos;
        $sus->puerta = $request->puerta;
        $sus->tiempo = $request->tiempo;
        $sus->fecha_pago = Carbon::parse($request->fecha_pago);
        $sus->fecha_inicio = Carbon::parse($request->fecha_inicio);
        $sus->fecha_corte = Carbon::parse($request->fecha_inicio)->addMonths((int)$request->tiempo);
        $sus->numero_suscripcion = $request->numero_suscripcion;
        $sus->numero_factura = $request->numero_factura;
        $sus->titular_id = $titular->id;
        $sus->save();
        return 'El titular existía, se le agregó una nueva suscripción';
      }else{
        // GUARDAR TITULAR
        $titular = new Titular();
        $titular->nombres = $request->nombres;
        $titular->apellidos = $request->apellidos;
        $titular->cedula = $request->cedula;
        $titular->correo = $request->correo;
        $titular->telefono = $request->telefono;
        $titular->passports = $request->passports;
        $titular->fecha_nacimiento = $request->fecha_nacimiento;
        $titular->save();
        // GUARDAR SUSCRIPCION
        $sus = new Suscripcion();
        $sus->nombre_recibe = $request->nombre_recibe;
        $sus->pais = $request->pais;
        $sus->estado = $request->estado;
        $sus->ciudad = $request->ciudad;
        $sus->zipcode = $request->zipcode;
        $sus->direccion = $request->direccion;
        $sus->observacion = $request->observacion;
        $sus->jovenes = $request->jovenes;
        $sus->adultos = $request->adultos;
        $sus->ninos = $request->ninos;
        $sus->puerta = $request->puerta;
        $sus->tiempo = $request->tiempo;
        $sus->fecha_pago = Carbon::parse($request->fecha_pago);
        $sus->fecha_inicio = Carbon::parse($request->fecha_inicio);
        $sus->fecha_corte = Carbon::parse($request->fecha_inicio)->addMonths((int)$request->tiempo);
        $sus->numero_suscripcion = $request->numero_suscripcion;
        $sus->numero_factura = $request->numero_factura;
        $sus->titular_id = $titular->id;
        $sus->save();
        return 'Se creó titular y se le agregó una suscripción';
      }
    }
}

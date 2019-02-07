<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\SuscripcionExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Suscripcion;

class ReporteController extends Controller
{
    public function exportSuscripciones(){

      Excel::create('Suscripciones', function($excel) {

          $excel->sheet('Datos', function($sheet) {
              $sus = Suscripcion::all();
              $sheet->fromArray($sus);

          });

      })->export('xls');

      // return Excel::download(new SuscripcionExport, 'suscripciones.xlsx');


      // Excel::create('Reporte suscripciones', function($excel) use ($request) {
      //     $excel->sheet('Reporte Titulares', function($sheet) use ($request)  {
      //     if ($request->region == 'Todas') {
      //     $suscripciones =  Suscripcion::where('estado',$request->estado)
      //                                  ->where('created_at','>=',$request->desde)
      //                                  ->where('created_at','<=',$request->hasta)->get();
      //     }else{
      //     $suscripciones =  Suscripcion::where('estado',$request->estado)
      //                                      ->where('region_id',$request->region)
      //                              ->where('created_at','>=',$request->desde)
      //                              ->where('created_at','<=',$request->hasta)->get();
      //     }
      //     // Header
      //     $sheet->row(1,
      //     ['
      //     ID SUSCRIPCION','NOMBRE TITULAR','TELÉFONO TITULAR','RECIBE','TELÉFONO','DIRECCIÓN',
      //     'ESPECIFICACIÓN DE DIRECCIÓN','MUNICIPIO','DEPARTAMENTO','JOVENES','ADULTOS','NIÑOS',
      //     'PUERTA A LA PALABRA','OBSERVACION'
      //     ]
      //     );
      //     // Data
      //     foreach ($suscripciones as $sus) {
      //       $row = [];
      //       $row[0] = $sus->id;
      //       $row[1] = $sus->persona->nombres ." ". $sus->persona->apellidos ;
      //       $row[2] = $sus->persona->telefono;
      //       $row[3] = $sus->nombre_recibe;
      //       $row[4] = $sus->telefono;
      //       $row[5] = $sus->direccion;
      //       $row[6] = $sus->direccion_especificacion;
      //       $row[7] = $sus->municipio->nombre;
      //       $row[8] = $sus->municipio->departamento->nombre;
      //       $row[9] = $sus->jovenes;
      //       $row[10] = $sus->adultos;
      //       $row[11] = $sus->ninos;
      //       $row[12] = $sus->puerta;
      //       $row[13] = $sus->observacion;
      //       $sheet->appendRow($row);
      //     }
      //     $sheet->setOrientation('landscape');
      //     });
      // })->export('xls');
    }

}

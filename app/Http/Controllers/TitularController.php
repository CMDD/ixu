<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Titular;
use Yajra\Datatables\Datatables;

class TitularController extends Controller
{
    public function index(){
      $titulares = Titular::all();
      return Datatables::of($titulares)
             ->addColumn('btn','admin.partials.botones-titular')
             ->rawColumns(['btn'])
             ->make(true);
    }
}

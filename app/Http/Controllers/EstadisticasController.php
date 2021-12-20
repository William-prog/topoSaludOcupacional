<?php

namespace App\Http\Controllers;

use App\Models\accidente;
use App\Models\incidente;
use Illuminate\Http\Request;

class EstadisticasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registroAccidente = accidente::all();
        $registroIncidente = incidente::all();

        return view('estadisticas.index', compact('registroAccidente', 'registroIncidente'));
    }
}

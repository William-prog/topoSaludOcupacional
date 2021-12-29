<?php

namespace App\Http\Controllers;

use App\Models\accidente;
use App\Models\incidente;

use Illuminate\Http\Request;

class ReportePDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generarReporteAccidente($id)
    {
        $registro = accidente::where('id', $id)->orderBy('created_at', 'asc')->get();

        $pdf = \PDF::loadView('reportesAccidentesPDF.reporteAccidente', compact('registro'));
        return $pdf->stream('reportesAccidentesPDF.reporteAccidente', array("Attachment" => true));
    }

    public function generarReporteIncidente($id)
    {
        $registro = incidente::where('id', $id)->orderBy('created_at', 'asc')->get();

        $pdf = \PDF::loadView('reportesIncidentesPDF.reporteIncidente', compact('registro'));
        return $pdf->stream('reportesIncidentesPDF.reporteIncidente', array("Attachment" => true));
    }
}

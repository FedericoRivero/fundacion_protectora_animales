<?php

namespace App\Helper;

use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;

trait gestionPDF
{
    protected function generarPDF($datos, $vista)
    {
        $pdf = Pdf::LoadView($vista, ['datos' => $datos]);
        $pdf->setPaper('A4', 'landscape');
        $output = $pdf->output();
        Storage::disk('public')->put('pdf/test.pdf', $output);
    }
}

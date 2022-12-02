<?php

namespace App\Http\Controllers;

use App\Helper\gestionPDF;
use Illuminate\Http\Request;

class AnimalesController extends Controller
{
    use gestionPDF;

    public function GetGenerarFicha()
    {
        return view('animales.generarFicha');
    }

    public function PostGenerarFicha(Request $request)
    {
        $this->generarPDF($request->all(), 'pdf.modelo1');
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Helper\enviarMail;
use Illuminate\Http\Request;

class DifusionController extends Controller
{

    public function Bienvenida($nombre, $direccion)
    {
        // $nombre = 'Federico';
        // $direccion = 'fundacion@fundacion.org';
        enviarMail::fundacion($nombre, $direccion);
        return view('mails.index', compact('nombre', 'direccion'));
    }
}

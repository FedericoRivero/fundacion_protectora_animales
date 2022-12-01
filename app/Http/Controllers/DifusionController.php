<?php

namespace App\Http\Controllers;

use App\Helper\enviarMail;
use Illuminate\Http\Request;

class DifusionController extends Controller
{
    public function Bienvenida($nombre, $direccion)
    {
        enviarMail::fundacion($nombre, $direccion);
    }
}

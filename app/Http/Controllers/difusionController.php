<?php

namespace App\Http\Controllers;
use App\Helper\enviarMail;
class difusionController extends Controller{

    public function Bienvenida($nombre,$direccion){

     
        enviarMail::fundacion($nombre,$direccion);
    }

}

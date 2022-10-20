<?php

namespace App\Helper;
use Illuminate\Support\Facades\Mail;
use App\Mail\FundacionMail;

class enviarMail{

    static function fundacion($nombre,$destinatario){
       
        Mail::to($destinatario)->send(new FundacionMail($nombre));
    }

}

?>
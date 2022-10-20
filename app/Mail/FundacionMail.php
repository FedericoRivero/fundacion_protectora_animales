<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FundacionMail extends Mailable
{
    use Queueable, SerializesModels;

    public $nombre;
    public function __construct($nombre){
        $this->nombre=$nombre;
    }

    public function build(){
        return $this->view('mails.fundacion');
    }
}

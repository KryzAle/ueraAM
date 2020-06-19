<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App;

class ReportarRechazado extends Mailable
{
    use Queueable, SerializesModels;
    public $nombre;
    public $cedula;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nombre,$cedula)
    {
        $this->nombre = $nombre;
        $this->cedula = $cedula;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Lo sentimos el aspirante ha sido Rechazado!')->view('emails.aspiranterechazado');
    }
}

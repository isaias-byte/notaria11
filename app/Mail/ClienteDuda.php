<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ClienteDuda extends Mailable
{
    use Queueable, SerializesModels;
    public $duda;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->duda = 'GRACIAS POR CONTACTARTE CON NOSOTROS, SI TU NECESIDAD ES URGENTE, 
        CONTACTANOS A CUALQUIERA DE LOS SIGUIENTES TELEFONOS: (33) 38252524 - (33) 38252529';
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('cliente@test.com', 'Duda Cliente')
                ->view('cliente.duda-correo');
    }
}

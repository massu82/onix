<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $nombre;
    public $apellido;
    public $correo;
    public $telefono;
    public $mensaje;
    /**
     * Create a new message instance.
     *
     * @param array $data
     * @return void
     */
    public function __construct($data)
    {
        $this->nombre = $data['nombre'];
        $this->apellido = $data['apellido'];
        $this->correo = $data['correo'];
        $this->telefono = $data['telefono'];
        $this->mensaje = $data['mensaje'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Nuevo mensaje de contacto')
            ->view('emails.contact')
            ->replyTo($this->correo)
            ->with([
                'nombre' => $this->nombre,
                'apellido' => $this->apellido,
                'correo' => $this->correo,
                'telefono' => $this->telefono,
                'mensaje' => $this->mensaje,
            ]);
    }
}

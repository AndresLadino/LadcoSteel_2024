<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EnviarCorreo extends Mailable
{
    use Queueable, SerializesModels;

    public $nombreCliente;
    public $correoCliente; 
    public $telCliente;
    public $msgCliente;
    public $archivosCliente;
    /**
     * Create a new message instance. Pasa los datos al envio
     */
    public function __construct($nombreCliente, $correoCliente, $telCliente, $msgCliente, $archivosCliente)
    {
        $this->nombreCliente = $nombreCliente;
        $this->correoCliente = $correoCliente;
        $this->telCliente = $telCliente;
        $this->msgCliente = $msgCliente;
        $this->archivosCliente = $archivosCliente;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Nos han contactado desde la página, ¡Revisame! 😀',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mails.enviar-correo',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        $filename = 'cotizacion' . $this->nombreCliente . '.pdf';

        if ($this->archivosCliente) {
            return [
                Attachment::fromData(fn() => $this->archivosCliente->get(), $filename)->withMime('application/pdf')
            ];
        }
    
        // Si $this->archivosCliente es nulo, proporciona una respuesta predeterminada
        return [];
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EnviarCorreoProduccion extends Mailable
{
    use Queueable, SerializesModels;
    protected $esCreacion;
    protected $esInsercion;
    public $referencia;
    
    /**
     * Create a new message instance.
     */
    public function __construct($esCreacion = false, $referencia = null)
    {
        $this->esCreacion = $esCreacion;
        

        $this->referencia = $referencia;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        // Decide el asunto basado en si es una creación o edición
        $asunto = $this->esCreacion ? '¡Hemos recibido tu orden! 😎' : '¡Hemos actualizado el estado de tu orden! 😎';

        return new Envelope(
            subject: $asunto,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        $asunto = $this->esCreacion ? 'mails.enviar-produccion' : 'mails.enviar-produccion-edicion';

        return new Content(
            view: $asunto,
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}

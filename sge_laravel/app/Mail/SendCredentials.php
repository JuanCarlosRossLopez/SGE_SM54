<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendCredentials extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $password;
    public $name;
    public $id;
    public $role;

    /**
     * Create a new message instance.
     *
     * @param string $email
     * @param string $password
     * @param string $name
     * @param int $id
     * @param string $role
     */
    public function __construct($email, $password, $name, $id, $role)
    {
        $this->email = $email;
        $this->password = $password;
        $this->name = $name;
        $this->id = $id;
        $this->role = $role;
    }
    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address(
                'utcancun@22393239.edu.mx',   'Sistema de Gestión Escolar'
            ),
            subject: 'Datos de acceso',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.credentials',
            with: [
                'email' => $this->email,
                'password' => $this->password,
                'name' => $this->name,
                'id' => $this->id,
                'role' => $this->role
            ]
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

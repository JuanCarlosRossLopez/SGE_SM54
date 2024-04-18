<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
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
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('noreply@cawy40.dev', 'Sistema de Gestión Escolar')
                    ->subject('Datos de acceso')
                    ->view('emails.credentials')
                    ->with([
                        'email' => $this->email,
                        'password' => $this->password,
                        'name' => $this->name,
                        'id' => $this->id,
                        'role' => $this->role
                    ]);
    }
}

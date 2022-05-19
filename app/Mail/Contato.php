<?php

namespace App\Mail;

use App\Models\Contato as ModelsContato;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contato extends Mailable
{
    use Queueable, SerializesModels, SoftDeletes;

    private $contato;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(ModelsContato $contato)
    {
        $this->contato = $contato;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contact')->with(["contato"=>$this->contato]);
    }
}

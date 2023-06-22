<?php

namespace App\Mail;

use App\Models\Tarefa;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NovaTarefaMail extends Mailable
{
    use Queueable, SerializesModels;

    public $tarefa, $data_limite, $url;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Tarefa $tarefa){
        $this->tarefa = $tarefa;
        $this->data_limite = date('d/m/y', strtotime($tarefa->data_limite));
        $this->url = 'http://localhost:80/tarefa/'.$tarefa->id;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.nova-tarefa')->subject('Nova tarefa criada');
    }
}

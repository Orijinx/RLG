<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class GameRequest extends Mailable
{
    use Queueable, SerializesModels;

    protected $name;
    protected $email;
    protected $subjects;
    protected $message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$email,$subject,$message)
    {
        //
        $this->name = $name ?? "vlad";
        $this->email = $email ?? "vladonnx@mail.ru";
        $this->subjects = $subject ?? "Пошел на хуй";
        $this->message = $message ?? "Зачем она берет мужские письки в рот?";
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('kalugakvests@mail.ru')
        ->view('mail.request')->with(['name'=>$this->name,'email'=>$this->email,'sub'=>$this->subjects,'message'=>$this->message]);
    }
}

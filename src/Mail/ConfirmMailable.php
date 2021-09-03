<?php

namespace samir\formbuilder\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ConfirmMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;
    public $fname;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject, $fname)
    {
        $this->subject = $subject;
        $this->fname = $fname;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('FormBuilder::confirm.mail')->with(['subject'=>$this->subject, 'fname'=>$this->fname]);
    }
}

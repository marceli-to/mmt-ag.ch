<?php
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Newsletter extends Mailable
{
  use Queueable, SerializesModels;

  /**
   * Create a new message instance.
   *
   * @return void
   */
  public function __construct()
  {
  }

  /**
   * Build the message.
   *
   * @return $this
   */
  public function build()
  {
    $this->theme = 'newsletter';

    $mail = $this->from(['address' => \Config::get('mmtag.email.from'), 'name' => \Config::get('mmtag.company')])
                 ->subject('MMT AG Newsletter')
                 ->markdown('mail.newsletter');
    return $mail;
  }
}

<?php
namespace App\Tasks;

class Newsletter
{
  public function __invoke()
  {
    $subscribers = \App\Models\Subscriber::where('is_subscriber', '=', '1')->where('is_sent', '=', '0')->get();
    $subscribers = collect($subscribers)->splice(0, \Config::get('mmtag.cron_chunk_size'));

    foreach($subscribers->all() as $s)
    {
      \Mail::to($s->email)->send(new \App\Mail\Newsletter());
      $s->is_sent = 1;
      $s->save();
    }
  }
}
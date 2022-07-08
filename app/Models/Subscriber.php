<?php
namespace App\Models;
use App\Models\Base;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
	protected $fillable = [
		'email',
		'token',
    'is_sent',
    'is_subscriber',
  ];
}

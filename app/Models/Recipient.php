<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recipient extends Model
{
    use HasFactory;
    use Notifiable;
    protected $recipient;
    protected $email;
    public function __construct() {
          $this->recipient = config('recipient.name');
          $this->email = config('recipient.email');
      }
}

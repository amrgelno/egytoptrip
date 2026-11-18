<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client_req extends Model
{
      use HasFactory;

      protected $table = 'client_req';

     protected $fillable =['ID','username','email','Client_POST'];

     public $timestamps=false; 
}

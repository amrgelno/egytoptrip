<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fpforms extends Model
{
    use HasFactory;

    protected $table = 'fpforms';

    protected $fillable = ['Formstyle','FormType','Contact_form','box_id','relatedtopic_id'];

    public $timestamps=true;   // default  true or false
    
}
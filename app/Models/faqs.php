<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class faqs extends Model
{
    use HasFactory;

protected $table = 'faqs';

protected $fillable = ['Question', 'Ar_Question', 'Answer', 'Ar_Answer', 'nav_id', 'box_id', 'relatedtopic_id'];

public $timestamps=true;   // default  true or false
    
}

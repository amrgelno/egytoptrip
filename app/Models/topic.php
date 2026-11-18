<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class topic extends Model
{
    use HasFactory;

protected $table = 'topics';

protected $fillable = ['subject','content','Ar_subject','Ar_content','ImageName','Topic_style','show','nav_id','box_id','relatedtopic_id'];

public $timestamps=true;   // default  true or false

}

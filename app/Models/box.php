<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class box extends Model
{
    use HasFactory;

    protected $table = 'boxes';

    protected $fillable = ['Desc','title','Ar_title','Ar_Desc','ImageName','price','price1','GroupSize', 'Duration','Country','City','cat_Name','Ar_cat_Name','cat_type','nav_id','box_id','related_id','relatedtopic_id','BOX_STYLE'];

    public $timestamps=true;   // default  true or false

}
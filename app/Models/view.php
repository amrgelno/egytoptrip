<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class view extends Model
{

use HasFactory;

protected $table = 'view';

protected $fillable = ['ID', 'Fontstyle', 'Fontsize', 'ulcolor', 'Fontcolor', 'FontType', 'sub1color', 'sub2color', 'bgcolor', 'bg_Image', 'Footercolor', 'paragraph_colour', 'paragraph_FontType', 'headline_FontType', 'H1_Colour', 'H2_Colour', 'H3_Colour', 'H4_Colour', 'H5_Colour', 'H6_Colour','LinkColour', 'LinkHovercolour', 'LinkFonttype', 'container', 'BusinessModel'];

public $timestamps=false;

}
<?php

include("connect.php");

class MetaTag  extends  condb{

public function sql(){

$select="select * From  themes";

$Themequery=$this->connectF()->query($select);

while($column=mysqli_fetch_object($Themequery)){


    $Theme=$column->Theme_Name ;
    $Theme_status=$column->status ;


if($Theme=='default'   &   $Theme_status  ==  'Active'){

  include('defaultstyle.php');


}elseif($Theme=='Blog'  &    $Theme_status  ==  'Active'){





}




}

$selector="select * From  companies";

$boxquery=$this->connectF()->query($selector);

while($column=mysqli_fetch_object($boxquery)){



  include('SEO Markups/Seomarkupmetatag.php')  ;


}
}
}
$use= new MetaTag();
$use->connectF();
$use->sql();
?>

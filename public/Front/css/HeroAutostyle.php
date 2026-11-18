<?php
header('Content-type:text/css; charset:utf-8');

include("con_db2.php");
$selector="select * from view where id=(select max(id) from view)";
$exe=mysqli_query($connect,$selector);
if($column=mysqli_fetch_assoc($exe)){
?>

body {

background-color: <?php echo $column['bgcolor']?> !important ;
/*background: url(../Front/IMG/<?php echo $column['bg_Image'] ?>);*/


}


.header {
/* background-color: #09415d !important ; */
background-color: <?php echo $column['ulcolor']?> !important ;
color : white !important;
}



h1{

/* color: white !important;*/

color: <?php echo $column['H1_Colour']?> !important; /* First Headline */

}



h2{
/* color : #09415d !important; */
color: <?php echo $column['H2_Colour']?> !important; /* second Headline */
}


h3{
/*color : #09415d !important;*/
color: <?php echo $column['H3_Colour']?> !important; /* second Headline */
}


h4{


color: <?php echo $column['H4_Colour']?> !important; /* second Headline */


}



h5{

color: <?php echo $column['H5_Colour']?> !important; /* second Headline */

}

.navbar-nav .nav-link {

color:<?php echo $column['LinkColour']?>!important;
}

.navbar {

background:<?php echo $column['ulcolor']?>;

/*background: #dce1e1;*/

}



ul.dropdown-menu.dropdown-menu-light{


/*background:<?php echo $column['sub1color']?>;*/

background: #5151516b;

/*color : white !important ;*/

}




ul.submenu.dropdown-menu.dropdown-menu {


/*background:<?php echo $column['sub2color']?>;*/

background: #5151516b;
/*color : white !important ;*/

}







.site-footer {
background-color:<?php echo $column['Footercolor']?>;
/* background-color: #4CAF50;*/
padding-top: 70px;
}




.dropdown-menu megamenu show{


/* background-color : #09415d !important ; */


color : white !important ;

}


.navbar .megamenu {

background-color : <?php echo $column['sub1color']?> !important ;

}

button{
/* background-color : #c4a948 !important ;*/
/*color : white !important ; */
}


a:link{

color: <?php echo $column['LinkColour']?> !important;

}


a:hover{

/* color : #c4a948 !important; */
color: <?php echo $column['LinkHovercolour']?> !important;

}



input:[type:button]{
color : #c5c5c5 !important;
}


p{


/*color:black!important;*/

}




<?php


}



?>


.site-footer-bottom{

background:#feb251;


}


span{

color:#e13a31 !important;
font-weight:bolder !important;


}

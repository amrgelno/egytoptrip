<?phpheader('Content-type:text/css; charset:utf-8');include("con_db2.php");$selector="select * from view where id=(select max(id) from view)";$exe=mysqli_query($connect,$selector);if($column=mysqli_fetch_assoc($exe))
{






?>body
{






background-color:
<?php echo $column['bgcolor']?>!important ;}.header
{






background-color: <?php echo $column['ulcolor']?>!important ;color :
white !important}h1
{






color: <?php echo $column['H1_Color']?>!important; }h2
{






color:
<?php echo $column['H2 Color']?>!important; }h3
{






color: <?php echo $column['H3_Color']?>!important; }h4
{






color:
<?php echo $column['H4_Color']?>!important; }h5
{






color: <?php echo $column['H5 color']?>!important;
}.navbar
{






background:<?php echo $column['ulcolor']?>}ul.dropdown-menu.dropdown-menu-light
{






background:<?php echo $column['sub1color']?>;}ul.submenu.dropdown-menu.dropdown-menu
{






background:<?php echo $column['sub2color']?>;}.site-footer
{






background-color:<?php echo $column['Footercolor']?>;padding-top:
70px}.dropdown-menu megamenu show
{






color : white !important }.navbar .megamenu
{






background-color :
<?php echo $column['sub1color']?>!important }button
{






}a:hover
{






color:
<?php echo $column['Link Hover']?>!important}input:[type:button]
{






color : #c5c5c5 !important}p
{






}
<?php
    }
    ?>
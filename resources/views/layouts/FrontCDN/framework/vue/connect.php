<?php
abstract class condb {
  // Properties    cannot creat object

  protected $localhost='db.fr-roub1.bengt.wasmernet.com:20184';
  protected $password='pw_W4Y0BYC75fxTmfZOXrQv5cXMFaFMqW5A';
  protected $dbuser='user_68e6d6b8';
  protected $db2='db_a9db95dd';

  // Methods
 public function connectF() {

   $connect= new mysqli($this->localhost,$this->dbuser,$this->password,$this->db2)  ;

   return   $connect;

	/*mysqli_select_db($connect,);*/
  }

     #abstract function sql();
	 #abstract function cover();

}



?>

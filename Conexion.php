<?php

class Conexion
{
	protected $db;
	private $drive = "mysql";
	private $host = "localhost";
	private $namebd = "notas2023";
	private $user = "root";
	private $password = "";


	public function __construct()
	{

      try{
         $db = new PDO("{$this->drive}:host={$this->host};namebd={$this->namebd}; $this->user, $this->password");

         $db.setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      //return $db;
      echo "conexion realizada";

      }catch(PDOEXCEPTION $e){

      	echo "no se puede realizar la conexion ".$e->getMessage();

      }

	}
}

?>
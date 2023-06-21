<?php
require_once('../../Conexion.php');
require_once('../modelos/administrador.php');
if($_POST)
{
	$administrador = new Administrador();
	$Nombreusu= $_POST['txtnombre'];
	$Apellidousu=$_POST['txtapellido'];
	$Usuariousu=$_POST['txtusuario'];
	$Passwordusu=$_POST['txtcontrasena'];
	$Perfil=$_POST['txtperfil'];
	$Estadousu=$_POST['txtestado'];

	$administrador->addadmi($Nombreusu,$Apellidousu,$Usuariousu,$Passwordusu,$Perfil,$Estadousu);

}


?>
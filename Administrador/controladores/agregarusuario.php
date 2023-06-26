<?php
include_once('../../Conexion.php');
include_once('../modelos/administrador.php');

//crear el objeto de la clase administrador;

$admin = new Administrador();

//definir los argumentos que se van enviar por emdio funcion 
//insertar usuario

$Nombreusu = $_POST['txtnombre'];
$Apellidousu = $_POST['txtapellido'];
$Usuariousu = $_POST['txtusuario'];
$Passwordusu = MD5($_POST['txtcontrasena']);
$Perfil = $_POST['txtperfil'];
$Estadousu = $_POST['txtestado'];

$admin->addadmi($Nombreusu,$Apellidousu,$Usuariousu,$Passwordusu,$Perfil,$Estadousu);


?>
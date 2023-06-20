
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="utf-8">
        <title>Gestion</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <title></title>
    </head>
    <body>
      
 
        <br>
      
        <div class="container">
 <h1 style="color:blue;text-align:center;">LISTADO DE USUARIOS</h1>
          
  <table class="table table-dark">
    <thead>
      <tr>
        <th>CODIGO</th>
        <th>USUARIO</th>
        <th>EMAIL</th>
        <th>ROL</th>
        
      </tr>
    </thead>
    <tbody>
      <?php

      $Conexion = mysqli_connect("localhost","root","","gestionsena2022") or 
                  die("Problemas con la conexion");
      $Resultado = mysqli_query($Conexion,"SELECT * FROM usuario")or die("Problemas al consultar la tabla".mysqli_error($Conexion));

          while($registro=mysqli_fetch_array($Resultado)){
      ?>
        <tr>

          <th><?php 
                      $codigo = $registro['Codusuario'];
                      echo $codigo; ?></th>
          <th><?php echo $registro['usuario'];?></th>
          <th><?php echo $registro['Email'];?></th>
          <th><?php echo $registro['Rol'];?></th>
          
        </tr>      
    <?php } ?>
    </tbody>
  </table>
</div>

       
    </body>
</html>
